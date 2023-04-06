<?php

namespace App\Http\Controllers;

use App\Models\Phoneotp;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

// use Validator;
use Illuminate\Support\Facades\Validator;
use Image;

class LoginController extends Controller
{

    public function login(Request $request)
    {

        if (Auth::attempt(['phone' => request('phone'), 'password' => request('password')])) {
            $user = Auth()->user()->role_id;
            if ($user == 1) {
                return redirect()->route('admin_index');
            } elseif ($user == 2) {
                return redirect()->route('index');
            }
        } else {
            return redirect()->back()->with('success', 'Invalid Credential');
        }
    }

    function otp()
    {
        return view('auth.Otp');
    }
    //sms api
    function send_sms($phone, $otp)
    {
        $url = "https://portal.adnsms.com/api/v1/secure/send-sms";

        $data = [
            "api_key" => "KEY-b9a2zitnbwf7lyu4f6yyz2h8g6gz7nv3",
            "api_secret" => "BL@23Tm@iGj6JbLz",
            "request_type" => "SINGLE_SMS",
            "message_type" => "TEXT",
            "mobile" => "88" . $phone,
            "message_body" => "Your ToletX verification code " . $otp,
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        // dd($phone,$otp,$url,$data,$ch);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }
    //end sms api
    public function sendOtp(Request $request)
    {

        $otp = rand(1000, 9999);
        $response = $this->send_sms($request->phone, $otp);
        $phone = Phoneotp::where(['phone_number' => $request->phone])->first();
        if (!empty($phone)) {
            $phone->update([
                'isverified' => 0,
                'otp' => $otp
            ]);
        } else {
            $user = Phoneotp::create([
                'phone_number' => $request->phone,
                'otp' => $otp
            ]);
        }
        return redirect()->route('verify.otp', ['phone' => $request->phone]);
        return response()->json([$user], 200);
    }
    public function verifyOtp()
    {
        return view('auth.verify-otp');
    }

    public function login_Otp(Request $request)
    {
        $phoneinfo = Phoneotp::where('phone_number', $request->phone)->first();

        $time = Carbon::now()->diffInSeconds($phoneinfo->updated_at);
        if ($time > 60) {
            return redirect()->back()->with('Failed', 'your time is up!! Enter your mobile number again');
        }
        if ($phoneinfo && $phoneinfo->otp == $request->otp) {
            $phoneinfo->update([
                'otp' => '',
                'isverified' => 1
            ]);
            return redirect()->route('registration', ['phone' => $request->phone]);
        }
        return redirect()->back();
    }

    public function stepper_1(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'nullable|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'photo' => 'image|mimes:jpeg,png,jpg'
        ], [
            'name.required' => 'Name Field Is Required!',
            'phone.required' => 'Phone Field Is Required!',
            'email.email' => 'Email Field Must Be Email Formatted!',
            'password.required' => 'Password Field Is Required!',
            'password_confirmation.required' => 'Password Confirmation Field Is Required!',
            'password_confirmation.same' => 'Password & Password Confirmation Value Must Be Same!',
            'photo.image' => 'Profile Picture Field Must Be Image Format.',
            'photo.mimes' => 'Profile Picture Field Must Be jpeg,png,jpg format.'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 404,
                'error' => $validator->errors()
            ]);
        } else {
            if (!$request->new_uID) {
                // create
                $custom_id = User::latest('id')->first();
                if (empty($custom_id)) {
                    $k = 0;
                } else {
                    $k = $custom_id->id;
                }
                $k++;
                $i = $k;
                $n = $request->name;
                $date = date('dmY');
                $view = $n . '-' . $date . '-' . $i;

                // $phone = Phoneotp::where(['phone_number' => $request->phone, 'isverified' => 1])->exists();
                // if (!$phone) {
                //     return redirect()->back()->withErrors(['msg' => 'Phone is not verified']);
                // }

                $check = User::where('phone', $request->phone)->first();
                if ($check) {
                    return back()->with('success2','You Already have account');
                }else{
                    $auth_image = User::create([
                        'unique_id' => $view,
                        'name' => $request->name,
                        'phone' => $request->phone,
                        'email' => $request->email,
                        'role_id' => 2,
                        'password' => Hash::make($request['password']),
                    ]);

                    if ($request->file('photo')) {
                        $file = $request->file('photo');
                        $filename = date('YmdHi') . $file->getClientOriginalName();
                        $file->move(public_path('/uploads/registers/'), $filename);
                        $auth_image['image'] = $filename;
                    }
                    $auth_image->save();

                }

                return response()->json([
                    'status' => 200,
                    'newUser_id' => $auth_image->id,
                ]);

            } else {
                // update
                if ($request->hasFile('photo')) {
                    $photo = $request->photo;
                    $photoName = $request->new_uID . '.' . $photo->getClientOriginalExtension();
                    if (User::findOrFail($request->new_uID)) {
                        image::make($photo)->save(base_path("public/uploads/registers/" . $photoName), 100);
                        User::findOrFail($request->new_uID)->update([
                            'image' => $photoName,
                        ]);
                    } else {
                        (base_path("/uploads/auths/" . $photoName));
                        Image::make($photo)->save(base_path("/uploads/registers/" . $photoName), 100);
                    }
                }

                User::find($request->new_uID)->update([
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'role_id' => 2,
                    'password' => Hash::make($request['password'])
                ]);
                
                return response()->json([
                    'status' => 200,
                    'newUser_id' => $request->new_uID,
                ]);
            }
        }
    }

    public function stepper_2(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'date_of_birth' => 'required',
            'gender' => 'required|in:Male,Female,Other',
            'trems' => 'required',
            'n_photo1' => 'image|mimes:jpeg,png,jpg',
            'n_photo2' => 'image|mimes:jpeg,png,jpg'
        ], [
            'date_of_birth.required' => 'Date of Birth Field Is Required!',
            'gender.required' => 'Gender Field Is Required!',
            'gender.in' => 'Gender Field Must Be Selected!',
            'trems.required' => 'Please Check Terms & Condition!',
            'n_photo1.image' => 'NID Front Field Must Be Image Format.',
            'n_photo1.mimes' => 'NID Front Field Must Be jpeg,png,jpg format.',
            'n_photo2.image' => 'NID Back Field Must Be Image Format.',
            'n_photo2.mimes' => 'NID Back Field Must Be jpeg,png,jpg format.'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 404,
                'error' => $validator->errors()
            ]);
        } else {
            // update
            $auth_image = User::find($request->new_uID);
            $auth_image->update([
                'nationality' => $request->nationality,
                'father_name' => $request->father_name,
                'mother_name' => $request->mother_name,
                'address' => $request->address,
                'date_of_birth' => $request->date_of_birth,
                'gender' => $request->gender,
                'fav_qt1' => $request->fav_qt1,
                'fav_ans1' => $request->fav_ans1,
                'terms' => 1,
            ]);

            if ($request->file('n_photo1')) {
                $file = $request->file('n_photo1');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('/uploads/registers/'), $filename);
                $auth_image['n_photo1'] = $filename;
            }
            $auth_image->save();
            if ($request->file('n_photo2')) {
                $file = $request->file('n_photo2');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('/uploads/registers/'), $filename);
                $auth_image['n_photo2'] = $filename;
            }
            $auth_image->save();

            Auth::login($auth_image);

            return response()->json([
                'status' => 200,
            ]);
        }
    }

    // public function register(Request $request)
    // {

    //     $custom_id = User::latest('id')->first();
    //     if (empty($custom_id)) {
    //         $k = 0;
    //     } else {
    //         $k = $custom_id->id;
    //     }
    //     $k++;
    //     $i = $k;
    //     $n = $request->name;
    //     $date = date('dmY');
    //     $view = $n . '-' . $date . '-' . $i;
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required',
    //         'phone' => 'required',
    //         'trems' => 'required',
    //         'password' => 'required',
    //         'password_confirmation' => 'required|same:password',
    //     ]);
    //     if ($validator->fails()) {
    //         return back()->with('success', 'Are you Agree Our Terms And Conditon?');
    //     }
    //     $phone = Phoneotp::where(['phone_number' => $request->phone, 'isverified' => 1])->exists();
    //     if (!$phone) {
    //         return redirect()->back()->withErrors(['msg' => 'Phone is not verified']);
    //     }

    //     $check = User::where('phone', $request->phone)->first();
    //     if ($check) {
    //         return back()->with('success2', 'You Already have account');
    //     } else {

    //         $auth_image = User::create([
    //             'unique_id' => $view,
    //             'name' => $request->name,
    //             'phone' => $request->phone,
    //             'photo' => $request->photo,
    //             'email' => $request->email,
    //             'nationality' => $request->nationality,
    //             'father_name' => $request->father_name,
    //             'mother_name' => $request->mother_name,
    //             'address' => $request->address,
    //             'date_of_birth' => $request->date_of_birth,
    //             'gender' => $request->gender,
    //             'n_photo1' => $request->n_photo1,
    //             'n_photo2' => $request->n_photo2,
    //             'role_id' => 2,
    //             'password' => Hash::make($request['password']),
    //             'fav_qt1' => $request->fav_qt1,
    //             'fav_ans1' => $request->fav_ans1,
    //             'terms' => 1,

    //         ]);
    //         if ($request->file('photo')) {
    //             $file = $request->file('photo');
    //             $filename = date('YmdHi') . $file->getClientOriginalName();
    //             $file->move(public_path('/uploads/registers/'), $filename);
    //             $auth_image['photo'] = $filename;
    //         }
    //         $auth_image->save();
    //         if ($request->file('n_photo1')) {
    //             $file = $request->file('n_photo1');
    //             $filename = date('YmdHi') . $file->getClientOriginalName();
    //             $file->move(public_path('/uploads/registers/'), $filename);
    //             $auth_image['n_photo1'] = $filename;
    //         }
    //         $auth_image->save();
    //         if ($request->file('n_photo2')) {
    //             $file = $request->file('n_photo2');
    //             $filename = date('YmdHi') . $file->getClientOriginalName();
    //             $file->move(public_path('/uploads/registers/'), $filename);
    //             $auth_image['n_photo2'] = $filename;
    //         }
    //         $auth_image->save();

    //         if (Auth::attempt(['phone' => request('phone'), 'password' => request('password')])) {
    //             return redirect()->route('index')->with('success', 'Please Complete your profile information.');
    //         } else {
    //             return Redirect::back();
    //         }
    //     }
    // }

    public function change_pass()
    {
        return view('frontend.user.change_Password');
    }

    public function store_pass(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);

        //dd('Password change successfully.');
        return redirect()->route('profile');
    }


    public function forgot()
    {
        return view('auth.forgot_password_Otp');
    }

    public function forgotOtp(Request $request)
    {
        $number_exist = User::where('phone', '=', $request->phone)->exists();
        if ($number_exist) {
            $otp = rand(1000, 9999);
            $response = $this->send_sms($request->phone, $otp);
            $phone = Phoneotp::where(['phone_number' => $request->phone])->first();
            if (!empty($phone)) {
                $phone->update([
                    'isverified' => 0,
                    'otp' => $otp
                ]);
            } else {
                $user = Phoneotp::create([
                    'phone_number' => $request->phone,
                    'otp' => $otp
                ]);
                return redirect()->route('varify_forgot_otp', ['phone' => $request->phone]);
                return response()->json([$user], 200);
            }
        } else {
            return redirect()->back()->with('success', 'you Enter wrong mobile number!! please Try Again.');
        }
    }
    public function verify_forgotOtp()
    {
        return view('auth.forgot_pass_verify_Otp');
    }

    public function forgot_login_Otp(Request $request)
    {
        $phoneinfo = Phoneotp::where('phone_number', $request->phone)->first();
        if ($phoneinfo && $phoneinfo->otp == $request->otp) {
            $phoneinfo->update([
                'otp' => '',
                'isverified' => 1
            ]);
            return redirect()->route('forgot_pass', ['phone' => $request->phone]);
        }
        return redirect()->back();
    }
    public function forgot_pass()
    {
        return view('auth.forgot_password');
    }

    public function forgot_pass_update(Request $request)
    {
        $request->validate([
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);
        // $jd = User::where('phone', $request->phone)->get();

        User::where('phone', $request->phone)->update(['password' => Hash::make($request->new_password)]);

        //dd('Password change successfully.');
        return redirect()->route('index');
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('index')->with('massage', 'Admin Logout Sucsessfully');
    }
    // public function redirectToGoogle()
    // {
    //     return Socialite::driver('google')->redirect();
    // }
    // public function callbackFromGoogle()
    // {
    //     try {
    //         $user = Socialite::driver('google')->stateless()->user();
    //         // dd($user);
    //         $saveUser = User::updateOrCreate([
    //             'google_id' => $user->getId(),
    //         ], [
    //             'name' => $user->getName(),
    //             'email' => $user->getEmail(),
    //             'password' => Hash::make($user->getName() . '@' . $user->getId()),
    //         ]);

    //         Auth::loginUsingId($saveUser->id);

    //         return redirect()->route('index');
    //     } catch (\Throwable $th) {
    //         throw $th;
    //     }
    //     return redirect()->route('index');
    // }
}

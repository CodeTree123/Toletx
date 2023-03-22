<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Frontend\DetailesController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\Frontend\UpdateController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(["verify" => true]);
    // login
    Route::post('/login',  [LoginController::class, 'login'])->name('login');

    //otp
    Route::get('/Otp/mobile', [LoginController::class, 'otp'])->name('otp');
    Route::post('/login/Otp', [LoginController::class, 'login_Otp'])->name('login.Otp');

    Route::post('send/Otp', [LoginController::class, 'sendOtp'])->name('send.otp');
    Route::get('/verify/otp', [LoginController::class, 'verifyOtp'])->name('verify.otp');

    Route::get('/registration', [UserController::class, 'registration'])->name('registration');
    Route::post('/new/register', [LoginController::class, 'register'])->name('register');

    Route::get('change-password', [LoginController::class, 'change_pass'])->name('change_password_form');
    Route::post('change-password', [LoginController::class, 'store_pass'])->name('change_password');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/Form/post', [PostController::class, 'Form'])->name('Form');

    Route::get('forgot/password', [LoginController::class, 'forgot'])->name('forgot_password_form');
    Route::post('forgot/Otp', [LoginController::class, 'forgotOtp'])->name('forgot.otp');

    Route::get('/verify/forgot/otp', [LoginController::class, 'verify_forgotOtp'])->name('varify_forgot_otp');
    Route::post('forgot/login/Otp', [LoginController::class, 'forgot_login_Otp'])->name('forgot.login.Otp');

    Route::get('/password/confirm', [LoginController::class, 'forgot_pass'])->name('forgot_pass');
    Route::post('forgot/password/update', [LoginController::class, 'forgot_pass_update'])->name('forgot_pass_update');

    // user
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/room', [UserController::class, 'room'])->name('room');

    Route::get('/flat', [UserController::class, 'flat'])->name('flat');
    Route::get('/building', [UserController::class, 'building'])->name('building');

    Route::get('/garage', [UserController::class, 'parking'])->name('parking');
    Route::get('/hotel', [UserController::class, 'hotel'])->name('hotel');

    Route::get('/hostel', [UserController::class, 'hostel'])->name('hostel');
    Route::get('/resort', [UserController::class, 'resort'])->name('resort');

    Route::get('/office', [UserController::class, 'office'])->name('office');
    Route::get('/shop', [UserController::class, 'shop'])->name('shop');

    Route::get('/community/hall', [UserController::class, 'community_hall'])->name('community_hall');
    Route::get('/factory', [UserController::class, 'factory'])->name('factory');

    Route::get('/warehouse', [UserController::class, 'warehouse'])->name('warehouse');
    Route::get('/land', [UserController::class, 'land'])->name('land');

    Route::get('/pond', [UserController::class, 'pond'])->name('pond');
    Route::get('/ghat', [UserController::class, 'ghat'])->name('ghat');

    Route::get('/swimming_pool', [UserController::class, 'swimming_pool'])->name('swimming_pool');
    Route::get('/camp/site', [UserController::class, 'playground'])->name('playground');

    Route::get('/shooting_spot', [UserController::class, 'shooting_spot'])->name('shooting_spot');
    Route::get('/picnic_spot', [UserController::class, 'picnic_spot'])->name('picnic_spot');

    Route::get('/exhibition_center', [UserController::class, 'exhibition_center'])->name('exhibition_center');
    Route::get('/rooftop', [UserController::class, 'rooftop'])->name('rooftop');
    Route::get('/billboard', [UserController::class, 'bilboard'])->name('bilboard');

    Route::get('/faq', [UserController::class, 'faq'])->name('faq');
    Route::get('/report_contact_us', [UserController::class, 'report_contact_us'])->name('report_contact_us');

    Route::post('/report/post', [UserController::class, 'report_post'])->name('report_post');
    Route::get('/advertise', [UserController::class, 'advertise'])->name('advertise');

    Route::get('/my_shortlist', [UserController::class, 'my_shortlist'])->Middleware('auth')->name('my_shortlist');
    Route::get('/marketing/request', [UserController::class, 'marketing_request'])->name('marketing_request');

    Route::get('/profile', [PostController::class, 'profile'])->name('profile');
    Route::get('/package', [UserController::class, 'package'])->name('package');

    Route::get('/term', [UserController::class, 'term'])->name('term');
    Route::get('/user/edit/{id}', [PostController::class, 'user_edit'])->name('user_edit');

    Route::post('/user/update/{id}', [PostController::class, 'user_update'])->name('user_update');
    Route::get('/user/my/list/{id}', [UserController::class, 'add_to_short_list'])->name('user_mylist');

    //end user route

//header service route

    Route::get('/post/room', [PostController::class, 'post_room'])->name('post_room'); 
    Route::get('/post/flat', [PostController::class, 'post_flat'])->name('post_flat'); 

    Route::get('/post/building', [PostController::class, 'post_building'])->name('post_building');
    Route::get('/post/garage', [PostController::class, 'post_parking_spot'])->name('post_parking_spot');

    Route::get('/post/hotel', [PostController::class, 'post_hotel'])->name('post_hotel');
    Route::get('/post/hostel', [PostController::class, 'post_hostel'])->name('post_hostel');

    Route::get('/post/resort', [PostController::class, 'post_resort'])->name('post_resort');
    Route::get('/post/office', [PostController::class, 'post_office'])->name('post_office');

    Route::get('/post/shop', [PostController::class, 'post_shop'])->name('post_shop');
    Route::get('/post/community/hall', [PostController::class, 'post_community'])->name('post_community');

    Route::get('/post/factory', [PostController::class, 'post_factory'])->name('post_factory');
    Route::get('/post/warehouse', [PostController::class, 'post_warehouse'])->name('post_warehouse');

    Route::get('/post/land', [PostController::class, 'post_land'])->name('post_land');
    Route::get('/post/pond', [PostController::class, 'post_pond'])->name('post_pond');

    Route::get('/post/ghat', [PostController::class, 'post_ghat'])->name('post_ghat'); 
    Route::get('/post/swimming/pool', [PostController::class, 'post_swimmingpool'])->name('post_swimmingpool');

    Route::get('/post/camp/site', [PostController::class, 'post_playground'])->name('post_playground');
    Route::get('/post/shooting/spot', [PostController::class, 'post_shooting'])->name('post_shooting');

    Route::get('/post/picnic', [PostController::class, 'post_picnic'])->name('post_picnic');
    Route::get('/post/exhibition/Hall', [PostController::class, 'post_exhibution'])->name('post_exhibution');

    Route::get('/post/rooftop', [PostController::class, 'post_rooftop'])->name('post_rooftop');
    Route::get('/post/billboard', [PostController::class, 'post_bilboard'])->name('post_bilboard');

//end header service route

//service post Route
    Route::post('/post/room/rented', [PostController::class, 'post_room_rented'])->name('post_room_rented');
    Route::post('/post/room/wanted', [PostController::class, 'post_room_wanted'])->name('post_room_wanted');

    Route::post('/post/flat/rented', [PostController::class, 'post_flat_rented'])->name('post_flat_rented');
    Route::post('/post/flat/wanted', [PostController::class, 'post_flat_wanted'])->name('post_flat_wanted');

    Route::post('/post/building/rented', [PostController::class, 'post_building_rented'])->name('post_building_rented');
    Route::post('/post/building/wanted', [PostController::class, 'post_building_wanted'])->name('post_building_wanted');

    Route::post('/post/garage/rented', [PostController::class, 'post_parking_spot_rented'])->name('post_parking_spot_rented');
    Route::post('/post/garage/wanted', [PostController::class, 'post_parking_spot_wanted'])->name('post_parking_spot_wanted');

    Route::post('/post/hotel/rented', [PostController::class, 'post_hotel_rented'])->name('post_hotel_rented');
    Route::post('/post/hotel/wanted', [PostController::class, 'post_hotel_wanted'])->name('post_hotel_wanted');

    Route::post('/post/hostel/rented', [PostController::class, 'post_hostel_rented'])->name('post_hostel_rented');
    Route::post('/post/hostel/wanted', [PostController::class, 'post_hostel_wanted'])->name('post_hostel_wanted');

    Route::post('/post/restaurant/rented', [PostController::class, 'post_restuarant_rented'])->name('post_restuarant_rented');
    Route::post('/post/restaurant/wanted', [PostController::class, 'post_restuarant_wanted'])->name('post_restuarant_wanted');

    Route::post('/post/office/rented', [PostController::class, 'post_office_rented'])->name('post_office_rented');
    Route::post('/post/office/wanted', [PostController::class, 'post_office_wanted'])->name('post_office_wanted');

    Route::post('/post/shop/rented', [PostController::class, 'post_shop_rented'])->name('post_shop_rented');
    Route::post('/post/shop/wanted', [PostController::class, 'post_shop_wanted'])->name('post_shop_wanted');

    Route::post('/post/community/hall/wanted', [PostController::class, 'post_community_wanted'])->name('post_community_wanted');
    Route::post('/post/community/hall/rented', [PostController::class, 'post_community_rented'])->name('post_community_rented');

    Route::post('/post/factory/rented', [PostController::class, 'post_factory_rented'])->name('post_factory_rented');
    Route::post('/post/factory/wanted', [PostController::class, 'post_factory_wanted'])->name('post_factory_wanted');

    Route::post('/post/warehouse/rented', [PostController::class, 'post_warehouse_rented'])->name('post_warehouse_rented');
    Route::post('/post/warehouse/wanted', [PostController::class, 'post_warehouse_wanted'])->name('post_warehouse_wanted');

    Route::post('/post/land/rented', [PostController::class, 'post_land_rented'])->name('post_land_rented');
    Route::post('/post/land/wanted', [PostController::class, 'post_land_wanted'])->name('post_land_wanted');

    Route::post('/post/pond/wanted', [PostController::class, 'post_pond_wanted'])->name('post_pond_wanted');
    Route::post('/post/pond/rented', [PostController::class, 'post_pond_rented'])->name('post_pond_rented');

    Route::post('/post/ghat/rented', [PostController::class, 'post_ghat_rented'])->name('post_ghat_rented');
    Route::post('/post/ghat/wanted', [PostController::class, 'post_ghat_wanted'])->name('post_ghat_wanted');

    Route::post('/post/swimming/pool/rented', [PostController::class, 'post_swimmingpool_rented'])->name('post_swimmingpool_rented');
    Route::post('/post/swimming/pool/wanted', [PostController::class, 'post_swimmingpool_wanted'])->name('post_swimmingpool_wanted');

    Route::post('/post/camp/site/rented', [PostController::class, 'post_playground_rented'])->name('post_playground_rented');
    Route::post('/post/camp/site/wanted', [PostController::class, 'post_playground_wanted'])->name('post_playground_wanted');

    Route::post('/post/shooting/rented', [PostController::class, 'post_shooting_rented'])->name('post_shooting_rented');
    Route::post('/post/shooting/wanted', [PostController::class, 'post_shooting_wanted'])->name('post_shooting_wanted');

    Route::post('/post/picnic/rented', [PostController::class, 'post_picnic_rented'])->name('post_picnic_rented');
    Route::post('/post/picnic/wanted', [PostController::class, 'post_picnic_wanted'])->name('post_picnic_wanted');

    Route::post('/post/exhibition_center/wanted', [PostController::class, 'post_exibution_center_wanted'])->name('post_exibution_center_wanted');
    Route::post('/post/exhibition_center/rented', [PostController::class, 'post_exibution_center_rented'])->name('post_exibution_center_rented');

    Route::post('/post/rooftop/rented', [PostController::class, 'post_rooftop_rented'])->name('post_rooftop_rented');
    Route::post('/post/rooftop/wanted', [PostController::class, 'post_rooftop_wanted'])->name('post_rooftop_wanted');

    Route::post('/post/billboard/rented', [PostController::class, 'post_bilboard_rented'])->name('post_bilboard_rented');
    Route::post('/post/bilboard/wanted', [PostController::class, 'post_bilboard_wanted'])->name('post_bilboard_wanted');

//end service post Route

//service post edit routes
    Route::get('/room/edit/{id}', [DetailesController::class, 'user_room_edit'])->name('user_room_edit');
    Route::get('/flat/edit/{id}', [DetailesController::class, 'user_flat_edit'])->name('user_flat_edit');

    Route::get('/building/edit/{id}', [DetailesController::class, 'user_building_edit'])->name('user_building_edit');
    Route::get('/garage/edit/{id}', [DetailesController::class, 'user_parking_edit'])->name('user_parking_edit');

    Route::get('/hotel/edit/{id}', [DetailesController::class, 'user_hotel_edit'])->name('user_hotel_edit');
    Route::get('/hostel/edit/{id}', [DetailesController::class, 'user_hostel_edit'])->name('user_hostel_edit');

    Route::get('/resort/edit/{id}', [DetailesController::class, 'user_resort_edit'])->name('user_resort_edit');
    Route::get('/office/edit/{id}', [DetailesController::class, 'user_office_edit'])->name('user_office_edit');

    Route::get('/shop/edit/{id}', [DetailesController::class, 'user_shop_edit'])->name('user_shop_edit');
    Route::get('/community/hall/edit/{id}', [DetailesController::class, 'user_community_edit'])->name('user_community_edit');

    Route::get('/factory/edit/{id}', [DetailesController::class, 'user_factory_edit'])->name('user_factory_edit');
    Route::get('/warehouse/edit/{id}', [DetailesController::class, 'user_warehouse_edit'])->name('user_warehouse_edit');

    Route::get('/land/edit/{id}', [DetailesController::class, 'user_land_edit'])->name('user_land_edit');
    Route::get('/pond/edit/{id}', [DetailesController::class, 'user_pond_edit'])->name('user_pond_edit');

    Route::get('/ghat/edit/{id}', [DetailesController::class, 'user_ghat_edit'])->name('user_ghat_edit');
    Route::get('/swimming/pool/edit/{id}', [DetailesController::class, 'user_swimming_edit'])->name('user_swimming_edit');

    Route::get('/camp/site/edit/{id}', [DetailesController::class, 'user_playground_edit'])->name('user_playground_edit');
    Route::get('/shooting/spot/edit/{id}', [DetailesController::class, 'user_shooting_edit'])->name('user_shooting_edit');

    Route::get('/picnic/spot/edit/{id}', [DetailesController::class, 'user_picnic_edit'])->name('user_picnic_edit');
    Route::get('/exhibition/edit/{id}', [DetailesController::class, 'user_exhibution_edit'])->name('user_exhibution_edit');

    Route::get('/rooftop/edit/{id}', [DetailesController::class, 'user_rooftop_edit'])->name('user_rooftop_edit');
    Route::get('/bilboard/edit/{id}', [DetailesController::class, 'user_bilboard_edit'])->name('user_bilboard_edit');

//end service post edit routes

//service update post route

    Route::post('/room/update/{id}', [UpdateController::class, 'room_update'])->name('room_update');
    Route::post('/flat/update/{id}', [UpdateController::class, 'flat_update'])->name('flat_update');

    Route::post('/building/update/{id}', [UpdateController::class, 'building_update'])->name('building_update');
    Route::post('/garage/update/{id}', [UpdateController::class, 'parking_spot_update'])->name('parking_spot_update');

    Route::post('/hotel/update/{id}', [UpdateController::class, 'hotel_update'])->name('hotel_update');
    Route::post('/hostel/update/{id}', [UpdateController::class, 'hostel_update'])->name('hostel_update');

    Route::post('/resort/update/{id}', [UpdateController::class, 'restuarant_update'])->name('restuarant_update');
    Route::post('/office/update/{id}', [UpdateController::class, 'office_update'])->name('office_update');

    Route::post('/shop/update/{id}', [UpdateController::class, 'shop_update'])->name('shop_update');
    Route::post('/community/hall/update/{id}', [UpdateController::class, 'community_update'])->name('community_update');

    Route::post('/factory/update/{id}', [UpdateController::class, 'factory_update'])->name('factory_update');
    Route::post('/warehouse/update/{id}', [UpdateController::class, 'warehouse_update'])->name('warehouse_update');

    Route::post('/land/update/{id}', [UpdateController::class, 'land_update'])->name('land_update');
    Route::post('/pond/update/{id}', [UpdateController::class, 'pond_update'])->name('pond_update');

    Route::post('/ghat/update/{id}', [UpdateController::class, 'ghat_update'])->name('ghat_update');
    Route::post('/swimming/pool/update/{id}', [UpdateController::class, 'swimmingpool_update'])->name('swimmingpool_update');

    Route::post('/camp/site/update/{id}', [UpdateController::class, 'playground_update'])->name('playground_update');
    Route::post('/shooting/update/{id}', [UpdateController::class, 'shooting_update'])->name('shooting_update');

    Route::post('/picnic/update/{id}', [UpdateController::class, 'picnic_update'])->name('picnic_update');
    Route::post('/exhibition/update/{id}', [UpdateController::class, 'exibution_center_update'])->name('exibution_center_update');

    Route::post('/rooftop/update/{id}', [UpdateController::class, 'rooftop_update'])->name('rooftop_update');
    Route::post('/bilboard/update/{id}', [UpdateController::class, 'bilboard_update'])->name('bilboard_update');

//end service update routes

// service delete routes

    // image delete route
    Route::get('/{model}/{id}/{path}/{image_col}/{image_name}/delete', [PostController::class, 'image_delete'])->name('image_delete');

    Route::get('/room/delete/{id}', [PostController::class, 'room_delete'])->name('room_delete');
    Route::get('/flat/delete/{id}', [PostController::class, 'flat_delete'])->name('flat_delete');

    Route::get('/building/delete/{id}', [PostController::class, 'building_delete'])->name('building_delete');
    Route::get('/garage/delete/{id}', [PostController::class, 'parking_spot_delete'])->name('parking_spot_delete');

    Route::get('/hotel/delete/{id}', [PostController::class, 'hotel_delete'])->name('hotel_delete');
    Route::get('/hostel/delete/{id}', [PostController::class, 'hostel_delete'])->name('hostel_delete');

    Route::get('/resort/delete/{id}', [PostController::class, 'restuarant_delete'])->name('restuarant_delete');
    Route::get('/office/delete/{id}', [PostController::class, 'office_delete'])->name('office_delete');

    Route::get('/shop/delete/{id}', [PostController::class, 'shop_delete'])->name('shop_delete');
    Route::get('/community/hall/delete/{id}', [PostController::class, 'community_delete'])->name('community_delete');

    Route::get('/factory/delete/{id}', [PostController::class, 'factory_delete'])->name('factory_delete');
    Route::get('/warehouse/delete/{id}', [PostController::class, 'warehouse_delete'])->name('warehouse_delete');

    Route::get('/land/delete/{id}', [PostController::class, 'land_delete'])->name('land_delete');
    Route::get('/pond/delete/{id}', [PostController::class, 'pond_delete'])->name('pond_delete');

    Route::get('/ghat/delete/{id}', [PostController::class, 'ghat_delete'])->name('ghat_delete');
    Route::get('/swimming/pool/delete/{id}', [PostController::class, 'swimmingpool_delete'])->name('swimmingpool_delete');

    Route::get('/camp/site/delete/{id}', [PostController::class, 'playground_delete'])->name('playground_delete');
    Route::get('/shooting/delete/{id}', [PostController::class, 'shooting_delete'])->name('shooting_delete');

    Route::get('/picnic/delete/{id}', [PostController::class, 'picnic_delete'])->name('picnic_delete');
    Route::get('/exibution/delete/{id}', [PostController::class, 'exibution_center_delete'])->name('exibution_center_delete');

    Route::get('/rooftop/delete/{id}', [PostController::class, 'rooftop_delete'])->name('rooftop_delete');
    Route::get('/bilboard/delete/{id}', [PostController::class, 'bilboard_delete'])->name('bilboard_delete');

//end service delete routes


// service Custom Search Routes
    Route::get('/room/search', [SearchController::class, 'room_search'])->name('room_search');
    Route::get('/flat/search', [SearchController::class, 'flat_search'])->name('flat_search');

    Route::get('/building/search', [SearchController::class, 'building_search'])->name('building_search');
    Route::get('/garage/search', [SearchController::class, 'parking_spot_search'])->name('parking_spot_search');

    Route::get('/hotel/search', [SearchController::class, 'hotel_search'])->name('hotel_search');
    Route::get('/hostel/search', [SearchController::class, 'hostel_search'])->name('hostel_search');

    Route::get('/resort/search', [SearchController::class, 'restaurant_search'])->name('restaurant_search');
    Route::get('/office/search', [SearchController::class, 'office_search'])->name('office_search');

    Route::get('/shop/search', [SearchController::class, 'shop_search'])->name('shop_search');
    Route::get('/community/hall/search', [SearchController::class, 'community_search'])->name('community_search');

    Route::get('/factory/search', [SearchController::class, 'factory_search'])->name('factory_search');
    Route::get('/warehouse/search', [SearchController::class, 'warehouse_search'])->name('warehouse_search');

    Route::get('/land/search', [SearchController::class, 'land_search'])->name('land_search');
    Route::get('/pond/search', [SearchController::class, 'pond_search'])->name('pond_search');

    Route::get('/ghat/search', [SearchController::class, 'ghat_search'])->name('ghat_search');
    Route::get('/swimming/pool/search', [SearchController::class, 'swimmingpool_search'])->name('swimmingpool_search');

    Route::get('/camp/site/search', [SearchController::class, 'playground_search'])->name('playground_search');
    Route::get('/shooting/spot/search', [SearchController::class, 'shootingspot_search'])->name('shootingspot_search');

    Route::get('/picnic/spot/search', [SearchController::class, 'picnic_search'])->name('picnic_search');
    Route::get('/exibution/search', [SearchController::class, 'exibution_search'])->name('exibution_search');

    Route::get('/rooftop/search', [SearchController::class, 'rooftop_search'])->name('rooftop_search');
    Route::get('/bilboard/search', [SearchController::class, 'bilboard_search'])->name('bilboard_search');

//end service Custom Search Routes

// service details page route
    Route::get('/room/details/{id}', [DetailesController::class, 'room_details'])->name('room_details');
    Route::get('/flat/details/{id}', [DetailesController::class, 'flat_details'])->name('flat_details');

    Route::get('/building/details/{id}', [DetailesController::class, 'building_details'])->name('building_details');
    Route::get('/garage/details/{id}', [DetailesController::class, 'parking_details'])->name('parking_details');

    Route::get('/hotel/details/{id}', [DetailesController::class, 'hotel_details'])->name('hotel_details');
    Route::get('/hostel/details/{id}', [DetailesController::class, 'hostel_details'])->name('hostel_details');

    Route::get('/resort/details/{id}', [DetailesController::class, 'restaurant_details'])->name('restaurant_details');
    Route::get('/office/details/{id}', [DetailesController::class, 'office_details'])->name('office_details');

    Route::get('/shop/details/{id}', [DetailesController::class, 'shop_details'])->name('shop_details');
    Route::get('/community/hall/details/{id}', [DetailesController::class, 'community_details'])->name('community_details');

    Route::get('/factory/details/{id}', [DetailesController::class, 'factory_details'])->name('factory_details');
    Route::get('/warehouse/details/{id}', [DetailesController::class, 'warehouse_details'])->name('warehouse_details');

    Route::get('/land/details/{id}', [DetailesController::class, 'land_details'])->name('land_details');
    Route::get('/pond/details/{id}', [DetailesController::class, 'pond_details'])->name('pond_details');

    Route::get('/ghat/details/{id}', [DetailesController::class, 'ghat_details'])->name('ghat_details');
    Route::get('/swimming/pool/details/{id}', [DetailesController::class, 'swimmingpool_details'])->name('swimmingpool_details');

    Route::get('/camp/site/details/{id}', [DetailesController::class, 'playground_details'])->name('playground_details');
    Route::get('/shooting/spot/details/{id}', [DetailesController::class, 'shooting_details'])->name('shooting_details');

    Route::get('/picnic/details/{id}', [DetailesController::class, 'picnic_details'])->name('picnic_details');
    Route::get('/exibution/details/{id}', [DetailesController::class, 'exibution_details'])->name('exibution_details');

    Route::get('/rooftop/details/{id}', [DetailesController::class, 'rooftop_details'])->name('rooftop_details');
    Route::get('/bilboard/details/{id}', [DetailesController::class, 'bilboard_details'])->name('bilboard_details');

//end service details page route

// for Admin
Route::group(['middleware' => 'admin'], function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin_index');
    Route::get('/user/list', [AdminController::class, 'user_list'])->name('user_list');

    Route::get('/report/list', [AdminController::class, 'report_list'])->name('report_list');
    Route::get('/marketing', [AdminController::class, 'marketing_list'])->name('marketing_list');

    Route::get('/expire', [AdminController::class, 'expire_list'])->name('expire_list');
    Route::get('/form', [AdminController::class, 'form_list'])->name('form_list');

    Route::get('/expire_list', [AdminController::class, 'expire_list'])->name('expire_list');
    Route::post('/marketing/post', [AdminController::class, 'marketing_post'])->name('marketing_post');

    Route::get('/marketing/edit/{id}', [AdminController::class, 'marketing_edit'])->name('marketing_edit');
    Route::post('/marketing/update', [AdminController::class, 'marketing_update'])->name('marketing_update');

    Route::get('/marketing/delete/{id}', [AdminController::class, 'marketing_delete'])->name('marketing_delete');
    Route::get('/user/status/{id}', [AdminController::class, 'user_status'])->name('user_status');

    Route::get('/room/list', [AdminController::class, 'room_list'])->name('room_list');
    Route::get('/flat/list', [AdminController::class, 'flat_list'])->name('flat_list');
    
    Route::get('/building/list', [AdminController::class, 'building_list'])->name('building_list');
    Route::get('/garage/list', [AdminController::class, 'garage_list'])->name('garage_list');

    Route::get('/hotel/list', [AdminController::class, 'hotel_list'])->name('hotel_list');
    Route::get('/hostel/list', [AdminController::class, 'hostel_list'])->name('hostel_list');
    
    Route::get('/resort/list', [AdminController::class, 'resort_list'])->name('resort_list');
    Route::get('/office/list', [AdminController::class, 'office_list'])->name('office_list');

    Route::get('/shop/list', [AdminController::class, 'shop_list'])->name('shop_list');
    Route::get('/community/hall/list', [AdminController::class, 'community_list'])->name('community_list');

    Route::get('/factory/list', [AdminController::class, 'factory_list'])->name('factory_list');
    Route::get('/warehouse/list', [AdminController::class, 'warehouse_list'])->name('warehouse_list');

    Route::get('/land/list', [AdminController::class, 'land_list'])->name('land_list');
    Route::get('/pond/list', [AdminController::class, 'pond_list'])->name('pond_list');

    Route::get('/ghat/list', [AdminController::class, 'ghat_list'])->name('ghat_list');
    Route::get('/pool/list', [AdminController::class, 'pool_list'])->name('pool_list');

    Route::get('/camp/list', [AdminController::class, 'camp_list'])->name('camp_list');
    Route::get('/shooting/spot/list', [AdminController::class, 'shooting_list'])->name('shooting_list');

    Route::get('/picnic/list', [AdminController::class, 'picnic_list'])->name('picnic_list');
    Route::get('/exhibition/list', [AdminController::class, 'exhibition_list'])->name('exhibition_list');

    Route::get('/rooftop/list', [AdminController::class, 'rooftop_list'])->name('rooftop_list');
    Route::get('/bilboard/list', [AdminController::class, 'bilboard_list'])->name('bilboard_list');
});

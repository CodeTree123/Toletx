<?php


use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\LoginApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('service/profile/{id}', [ApiController::class, 'service_profile']);
//end service_profile

//login_register api
Route::post('register', [LoginApiController::class, 'register']);
Route::post('login', [LoginApiController::class, 'login']);
Route::post('sendotp', [LoginApiController::class, 'sendOtp']);
Route::post('loginWithOtp', [LoginApiController::class, 'loginWithOtp']);
Route::post('logout', [LoginApiController::class, 'logout']);
Route::post('auth/check', [LoginApiController::class, 'auth_check']);
//end login_register api

//profile_info
Route::get('profile/info/{id}', [ApiController::class, 'api_list_user']);
Route::get('user/room/service/list/{id}', [ApiController::class, 'api_user_service_list']);
//end profile_info


//for Custom Search all Routes
Route::get('/room/search', [ApiController::class, 'room_search']);
Route::get('/flat/search', [ApiController::class, 'flat_search']);
Route::get('/building/search', [ApiController::class, 'building_search']);
Route::get('/parking/search', [ApiController::class, 'parking_spot_search']);
Route::get('/hotel/search', [ApiController::class, 'hotel_search']);
Route::get('/hostel/search', [ApiController::class, 'hostel_search']);
Route::get('/restaurant/search', [ApiController::class, 'restaurant_search']);
Route::get('/office/search', [ApiController::class, 'office_search']);
Route::get('/shop/search', [ApiController::class, 'shop_search']);
Route::get('/community/search', [ApiController::class, 'community_search']);
Route::get('/factory/search', [ApiController::class, 'factory_search']);
Route::get('/warehouse/search', [ApiController::class, 'warehouse_search']);
Route::get('/land/search', [ApiController::class, 'land_search']);
Route::get('/pond/search', [ApiController::class, 'pond_search']);
Route::get('/ghat/search', [ApiController::class, 'ghat_search']);
Route::get('/swimmingpool/search', [ApiController::class, 'swimmingpool_search']);
Route::get('/playground/search', [ApiController::class, 'playground_search']);
Route::get('/shootingspot/search', [ApiController::class, 'shootingspot_search']);
Route::get('/picnic/search', [ApiController::class, 'picnic_search']);
Route::get('/exibution/search', [ApiController::class, 'exibution_search']);
Route::get('/rooftop/search', [ApiController::class, 'rooftop_search']);
Route::get('/bilboard/search', [ApiController::class, 'bilboard_search']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//post api route
Route::post('room/post', [ApiController::class, 'api_post_room']);
Route::post('flat/post', [ApiController::class, 'api_post_flat']);
Route::post('building/post', [ApiController::class, 'api_post_building']);
Route::post('parking/post', [ApiController::class, 'api_post_parking']);
Route::post('hotel/post', [ApiController::class, 'api_post_hotel']);
Route::post('hostel/post', [ApiController::class, 'api_post_hostel']);
Route::post('resort/post', [ApiController::class, 'api_post_resort']);
Route::post('office/post', [ApiController::class, 'api_post_office']);
Route::post('shop/post', [ApiController::class, 'api_post_shop']);
Route::post('community/post', [ApiController::class, 'api_post_community']);
Route::post('factory/post', [ApiController::class, 'api_post_factory']);
Route::post('warehouse/post', [ApiController::class, 'api_post_warehouse']);
Route::post('land/post', [ApiController::class, 'api_post_land']);
Route::post('pond/post', [ApiController::class, 'api_post_pond']);
Route::post('ghat/post', [ApiController::class, 'api_post_ghat']);
Route::post('swimmingpool/post', [ApiController::class, 'api_post_swimmingpool']);
Route::post('playground/post', [ApiController::class, 'api_post_playground']);
Route::post('shooting/post', [ApiController::class, 'api_post_shooting']);
Route::post('picnic/post', [ApiController::class, 'api_post_picnic']);
Route::post('exibution/post', [ApiController::class, 'api_post_exibution']);
Route::post('rooftop/post', [ApiController::class, 'api_post_rooftop']);
Route::post('bilboard/post', [ApiController::class, 'api_post_bilboard']);
Route::post('report/post', [ApiController::class, 'report_post']);
Route::post('Form/post',[ApiController::class,'Form_post']);
Route::get('marketing',[ApiController::class,'marketing']);



// edit routes

Route::get('/room/edit/{id}', [ApiController::class, 'api_room_edit']);
Route::get('/flat/edit/{id}', [ApiController::class, 'api_flat_edit']);
Route::get('/building/edit/{id}', [ApiController::class, 'api_building_edit']);
Route::get('/parking/edit/{id}', [ApiController::class, 'api_parking_edit']);
Route::get('/hotel/edit/{id}', [ApiController::class, 'api_hotel_edit']);
Route::get('/hostel/edit/{id}', [ApiController::class, 'api_hostel_edit']);
Route::get('/resort/edit/{id}', [ApiController::class, 'api_resort_edit']);
Route::get('/office/edit/{id}', [ApiController::class, 'api_office_edit']);
Route::get('/shop/edit/{id}', [ApiController::class, 'api_shop_edit']);
Route::get('/community/edit/{id}', [ApiController::class, 'api_community_edit']);
Route::get('/factory/edit/{id}', [ApiController::class, 'api_factory_edit']);
Route::get('/warehouse/edit/{id}', [ApiController::class, 'api_warehouse_edit']);
Route::get('/land/edit/{id}', [ApiController::class, 'api_land_edit']);
Route::get('/pond/edit/{id}', [ApiController::class, 'api_pond_edit']);
Route::get('/ghat/edit/{id}', [ApiController::class, 'api_ghat_edit']);
Route::get('/swimming/edit/{id}', [ApiController::class, 'api_swimming_edit']);
Route::get('/playground/edit/{id}', [ApiController::class, 'api_playground_edit']);
Route::get('/shooting/edit/{id}', [ApiController::class, 'api_shooting_edit']);
Route::get('/picnic/edit/{id}', [ApiController::class, 'api_picnic_edit']);
Route::get('/exibution/edit/{id}', [ApiController::class, 'api_exhibution_edit']);
Route::get('/rooftop/edit/{id}', [ApiController::class, 'api_rooftop_edit']);
Route::get('/bilboard/edit/{id}', [ApiController::class, 'api_bilboard_edit']);

// detailes api
Route::get('/room/single/{id}', [ApiController::class, 'room_single']);
Route::get('/flat/single/{id}', [ApiController::class, 'flat_single']);
Route::get('/building/single/{id}', [ApiController::class, 'building_single']);
Route::get('/parking/single/{id}', [ApiController::class, 'parking_single']);
Route::get('/hotel/single/{id}', [ApiController::class, 'hotel_single']);
Route::get('/hostel/single/{id}', [ApiController::class, 'hostel_single']);
Route::get('/resort/single/{id}', [ApiController::class, 'resort_single']);
Route::get('/office/single/{id}', [ApiController::class, 'office_single']);
Route::get('/shop/single/{id}', [ApiController::class, 'shop_single']);
Route::get('/community/single/{id}', [ApiController::class, 'community_single']);
Route::get('/factory/single/{id}', [ApiController::class, 'factory_single']);
Route::get('/warehouse/single/{id}', [ApiController::class, 'warehouse_single']);
Route::get('/land/single/{id}', [ApiController::class, 'land_single']);
Route::get('/pond/single/{id}', [ApiController::class, 'pond_single']);
Route::get('/ghat/single/{id}', [ApiController::class, 'ghat_single']);
Route::get('/swimming/single/{id}', [ApiController::class, 'swimming_single']);
Route::get('/playground/single/{id}', [ApiController::class, 'playground_single']);
Route::get('/shooting/single/{id}', [ApiController::class, 'shooting_single']);
Route::get('/picnic/single/{id}', [ApiController::class, 'picnic_single']);
Route::get('/exibution/single/{id}', [ApiController::class, 'exhibution_single']);
Route::get('/rooftop/single/{id}', [ApiController::class, 'rooftop_single']);
Route::get('/bilboard/single/{id}', [ApiController::class, 'bilboard_single']);


//delete post routes
Route::DELETE('/room/delete/{id}', [ApiController::class, 'room_delete']);
Route::DELETE('/flat/delete/{id}', [ApiController::class, 'flat_delete']);
Route::DELETE('/building/delete/{id}', [ApiController::class, 'building_delete']);
Route::DELETE('/parking/delete/{id}', [ApiController::class, 'parking_spot_delete']);
Route::DELETE('/hotel/delete/{id}', [ApiController::class, 'hotel_delete']);
Route::DELETE('/hostel/delete/{id}', [ApiController::class, 'hostel_delete']);
Route::DELETE('/restuarant/delete/{id}', [ApiController::class, 'restuarant_delete']);
Route::DELETE('/office/delete/{id}', [ApiController::class, 'office_delete']);
Route::DELETE('/shop/delete/{id}', [ApiController::class, 'shop_delete']);
Route::DELETE('/community/delete/{id}', [ApiController::class, 'community_delete']);
Route::DELETE('/factory/delete/{id}', [ApiController::class, 'factory_delete']);
Route::DELETE('/warehouse/delete/{id}', [ApiController::class, 'warehouse_delete']);
Route::DELETE('/land/delete/{id}', [ApiController::class, 'land_delete']);
Route::DELETE('/pond/delete/{id}', [ApiController::class, 'pond_delete']);
Route::DELETE('/ghat/delete/{id}', [ApiController::class, 'ghat_delete']);
Route::DELETE('/playground/delete/{id}', [ApiController::class, 'playground_delete']);
Route::DELETE('/shooting/delete/{id}', [ApiController::class, 'shooting_delete']);
Route::DELETE('/picnic/delete/{id}', [ApiController::class, 'picnic_delete']);
Route::DELETE('/swimmingpool/delete/{id}', [ApiController::class, 'swimmingpool_delete']);
Route::DELETE('/exibutioncenter/delete/{id}', [ApiController::class, 'exibution_center_delete']);
Route::DELETE('/rooftop/delete/{id}', [ApiController::class, 'rooftop_delete']);
Route::DELETE('/bilboard/delete/{id}', [ApiController::class, 'bilboard_delete']);

//update api route
Route::post('/room/update/{id}', [ApiController::class, 'room_update']);
Route::post('/flat/update/{id}', [ApiController::class, 'flat_update']);
Route::post('/building/update/{id}', [ApiController::class, 'building_update']);
Route::post('/parking/update/{id}', [ApiController::class, 'parking_spot_update']);
Route::post('/hotel/update/{id}', [ApiController::class, 'hotel_update']);
Route::post('/hostel/update/{id}', [ApiController::class, 'hostel_update']);
Route::post('/restuarant/update/{id}', [ApiController::class, 'restuarant_update']);
Route::post('/office/update/{id}', [ApiController::class, 'office_update']);
Route::post('/shop/update/{id}', [ApiController::class, 'shop_update']);
Route::post('/community/update/{id}', [ApiController::class, 'community_update']);
Route::post('/factory/update/{id}', [ApiController::class, 'factory_update']);
Route::post('/warehouse/update/{id}', [ApiController::class, 'warehouse_update']);
Route::post('/land/update/{id}', [ApiController::class, 'land_update']);
Route::post('/pond/update/{id}', [ApiController::class, 'pond_update']);
Route::post('/ghat/update/{id}', [ApiController::class, 'ghat_update']);
Route::post('/swimmingpool/update/{id}', [ApiController::class, 'swimmingpool_update']);
Route::post('/playground/update/{id}', [ApiController::class, 'playground_update']);
Route::post('/shooting/update/{id}', [ApiController::class, 'shooting_update']);
Route::post('/picnic/update/{id}', [ApiController::class, 'picnic_update']);
Route::post('/exibution/update/{id}', [ApiController::class, 'exibution_center_update']);
Route::post('/rooftop/update/{id}', [ApiController::class, 'rooftop_update']);
Route::post('/bilboard/update/{id}', [ApiController::class, 'bilboard_update']);

Route::post('/user/update/{id}', [ApiController::class, 'user_update']);
Route::post('/password/update/{id}', [ApiController::class, 'update_password']);
Route::post('/password/forgot/{mobile}', [ApiController::class, 'forgot_password']);
//get api route

Route::get('/room', [ApiController::class, 'createapi_room']);
Route::get('/flat', [ApiController::class, 'createapi_flat']);
Route::get('/building', [ApiController::class, 'createapi_building']);
Route::get('/garage', [ApiController::class, 'createapi_parking']);
Route::get('/hotel', [ApiController::class, 'createapi_hotel']);
Route::get('/hostel', [ApiController::class, 'createapi_hostel']);
Route::get('/resort', [ApiController::class, 'createapi_resort']);
Route::get('/office', [ApiController::class, 'createapi_office']);
Route::get('/shop', [ApiController::class, 'createapi_shop']);
Route::get('/community', [ApiController::class, 'createapi_community']);
Route::get('/factory', [ApiController::class, 'createapi_factory']);
Route::get('/warehouse', [ApiController::class, 'createapi_warehouse']);
Route::get('/land', [ApiController::class, 'createapi_land']);
Route::get('/pond', [ApiController::class, 'createapi_pond']);
Route::get('/ghat', [ApiController::class, 'createapi_ghat']);
Route::get('/swimmingpool', [ApiController::class, 'createapi_swimmingpool']);
Route::get('/playground', [ApiController::class, 'createapi_playground']);
Route::get('/shooting', [ApiController::class, 'createapi_shooting']);
Route::get('/picnic', [ApiController::class, 'createapi_picnic']);
Route::get('/exhibution', [ApiController::class, 'createapi_exhibution']);
Route::get('/rooftop', [ApiController::class, 'createapi_rooftop']);
Route::get('/bilboard', [ApiController::class, 'createapi_bilboard']);


Route::get('/user', [ApiController::class, 'createapi_user_registration']);
Route::get('/user/list', [ApiController::class, 'user_list']);

<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/*Route::post('login',function(Request $request){

    if(\Illuminate\Support\Facades\Auth::attempt($request->all(['email','password']))){

        $user = \Illuminate\Support\Facades\Auth::user();
        if ($rememberme) {
            Passport::personalAccessTokensExpireIn(now()->addHours(24));
        } else {
            Passport::personalAccessTokensExpireIn(now()->addHours(12));
        }

        \Laravel\Passport\Passport::personalAccessTokensExpireIn(now()->addMinutes(2));
        $user->token = '';
        return $user->token = $user->createToken('DCPFood')->accessToken;
    }

});*/




Route::post('logout',function(Request $request){

    $id = (new \Lcobucci\JWT\Parser())->parse($request->bearerToken())->getHeader('jti');
    return $revoked = \DB::table('oauth_access_tokens')->where('id', '=', $id)->update(['revoked' => 1]);

    return \Illuminate\Support\Facades\Auth::user();
});

Route::get('get_recommended_restaurant',function(){

    $tmp = [];
    $tmp['id'] = 1;
    $tmp['name'] = 'Subway';
    $tmp['image_url'] = 'http://localhost/dcpfood_ecommerce/public/web-assets/images/Image 3.png';
    $tmp['rating'] = '5';
    $data[] = $tmp;

    $tmp = [];
    $tmp['id'] = 2;
    $tmp['name'] = 'Domino\'s';
    $tmp['image_url'] = 'http://localhost/dcpfood_ecommerce/public/web-assets/images/Image 4.png';
    $tmp['rating'] = '5';
    $data[] = $tmp;

    $tmp = [];
    $tmp['id'] = 3;
    $tmp['name'] = 'Burger King';
    $tmp['image_url'] = 'http://localhost/dcpfood_ecommerce/public/web-assets/images/Image 6.png';
    $tmp['rating'] = '5';
    $data[] = $tmp;

    $tmp = [];
    $tmp['id'] = 3;
    $tmp['name'] = 'Burger King';
    $tmp['image_url'] = 'http://localhost/dcpfood_ecommerce/public/web-assets/images/Image 6.png';
    $tmp['rating'] = '5';
    $data[] = $tmp;

    return response()->json(['success'=>true,'message'=>'list of recommended restaurants.','data'=>$data,'error'=>[]],200);
});

Route::get('get_cart',function(){

    $tmp = [];
    $tmp['cartDetails'] = [];
    $tmp['totalItems'] = rand(1-9);
    $data[] = $tmp;

    return response()->json(['success'=>true,'message'=>'Cart Details.','data'=>$data,'error'=>[]],200);
});

Route::get('validate_address',function(Request $request){

    $data = $request->query('address');

    $address = \DB::table('ef_postcodelatlng')->where('slug','like','%'.strtolower(str_replace(' ','',trim($data))).'%')->select('postcode','slug')->limit(10)->orderBy('postcode')->get();

    return response()->json(['success'=>true,'message'=>'list of addresses.','data'=>$address,'error'=>[]],200);
});


Route::get('get_restaurant_on_board_list','Admin\RestaurantsController@getOnBoardRestaurantList');
Route::post('save_restaurant_on_board','Admin\RestaurantsController@saveOnBoardRestaurants');
Route::put('update_restaurant_on_board/{restaurant}','Admin\RestaurantsController@updateOnBoardRestaurants');
Route::delete('delete_restaurant_on_board/{restaurant}','Admin\RestaurantsController@deleteOnBoardRestaurant');
Route::put('update_restaurant_base_information/{restaurant}','Admin\RestaurantsController@updateRestaurantBaseInformation');


Route::post('create_restaurant_user','Admin\UsersController@createRestaurantUser');
Route::delete('delete_restaurant_user/{user}','Admin\UsersController@deleteRestaurantUser');
Route::get('get_restaurant_user/{user}','Admin\UsersController@getRestaurantUser');
Route::post('upload-restaurant-kyc','Admin\RestaurantsController@uploadRestaurantKycDoc');
Route::post('upload-restaurant-logo','Admin\RestaurantsController@uploadRestaurantLogo');
Route::post('reffered-restaturant-list','Admin\RestaurantsController@RefferedRestaurant');




Route::namespace('API\Admin')->group(function () {

    /*Common Routes*/

    Route::post('login', 'UsersController@login');

    /*Authenticate Routes*/
    Route::group(['middleware' => 'auth:api'], function() {

        Route::group(['prefix' => 'v1'], function(){
            
            /*User*/
            Route::post('create-user', 'UsersController@registerUser');

            /*Allergen*/
            Route::post('add-allergen', 'AllergensController@saveAllergens');


        });
    });
});

Route::get('filterRestaurant','Admin\RestaurantsController@filterRestaurant');
Route::get('getFoodMenu','Admin\RestaurantsController@getFoodMenu');
Route::get('getRestaurant','Admin\RestaurantsController@getRestaurant');
Route::get('getRestaurantItems','Admin\MenuProductsController@getRestaurantItems');
Route::get('getProductDetails','Admin\MenuProductsController@getProductDetails');

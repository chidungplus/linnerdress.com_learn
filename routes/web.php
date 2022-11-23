<?php

#Auth
Auth::routes();
Route::namespace('Auth')->group(function () {
    Route::get('/redirect/{social}', 'SocialAuthController@redirect');
    Route::get('/callback/{social}', 'SocialAuthController@callback');
    Route::get('/{social}/deleteDataUser', 'SocialAuthController@deleteDataUser');
    Route::get('/changePassword','ChangePasswordController@showChangePasswordForm');
    Route::post('/changePassword','ChangePasswordController@changePassword')->name('changePassword');
});

#Admin
Route::middleware(['auth','admin'])->namespace('Admin')->prefix('admin')->group(function () {
    # Dash board
    Route::get('/', 'DashboardController@hello');
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    # Setting Config
    Route::get('setting', 'ConfigController@edit')->name('admin.setting');
    Route::post('setting', 'ConfigController@update');
    # User
    Route::prefix('user')->group(function () {
        Route::post('/search', 'UserController@search');
        ###############
        Route::post('/{id}/update-cash', 'UserController@handleUpdateCash');
        Route::post('/{id}/update-diamond', 'UserController@handleUpdateDiamond');
        Route::post('/updateCash', 'UserController@updateCash');
    });
    Route::resource('/user','UserController');
    Route::resource('/role','RoleController');
    Route::get('/role-permission/{role_id}','RolePermissionController@show');
    Route::post('/role-permission','RolePermissionController@update');
    Route::get('/user-role','UserRoleController@index');
    Route::get('/user-role/{user_id}','UserRoleController@show');
    Route::post('/user-role','UserRoleController@update');
    Route::get('/permission','PermissionController@index');

    Route::resource('/user-log','UserLogController');
    
    # Product
    Route::prefix('product')->group(function () {
        // Route::post('/search', 'AccFreeFireController@search');
        // Route::post('/filter', 'AccFreeFireController@filter');
        // Route::post('/{acc_id}/thumb', 'AccFreeFireController@thumb');
        Route::post('/{acc_id}/image', 'ProductController@image');
    });
    Route::resource('/product','ProductController');

    # Image
    Route::post('/image/thumbnail', 'ImageController@thumbnail');
    Route::post('/image/large', 'ImageController@large');
    # Acc Image
    Route::post('acc-image/{acc_id}/thumb', 'AccImageController@thumb');
    Route::post('acc-image/{acc_id}/image', 'AccImageController@image');
});
#Fontend
Route::namespace('Frontend')->group(function () {
    # HomeController
    Route::get('/test', 'HomeController@test')->name('shop.test');
    Route::get('/', 'HomeController@index')->name('shop.home');
    Route::get('/getJS', 'HomeController@getJS');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('policy', 'HomeController@policy')->name('policy');
    Route::get('document', 'HomeController@document')->name('document');
    # Middleware Auth
    Route::middleware('auth')->group(function () {
        Route::get('user', 'UserController@profile')->name('front.user');
    });
    // Route::get('/','CartController@cartVue');

    Route::get('/cart','HomeController@vue');
    Route::get('/payment','HomeController@vue');
    // Route::post('/cart/payment','CartController@payment');
    // Route::post('/cart/payment/cart-bottom','CartController@cartBottom');

    Route::post('/cart','CartController@addToCart');
    Route::post('/count-cart','CartController@count');
    Route::post('/update-cart','CartController@updateCart');
    Route::post('/destroy-cart','CartController@destroyCart');


    Route::get('/san-pham/{permalink}','ProductController@single');
    Route::get('/danh-muc/{permalink}','CategoryController@single');

   
});
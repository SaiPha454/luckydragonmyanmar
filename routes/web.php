<?php

use Illuminate\Support\Facades\Route;


Route::get('/','User\IndexController@index');
Route::get('/abhigya-anand-ready/{card_one}/{card_two}/{card_three}','User\IndexController@suggest');
Route::post('/order','User\OrderController@order')->name('user.order');

Route::get('/admin/login','Admin\LoginController@showLogin' )->name('login.show');
Route::post('/admin/login','Admin\LoginController@login')->name('login.login');

Route::get('/privacy','User\IndexController@privacy')->name('privacy');

Route::group(['prefix' => 'admin','namespace'=>'Admin','as'=>'admin.','middleware'=>'admin'], function () {
    Route::get('/','PageController@index')->name('index');

    Route::get('/product','PageController@product')->name('product');
    Route::post('/product','ProductController@upload')->name('product.upload');

    Route::get('/pending-order','PageController@pendingOrder')->name('order.pending');
    Route::get('/confirm-order','PageController@confirmOrder')->name('order.confirm');
    Route::get('/completed-order','PageController@completedOrder')->name('order.completed');

    Route::post('/make-order-confirm/{id}','OrderController@confirm')->name('confirmOrder');
    Route::post('/make-order-completed/{id}','OrderController@complete')->name('completeOrder');
    Route::delete('/delete-order/{id}','OrderController@delete')->name('deleteOrder');

    Route::get('/edit-content/{sect}','PageController@editcContent')->name('content.edit');
    Route::post('/edit-content','ContentController@updateContent')->name('content.update');

    Route::get('/create-comment','PageController@showCreateComment')->name('create.show.comment');
    Route::post('/create-comment','CommentController@createComment')->name('create.comment');
    Route::delete('/comment-delete/{id}','CommentController@delete')->name('delete.comment');

    // Price
    Route::get('/price','PageController@showPrice')->name('price.show');
    Route::post('/price','PriceController@update')->name('price.update');

    // Setting - edit name and setting
    Route::get('/setting-name','PageController@namesetting')->name('setting.show.name');
    Route::get('/setting-password','PageController@Passwordsetting')->name('setting.show.password');
    Route::post('/setting-name','SettingController@updateName')->name('setting.update.name');
    Route::post('/setting-password','SettingController@updatePassword')->name('setting.update.password');

    // Manage admins
    Route::group(['middleware'=>'superAdmin'], function () {
        Route::get('/register','PageController@showRegister')->name('manage.show.register');
        Route::post('/register','RegisterController@register')->name('manage.register');

        Route::get('/manage-admin','PageController@showManage')->name('manage.show.adminList');
        Route::post('/make-super/{id}','ManageController@makeSuper')->name('manage.makeSuper');
        Route::delete('/delete-admin/{id}','ManageController@delete')->name('manage.deleteAdmin');
    });


    Route::post('/logout','PageController@logout')->name('logout');


});

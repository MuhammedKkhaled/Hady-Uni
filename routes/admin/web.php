<?php

use App\Http\Controllers\Admin\ConferenceController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SpecificationController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::middleware([
    // 'localeSessionRedirect',
    // 'localizationRedirect',
    // 'localeViewPath',
    'auth',
    'role:admin|super_admin',
])
    ->group(function () {

        Route::name('admin.')->prefix('admin')->group(function () {

            //home
            Route::get('/home/top_statistics', 'HomeController@topStatistics')->name('home.top_statistics');
            Route::get('/home/movies_chart', 'HomeController@moviesChart')->name('home.movies_chart');
            Route::get('/', 'HomeController@index')->name('home');
            Route::get('/logout', [HomeController::class , "logout"])->name('logout');

            //role routes
            Route::get('/roles/data', 'RoleController@data')->name('roles.data');
            Route::delete('/roles/bulk_delete', 'RoleController@bulkDelete')->name('roles.bulk_delete');
            Route::resource('roles', 'RoleController');

            //admin routes
            Route::get('/admins/data', 'AdminController@data')->name('admins.data');
            Route::delete('/admins/bulk_delete', 'AdminController@bulkDelete')->name('admins.bulk_delete');
            Route::resource('admins', 'AdminController');

            //user routes
            Route::get('/users/data', 'UserController@data')->name('users.data');
            Route::delete('/users/bulk_delete', 'UserController@bulkDelete')->name('users.bulk_delete');
            Route::resource('users', 'UserController');

            //About routes
            Route::get('/abouts/data', 'AboutController@data')->name('abouts.data');
            Route::delete('/abouts/bulk_delete', 'AboutController@bulkDelete')->name('abouts.bulk_delete');
            Route::resource('abouts', 'AboutController');

            //Blog routes
            Route::get('/blogs/data', 'BlogController@data')->name('blogs.data');
            Route::delete('/blogs/bulk_delete', 'BlogController@bulkDelete')->name('blogs.bulk_delete');
            Route::resource('blogs', 'BlogController');

            //Category routes
            Route::get('/categories/data', 'CategoryController@data')->name('categories.data');
            Route::delete('/categories/bulk_delete', 'CategoryController@bulkDelete')->name('categories.bulk_delete');
            Route::resource('categories', 'CategoryController');

            //news routes
            Route::get('/news/data', 'NewsController@data')->name('news.data');
            Route::delete('/news/bulk_delete', 'NewsController@bulkDelete')->name('news.bulk_delete');
            Route::resource('news', NewsController::class);

            //Specifications routes
            Route::get('/specifications/data', 'SpecificationController@data')->name('specifications.data');
            Route::delete('/specifications/bulk_delete', 'SpecificationController@bulkDelete')->name('specifications.bulk_delete');
            Route::resource('specifications', SpecificationController::class);

            //Departments routes
            Route::get('/departments/data', 'DepartmentController@data')->name('departments.data');
            Route::delete('/departments/bulk_delete', 'DepartmentController@bulkDelete')->name('departments.bulk_delete');
            Route::resource('departments', DepartmentController::class);

            ///Conferences routes
            Route::get('/conferences/data', 'ConferenceController@data')->name('conferences.data');
            Route::delete('/conferences/bulk_delete', 'ConferenceController@bulkDelete')->name('conferences.bulk_delete');
            Route::resource('conferences', ConferenceController::class);

            //Product routes
            Route::get('/products/data', 'ProductController@data')->name('products.data');
            Route::delete('/products/bulk_delete', 'ProductController@bulkDelete')->name('products.bulk_delete');
            Route::resource('products', 'ProductController');



            // //Contact Us routes
            // Route::get('/contacts/data', 'ContactController@data')->name('contacts.data');
            // Route::delete('/contacts/bulk_delete', 'ContactController@bulkDelete')->name('contacts.bulk_delete');
            // Route::get('/contacts/{contact}', 'ContactController@reply')->name('contacts.reply');
            // Route::post('/contacts/{contact}', 'ContactController@store_reply')->name('contacts.reply.store');
            // Route::resource('contacts', 'ContactController');

            //setting routes
            Route::get('/settings/general', 'SettingController@general')->name('settings.general');
            // Route::get('/settings/social_links', 'SettingController@socialLinks')->name('settings.social_links');
            // Route::get('/settings/mobile_links', 'SettingController@mobileLinks')->name('settings.mobile_links');
            Route::resource('settings', 'SettingController')->only(['store']);

            //profile routes
            Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
            Route::put('/profile/update', 'ProfileController@update')->name('profile.update');

            Route::name('profile.')->namespace('Profile')->group(function () {

                //password routes
                Route::get('/password/edit', 'PasswordController@edit')->name('password.edit');
                Route::put('/password/update', 'PasswordController@update')->name('password.update');
            });
        });
    });

<?php

use App\Http\Controllers\Admin\AffiliateController;
use App\Http\Controllers\Admin\ConferenceController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\AccreditationController;
use App\Http\Controllers\Admin\JournalController;
use App\Http\Controllers\Admin\LibraryController;
use App\Http\Controllers\Admin\LinkController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\CharactersController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\awardsController;
use App\Http\Controllers\Admin\AdsController;
use App\Http\Controllers\Admin\CollegeController;
use App\Http\Controllers\Admin\CurriculaController;
use App\Http\Controllers\Admin\PatentsController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\SpecificationController;
use App\Http\Controllers\Admin\StudnetController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\SustainableController;
use App\Http\Controllers\Admin\SustainablesGalleryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::middleware([
    // 'localeSessionRedirect',
    // 'localizationRedirect',
    // 'localeViewPath',
    'auth',
    'role:admin|super_admin',
])
    ->group(function () {

        Route::name('admin.')->prefix('admin')->group(function () {


            Route::post('/login', [LoginController::class, 'login'])->name('login');

            //home
            Route::get('/home/top_statistics', 'HomeController@topStatistics')->name('home.top_statistics');
            Route::get('/home/movies_chart', 'HomeController@moviesChart')->name('home.movies_chart');
            Route::get('/', 'HomeController@index')->name('home');
            Route::get('/logout', [HomeController::class, "logout"])->name('logout');

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

            /// Teachers routes
            Route::get('/teachers/data', 'TeacherController@data')->name('teachers.data');
            Route::delete('/teachers/bulk_delete', 'TeacherController@bulkDelete')->name('teachers.bulk_delete');
            Route::resource('teachers', TeacherController::class);

            /// properties routes
            Route::get('/properties/data', 'PropertyController@data')->name('properties.data');
            Route::delete('/properties/bulk_delete', 'PropertyController@bulkDelete')->name('properties.bulk_delete');
            Route::resource('properties', PropertyController::class);

            /// properties routes
            Route::get('/libraries/data', 'LibraryController@data')->name('libraries.data');
            Route::delete('/libraries/bulk_delete', 'LibraryController@bulkDelete')->name('libraries.bulk_delete');
            Route::resource('libraries', LibraryController::class);

            /// properties routes
            Route::get('/college/data', 'CollegeController@data')->name('college.data');
            Route::delete('/college/bulk_delete', 'CollegeController@bulkDelete')->name('college.bulk_delete');
            Route::resource('college', CollegeController::class);
            /// journals routes
            Route::get('/journals/data', 'JournalController@data')->name('journals.data');
            Route::delete('/journals/bulk_delete', 'JournalController@bulkDelete')->name('journals.bulk_delete');
            Route::resource('journals', JournalController::class);


            /// affiliates routes
            Route::get('/affiliates/data', 'AffiliateController@data')->name('affiliates.data');
            Route::delete('/affiliates/bulk_delete', 'AffiliateController@bulkDelete')->name('affiliates.bulk_delete');
            Route::resource('affiliates', AffiliateController::class);


            /// journals routes
            Route::get('/messages/data', 'MessageController@data')->name('messages.data');
            Route::delete('/messages/bulk_delete', 'MessageController@bulkDelete')->name('messages.bulk_delete');
            Route::resource('messages', MessageController::class);


            //Product routes
            Route::get('/products/data', 'ProductController@data')->name('products.data');
            Route::delete('/products/bulk_delete', 'ProductController@bulkDelete')->name('products.bulk_delete');
            Route::resource('products', 'ProductController');

            //students routes
            Route::get('/students/data', 'StudnetController@data')->name('students.data');
            Route::delete('/students/bulk_delete', 'StudnetController@bulkDelete')->name('students.bulk_delete');
            Route::resource('students', StudnetController::class);

            //links routes
            Route::get('/links/data', 'LinkController@data')->name('links.data');
            Route::delete('/links/bulk_delete', 'LinkController@bulkDelete')->name('links.bulk_delete');
            Route::resource('links', LinkController::class);


            //links routes
            Route::get('/galleries/data', 'GalleryController@data')->name('galleries.data');
            Route::delete('/galleries/bulk_delete', 'GalleryController@bulkDelete')->name('galleries.bulk_delete');
            Route::resource('galleries', GalleryController::class);

            
            //links curricula
            Route::get('/curricula/data', 'CurriculaController@data')->name('curricula.data');
            Route::delete('/curricula/bulk_delete', 'CurriculaController@bulkDelete')->name('curricula.bulk_delete');
            Route::resource('curricula', CurriculaController::class);
            
            //links routes
            Route::get('/accreditation/data', 'AccreditationController@data')->name('accreditation.data');
            Route::delete('/accreditation/bulk_delete', 'AccreditationController@bulkDelete')->name('accreditation.bulk_delete');
            Route::resource('accreditation', AccreditationController::class);

            //links routes
            Route::get('/ads/data', 'AdsController@data')->name('ads.data');
            Route::delete('/ads/bulk_delete', 'AdsController@bulkDelete')->name('ads.bulk_delete');
            Route::resource('ads', AdsController::class);
            
            
            //links routes
            Route::get('/characters/data', 'CharactersController@data')->name('characters.data');
            Route::delete('/characters/bulk_delete', 'CharactersController@bulkDelete')->name('characters.bulk_delete');
            Route::resource('characters', CharactersController::class);
            //links routes
            Route::get('/awards/data', 'awardsController@data')->name('awards.data');
            Route::delete('/awards/bulk_delete', 'awardsController@bulkDelete')->name('awards.bulk_delete');
            Route::resource('awards', awardsController::class);
            //links patents
            Route::get('/patents/data', 'PatentsController@data')->name('patents.data');
            Route::delete('/patents/bulk_delete', 'PatentsController@bulkDelete')->name('patents.bulk_delete');
            Route::resource('patents', PatentsController::class);
            //links sustainable
            Route::get('/sustainable/data', 'SustainableController@data')->name('sustainable.data');
            Route::delete('/sustainable/bulk_delete', 'SustainableController@bulkDelete')->name('sustainable.bulk_delete');
            Route::resource('sustainable', SustainableController::class);
            
            //links sustainablesgalleries            
            Route::get('/sustainablesgalleries/data', 'SustainablesGalleryController@data')->name('sustainablesgalleries.data');
            Route::delete('/sustainablesgalleries/bulk_delete', 'SustainablesGalleryController@bulkDelete')->name('sustainablesgalleries.bulk_delete');
            Route::resource('sustainablesgalleries', SustainablesGalleryController::class);
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

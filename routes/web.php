<?php

use App\Models\Conference;
use App\Models\Department;
use App\Models\News;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('auth.login');
});



Route::prefix('main/')->group(function (){

    Route::get('' , function (){
        $conferences = Conference::all();
        $departments = Department::all();
        $teachers = Teacher::all();
        $news = News::latest()->paginate(3);
        return view('frontend.index' , compact('news' , 'departments' , 'teachers' , 'conferences'));
    });

    Route::get("teacher-details/{type?}" ,function ($type = 0){

        $types = [
            0 => 'العميد',
            1 => 'السيرة الذاتية لمعاون العميد للشؤون المالية و الادارية',
            2 => 'السيرة الذاتية لمعاون العميد للشؤون العلمية',
            3 => 'الشعبة الادارية',
            4 => 'الشعبة الحسابات',
            5 => 'الشعبة القانونية',
            6 => 'الشعبة التسجيل',
            7 => 'الشعبة التقويم',
            8 => 'الشعبة المعلومات الالكترونية',
        ];

        $teacher = Teacher::where('type' , $type)->get()->first();

        if ($teacher == null) {
            $type = 0;
            $teacher = Teacher::where('type' , $type)->get()->first();
        }

        return view("frontend.pages.teacher-details" , compact('teacher' , 'types'));

    });

    Route::get('teachers/{type?}' , function($type){

        $types = [
            0 => 'العميد',
            1 => 'السيرة الذاتية لمعاون العميد للشؤون المالية و الادارية',
            2 => 'السيرة الذاتية لمعاون العميد للشؤون العلمية',
            3 => 'الشعبة الادارية',
            4 => 'الشعبة الحسابات',
            5 => 'الشعبة القانونية',
            6 => 'الشعبة التسجيل',
            7 => 'الشعبة التقويم',
            8 => 'الشعبة المعلومات الالكترونية',
        ];

        $tp = $types[$type];


        $teachers = Teacher::where('type' , $type)->get();

        return view('frontend.pages.teachers' , compact('teachers', 'tp'));

    });

});



/// Route Default param


Auth::routes(['register'=>false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

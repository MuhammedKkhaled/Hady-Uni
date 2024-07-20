<?php

use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Front\PatentsController;
use App\Http\Controllers\Front\AffiliateController;
use App\Http\Controllers\Front\CollegeController;
use App\Http\Controllers\Front\CoursesController;
use App\Http\Controllers\Front\DepartmentController;
use App\Http\Controllers\Front\JournalController;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Front\LibraryController;
use App\Http\Controllers\Front\ResearchController;
use App\Http\Controllers\Front\SustainableController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\TopController;
use App\Models\Affiliate;
use App\Models\Conference;
use App\Models\Characters;
use App\Models\Department;
use App\Models\awards;
use App\Models\Curricula;
use App\Models\Library;
use App\Models\News;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Models\Statistics;
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
   /*  return view('auth.login'); */
   
   $conferences = Conference::latest()->paginate(4);
   $characters = Characters::latest()->paginate(3);
   $awards = awards::latest()->paginate(4);
   $departments = Department::all();
   $teachers = Teacher::all();
   $affiliates = Affiliate::all();
   $statistics = Statistics::all();
   $libraries = Library::all();
   $news = News::latest()->paginate(3);
   return view('frontend.index' , compact('news' , 'departments' , 'teachers' , 'conferences','affiliates','characters','awards','statistics','libraries'));
});


Route::get('/adminlogin', function () {
    return view('auth.login');
 });


Route::prefix('main/')->group(function (){

    Route::get('/Important', function () {
        return view('frontend.pages.Important');
     });

    Route::get('' , function (){
   $conferences = Conference::latest()->paginate(4);
   $characters = Characters::latest()->paginate(3);
   $awards = awards::latest()->paginate(4);
   $departments = Department::all();
   $teachers = Teacher::all();
   $affiliates = Affiliate::all();
   $statistics = Statistics::all();
   $libraries = Library::all();
   $news = News::latest()->paginate(3);
   return view('frontend.index' , compact('news' , 'departments' , 'teachers' , 'conferences','affiliates','characters','awards','statistics','libraries'));
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
        
        $curriculas = Curricula::where('teacher_id', $teacher->id)->get();
        $libraries = Library::where('teacher_id', $teacher->id)->get();

        return view("frontend.pages.teacher-details" , compact('teacher' , 'types','curriculas','libraries'));

    });
/*     Route::get("affiliate-details/{id?}" ,function ($id){


        $affiliate = Affiliate::findOrFail($id);

        $curriculas = Curricula::where('affiliate_id', $id)->get();
        $libraries = Library::where('affiliate_id', $id)->get();

        return view("frontend.pages.affiliate-details" , compact('affiliate' ,'curriculas','libraries'));

    }); */

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

    Route::get('departments/{id}', [DepartmentController::class , 'show'])->name('main.departments.show');
    Route::get('sustainable/{id}', [SustainableController::class , 'show'])->name('main.sustainable.show');
    Route::get('News/{id}', [NewsController::class , 'showone'])->name('main.new.show');

    Route::get('libraries/{id}' ,[ LibraryController::class , 'showsustainable'])->name('main.libraries.showsustainable');
    Route::get('affiliate-details/{id}' ,[ AffiliateController::class , 'showaffiliate'])->name('main.affiliate-details.showaffiliate');

    Route::get('journal', [JournalController::class , 'show']);
    Route::get('news', [NewsController::class , 'show']);
    Route::get('conferences', [NewsController::class , 'showconferences']);

    Route::get('strategies', [JournalController::class , 'showStrategies']);

    Route::get('HeadTeacher-Word', [JournalController::class , 'showHeadTeacherWord']);
    Route::get('structure', [JournalController::class , 'showStructure']);

    Route::post('messages/store', [MessageController::class , 'store'])->name('messages.store');
    Route::post('tops/', [TopController::class , 'show'])->name('tops.show');
    Route::post('study/store', [StudyController::class , 'store'])->name('study.store');
    Route::post('Review/store', [ReviewController::class , 'store'])->name('Review.store');
    Route::post('study/check', [StudyController::class , 'check'])->name('study.check');

    Route::get('affiliates/{id}' , [AffiliateController::class , 'show'])->name('affiliates.show');
    Route::get('Research/' , [ResearchController::class , 'show'])->name('Research.show');
    Route::get('course/' , [CoursesController::class , 'show'])->name('course.show');
    Route::get('Patents/' , [PatentsController::class , 'show'])->name('Patents.show');
    Route::get('Study/' , [PatentsController::class , 'showStudy'])->name('Study.show');
    Route::get('Review/' , [PatentsController::class , 'showReview'])->name('Review.show');
    Route::get('College/' , [CollegeController::class , 'show'])->name('College.show');
});





Auth::routes(['register'=>false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

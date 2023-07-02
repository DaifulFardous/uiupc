<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContestController;
use App\Http\Controllers\GraderController;
use App\Http\Controllers\ProblemsController;
use App\Http\Controllers\DiscussionsController;
use App\Http\Controllers\UserController;

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
/*----------Admin Routes--------*/
Route::prefix('admin')->group(function (){
    Route::get('/login',[AdminController::class,'Index'])->name('login-form');
    Route::post('/login/owner',[AdminController::class,'Login'])->name('admin.login');
    Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout',[AdminController::class,'Logout'])->name('admin.logout')->middleware('admin');
    Route::get('/add/category',[AdminController::class,'CategoryAdd'])->name('add.category')->middleware('admin');
    Route::get('/add/contest',[ContestController::class,'ContestAdd'])->name('add.contest')->middleware('admin');
    Route::post('/store/category',[AdminController::class,'CategoryStore'])->name('store.category')->middleware('admin');
    Route::post('/store/contest',[ContestController::class,'ContestStore'])->name('store.contest')->middleware('admin');
    Route::get('/show/categories',[AdminController::class,'CategoryShow'])->name('show.categories')->middleware('admin');
    Route::get('/show/contests',[ContestController::class,'ContestShow'])->name('show.contests')->middleware('admin');
    Route::get('/categoryDel/{id}',[AdminController::class,'CategoryDel'])->name('categoryDel')->middleware('admin');
    Route::get('/contestDel/{id}',[ContestController::class,'ContestDel'])->name('contestDel')->middleware('admin');
    Route::get('/add/problem',[AdminController::class,'ProblemAdd'])->name('add.problem')->middleware('admin');
    Route::get('/add/pcproblem',[ContestController::class,'ProblemAdd'])->name('add.pcproblem')->middleware('admin');
    Route::post('/store/problem',[AdminController::class,'ProblemStore'])->name('store.problem')->middleware('admin');
    Route::post('/store/pcproblem',[ContestController::class,'ProblemStore'])->name('store.pcproblem')->middleware('admin');
    Route::get('/show/problems',[AdminController::class,'ProblemShow'])->name('show.problems')->middleware('admin');
    Route::get('/show/pcproblems',[ContestController::class,'ProblemShow'])->name('show.pcproblems')->middleware('admin');
    Route::get('/problemDel/{id}',[AdminController::class,'ProblemDel'])->name('problemDel')->middleware('admin');
    Route::get('/pcproblemDel/{id}',[ContestController::class,'ProblemDel'])->name('pcproblemDel')->middleware('admin');
    Route::get('/show/submissions',[ContestController::class,'pcSubmission'])->name('show.submissions')->middleware('admin');
    Route::get('/download/{id}',[ContestController::class,'download'])->middleware('admin');
    Route::get('/set/result',[AdminController::class,'setResult'])->name('set.result')->middleware('admin');
    Route::post('/store/result',[AdminController::class,'storeResult'])->name('store.result')->middleware('admin');
    Route::get('/reset/list',[AdminController::class,'resetResult'])->name('reset.list')->middleware('admin');
   // Route::get('/register',[AdminController::class,'Register'])->name('admin.register');
   // Route::post('/register/create',[AdminController::class,'RegisterCreate'])->name('admin.register.create');
});
/*----------END Admin Routes--------*/
/*----------Grader Routes-----------*/
Route::prefix('grader')->group(function (){
    Route::get('/login',[GraderController::class,'Index'])->name('grader-login-form');
    Route::post('/login/owner',[GraderController::class,'Login'])->name('grader.login');
    Route::get('/dashboard',[GraderController::class,'Dashboard'])->name('grader.dashboard')->middleware('grader');
    Route::get('/logout',[GraderController::class,'Logout'])->name('grader.logout')->middleware('grader');
   // Route::get('/register',[GraderController::class,'Register'])->name('grader.register');
   // Route::post('/register/create',[GraderController::class,'RegisterCreate'])->name('grader.register.create');

});
/*----------End Grader Routes-----------*/

Route::get('/categories',[ProblemsController::class,'index'])->name('categories');
Route::get('/problems/{id}',[ProblemsController::class,'problems']);
Route::get('/problem/{id}',[ProblemsController::class,'problem']);
Route::get('/pcproblem/{id}',[ContestController::class,'pcproblem']);
Route::post('/compile',[ProblemsController::class,'compile'])->name('compile');
Route::get('/discussion/problems',[DiscussionsController::class,'problems'])->name('discussions');
Route::get('/discussion/{id}',[DiscussionsController::class,'discussion'])->name('discussion');
Route::get('/contest',[ContestController::class,'index'])->name('contest');
Route::get('contest/problems/{id}',[ContestController::class,'Cproblems']);

Route::get('/', function () {
    return view('index');
})->name('/');

/*----------USER Routes-----------*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/submission',[ProblemsController::class,'submit'])->middleware(['auth'])->name('submission');
Route::get('/leaderboard',[ProblemsController::class,'leaderboard'])->middleware(['auth'])->name('leaderboard');
Route::post('/store/comment',[DiscussionsController::class,'store'])->middleware(['auth'])->name('store/comment');
Route::get('/delete/comment/{id}',[DiscussionsController::class,'distroy'])->middleware(['auth'])->name('delete/comment');
Route::get('/user/profile/{id}',[UserController::class,'profile'])->middleware(['auth'])->name('user/profile');
Route::post('/contest/upload',[ContestController::class,'upload'])->middleware(['auth'])->name('contest.upload');

/*----------ENDUSER Routes-----------*/
require __DIR__.'/auth.php';

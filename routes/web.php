<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MemberController;
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

Route::get('/', function () {
    return view('page.index');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/custom-signin', [AuthController::class, 'createSignin'])->name('signin.custom');


Route::get('/register', [AuthController::class, 'signup'])->name('register');
Route::post('/create-user', [AuthController::class, 'customSignup'])->name('user.registration');


Route::get('/dashboard', [AuthController::class, 'dashboardView'])->name('dashboard');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/guide', function () {
    return view('page.advertiser-guide-page');
});
Route::get('/contact', function () {
    return view('page.advertiser-contact-page');
});
Route::get('/market', function () {
    return view('page.market');
});
Route::get('/community', function () {
    return view('page.community');
});
Route::get('/applicant-information', function () {
    return view('page.applicant-information-page');
});
Route::get('/employer-profile', function () {
    return view('page.employer-profile');
});
Route::get('/applied-candidates', function () {
    return view('page.applied-candidates');
});
Route::get('/apply-history', function () {
    return view('page.apply-history');
});
Route::get('/candidates-search', function () {
    return view('page.candidates-search');
});
Route::get('/classify-role', function () {
    return view('page.classify-role');
});
Route::get('/employer-my-account', function () {
    return view('page.employer-my-account');
});
Route::get('/employer-products', function () {
    return view('page.employer-products');
});
Route::get('/employer-sign-in', function () {
    return view('page.employer-sign-in');
});
Route::get('/job-ad', function () {
    return view('page.job-ad');
});
Route::get('/job-apply', function () {
    return view('page.job-apply');
});
Route::get('/job-information', function () {
    return view('page.job-information');
});
Route::get('/job-search', function () {
    return view('page.job-search');
});
Route::get('/job-seeker-my-page', function () {
    return view('page.job-seeker-my-page');
});
Route::get('/job-seeker-sign-in', function () {
    return view('page.job-seeker-sign-in');
});
Route::get('/my-suggestion', function () {
    return view('page.my-suggestion');
});
Route::get('/recruit-guide', function () {
    return view('page.recruit-guide');
});
Route::get('/seeker-my-account', function () {
    return view('page.seeker-my-account');
});
Route::get('/service-guide', function () {
    return view('page.service-guide');
});
Route::get('/suggestion-page', function () {
    return view('page.suggestion-page');
});
Route::get('/video-interview', function () {
    return view('page.video-interview');
});
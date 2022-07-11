<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});
// for home
Route::get('/home', function () {
    return view('home');
});
// for leave 
Route::get('/leave', function () {
    return view('employee.leave.list');
});
// for overtime 
Route::get('/overtime', function () {
    return view('employee.overtime.list');
});
// for official-business
Route::get('/official-business', function () {
    return view('employee.officialbusiness.list');
});
// for absent-late
Route::get('/absent-late', function () {
    return view('employee.absentlate.list');
});

// for dashboard/pendingapprovals
Route::get('/dashboard/pendingapprovals', function () {
    return view('dashboard.pendingapprovals.list');
});
// for undertime
Route::get('/undertime', function () {
    return view('employee.undertime.list');
});
// for dashboard/expiredlicenses
Route::get('/dashboard/expiredlicenses', function () {
    return view('dashboard.expiredlicense.list');
});
// for dashboard/vaccination
Route::get('/dashboard/vaccination', function () {
    return view('dashboard.vaccination.list');
});
// for employee-list
Route::get('/employee-list', function () {
    return view('employee.employeelist.list');
});
// for setting
Route::get('/setting', function () {
    return view('setting.landingcard.card-list');
});
// for department
Route::get('/department', function () { 
    return view('setting.department.list');
});
// for position
Route::get('/position', function () { 
    return view('setting.position.list');
});
// for job-title
Route::get('/job-title', function () { 
    return view('setting.jobtitle.list');
});
// for employment-status
Route::get('/employment-status', function () { 
    return view('setting.status.list');
});
// for roles
Route::get('/roles', function () { 
    return view('setting.roles.list');
});
// for add-user
Route::get('/add-user', function () { 
    return view('setting.adduser.list');
});
// for user-log
Route::get('/user-log', function () { 
    return view('setting.logs.list');
});
// for user-restriction
Route::get('/user-restriction', function () { 
    return view('setting.logs.list');
});
// for work-schedule
Route::get('/work-schedule', function () { 
    return view('setting.workschedule.list');
});

// for company-profile
Route::get('/company-profile', function () { 
    return view('setting.company.list');
});
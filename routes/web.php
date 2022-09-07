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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login/1', function () {
    return view('login1');
});
Route::get('/login/2', function () {
    return view('login2');
});
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/dashboard/1', function () {
    return view('dashboard1');
});

Route::get('/dashboard/2', function () {
    return view('dashboard2');
});
Route::get('/package', function () {
    return view('package');
});
Route::get('/hris', function () {
    return view('hrisempinfo');
});
Route::get('/hris/register', function () {
    return view('hrisregister');
});
Route::get('/setting', function () {
    return view('setting');
});
Route::get('/setting/roles', function () {
    return view('settingroles');
});
Route::get('/setting/company', function () {
    return view('settingcompany');
});
Route::get('/setting/department', function () {
    return view('settingdepartment');
});
Route::get('/setting/unit', function () {
    return view('settingunit');
});
Route::get('/setting/branch', function () {
    return view('settingbranch');
});
Route::get('/setting/designation', function () {
    return view('settingdesignation');
});
Route::get('/setting/jobgrade', function () {
    return view('settingjobgrade');
});
Route::get('/setting/sop', function () {
    return view('settingsop');
});
Route::get('/setting/news', function () {
    return view('settingnews');
});

Route::get('/project', function () {
    return view('projectregcustomers');
});

Route::get('/setting/employmenttype', function () {
    return view('settingemploymenttype');
});
Route::get('/hris/editprofile', function () {
    return view('hris-editprofile');
});
Route::get('/hris/edit', function () {
    return view('hrisedit');
});
Route::get('/project/projectinformation', function () {
    return view('projectinformation');
});
Route::get('/project/projectregistration', function () {
    return view('projectregistration');
});
Route::get('/project/projectupdate', function () {
    return view('projectupdate');
});
Route::get('/project/projectrequest', function () {
    return view('projectrequest');
});
Route::get('/report/projectlisting', function () {
    return view('reportprojectlisting');
});
Route::get('/report/viewprojectlisting', function () {
    return view('viewprojectlisting');
});


Route::get('/hris/myprofile', function () {
    return view('hris-myprofile');
});

Route::get('/e-att', function () {
    return view('myattendance');
});

Route::get('/org', function () {
    return view('phonedirectory');
});

Route::get('/org/orgchart', function () {
    return view('organizationchart');
});

Route::get('/org/dept-tree', function () {
    return view('departmenttree');
});

Route::get('/project/projectregmyproject', function () {
    return view('projectregmyproject');
});
Route::get('/project', function () {
    return view('projectregcustomers');
});
Route::get('/projectstatus/customername', function () {
    return view('statuscustomername');
});
Route::get('/projectstatus/all', function () {
    return view('statusall');
});
Route::get('/projectstatus/financialyear', function () {
    return view('statusfinancialyear');
});





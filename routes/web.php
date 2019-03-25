<?php




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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function(){
    return view('index');
});

Route::prefix('admin')->group(function (){
    Route::post('submitNewEmployee','HomeController@addEmployee')->name('employer.employee.submit');
    Route::post('approveLeave/{id}', 'HomeController@approveLeave')->name('leave.accept.{id}');
    Route::post('addTask','HomeController@makeTask')->name('admin.task.submit');
    Route::post('addTraining','HomeController@makeTraining')->name('admin.training.submit');
    Route::post('addAdmin','HomeController@addAdmin')->name('employer.admin.submit');
    Route::get('/employees','HomeController@allEmployees')->name('employer.employee.all');
    Route::post('/addAppraisal','HomeController@makeAppraisal')->name('admin.appraisal.submit');
    Route::post('/changePassword', 'HomeController@updatePassword')->name('employer.password.submit');

    Route::post('/download/appraisal/{id}', 'HomeController@downloadAppraisal');

    Route::get('/appraisals', 'HomeController@getAppr');
    Route::get('/leaves', 'HomeController@getLvs')->name('leaves.all');

    Route::get('/act','HomeController@getActivities');
});

Route::prefix('employee')->group(function() {
    Route::get('/login', 'Auth\EmployeeLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\EmployeeLoginController@login')->name('admin.login.submit');
    Route::get('/home', 'EmployeeController@index')->name('admin.home');
    Route::get('/dashboard', 'EmployeeController@index')->name('admin.home');
    Route::get('/profile-update', 'EmployeeController@updateRedirect')->name('employee.update');
    Route::post('/update-profile','EmployeeController@updateProfile')->name('employee.update.submit');
    Route::post('/doTask/{id}','EmployeeController@doTask')->name('employee.task.done');
    Route::post('/doTrain/{id}','EmployeeController@doTrain')->name('employee.train.done');
    Route::post('/addLeave','EmployeeController@addLeave')->name('employee.leave.submit');

    Route::get('/download/salary', 'EmployeeController@downloadSalary')->name('salary.download');
    Route::post('/download/appraisal/{id}', 'EmployeeController@downloadAppraisal');
});


// Route::get('/pdf', function(){
//     $salary = 10000;
    
//     $data = [
//         'name' => "Falola Jhhames",
//         'Part' => "2",
//         'salary' => $salary,
//         'tax' => calcTax($salary),
//         'net' => $salary - calcTax($salary)
//     ];
//     $pdf = App::make('dompdf.wrapper');
//     $pdf->loadView('pdf.salary',$data);
    
//     return $pdf->download($data['name'].'.pdf');
    
// });

// Route::get('/pdf-view', function(){
//     $salary = 10000;

//     $data = [
//         'name' => "Falola Jhhames",
//         'Part' => "2",
//         'salary' => $salary,
//         'tax' => calcTax($salary),
//         'net' => $salary - calcTax($salary),
//         'summary' => 'James is good',
//         'report' => 'jdnmk ndmnsjnkm,nusbcksmnuebufjmd, jinbjinm csjnkjnc',
//         'appraised_by'=>'Dami'
//     ];
//     return view('pdf.appraisal')->with($data);
// });


// function calcTax($a){
//     return 0.15*$a;
// }
// Route::get('/employee-login', function(){
//     return view('auth.employee-login');
// });
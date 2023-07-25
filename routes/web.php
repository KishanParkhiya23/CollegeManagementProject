<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ForgetPswdController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\PageCallingController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\RegestrationController;
use App\Http\Controllers\MarksEntryController;
use App\Http\Controllers\MarksGradeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\StudentEndHomeController;
use Illuminate\Support\Facades\Route;



// -------------------------------------
// Admin Side Page Calling Routes Start
// -------------------------------------


//Log In
Route::get('/LogIn', [LogInController::class, 'LogInPage'])->name('LogInPage');
Route::post('LogInCheck', [LogInController::class, 'LogInCheck'])->name('LogInCheck');

//Forget Pswd 
Route::get('Forget', [ForgetPswdController::class, 'ForgetPswd'])->name('Forget');
Route::post('NewPswd', [ForgetPswdController::class, 'NewPswd'])->name('ForgetNewPswd');
Route::post('SavePswd', [ForgetPswdController::class, 'SavePswd'])->name('SavePswd');


Route::group(['middleware' => ['LogInCheck']], function () {

    Route::get('Home', [PageCallingController::class, 'HomePage'])->name('Home');

    // Profile pge
    Route::get('Profile', [ProfileController::class, 'ProfilePage'])->name('Profile');
    Route::get('ManageProfile{id}', [ProfileController::class, 'ManageProfilePage'])->name('ManageProfile');
    Route::get('ChangePasswordCall', [ProfileController::class, 'ChangePasswordCall'])->name('ChangePasswordCall');
    Route::post('UpdateSaveProfile{id}', [ProfileController::class, 'UpdateSaveProfile'])->name('UpdateSaveProfile');
    Route::post('ChangePassword', [ProfileController::class, 'ChangePassword'])->name('ChangePassword');

    // Report Management
    Route::get('ReportManagement', [ReportController::class, 'ReportManagementPage'])->name('ReportManagement');
    Route::post('GenerateResult', [ReportController::class, 'GenerateResult'])->name('GenerateResult');

    // setup management pagecall function 
    Route::get('Class', [ClassController::class, 'ClassPage'])->name('Class');
    Route::get('Year', [YearController::class, 'YearPage'])->name('Year');
    Route::get('Subject', [SubjectController::class, 'SubjectPage'])->name('Subject');

    // Marks management pagecall function 
    Route::get('MarksEntry', [MarksEntryController::class, 'MarksEntryPage'])->name('MarksEntry');
    Route::get('MarksGrade', [MarksGradeController::class, 'MarksGradePage'])->name('MarksGrade');


    // Student Management Page calling routres
    Route::get('Regestration', [RegestrationController::class, 'RegestrationPage'])->name('Regestration');
    Route::post('RegSave', [RegestrationController::class, 'RegSave'])->name('RegSave');

    Route::get('StudentPage', [RegestrationController::class, 'StudentPage'])->name('StudentPage');
    Route::get('StudentUpdate{id}', [RegestrationController::class, 'StudentUpdate'])->name('StudentUpdate');
    Route::post('UpdateStudentSave{id}', [RegestrationController::class, 'UpdateStudentSave'])->name('UpdateStudentSave');
    Route::get('DeleteStudent{id}', [RegestrationController::class, 'DeleteStudent'])->name('DeleteStudent');


    // ------------------
    // Data Save Routes
    // ------------------

    Route::post('YearSave', [YearController::class, 'YearSave'])->name('YearSave');
    Route::post('SubjectSave', [SubjectController::class, 'SubjectSave'])->name('SubjectSave');

    Route::post('ClassSave', [ClassController::class, 'ClassSave'])->name('ClassSave');
    Route::get('MarksEntrySave', [MarksEntryController::class, 'MarksEntrySave'])->name('MarksEntrySave');

    Route::get('MarksGradeSave', [MarksGradeController::class, 'MarksGradeSave'])->name('MarksGradeSave');


    // ------------------
    // update page call
    // -----------------

    Route::get('UpdateClassCall{id}', [ClassController::class, 'UpdateClassCall'])->name('UpdateClassCall');

    Route::get('UpdateSubjectCall{id}', [SubjectController::class, 'UpdateSubjectCall'])->name('UpdateSubjectCall');

    Route::get('UpdateYearCall{id}', [YearController::class, 'UpdateYearCall'])->name('UpdateYearCall');

    Route::get('UpdateMarks{id}', [MarksEntryController::class, 'UpdateMarks'])->name('UpdateMarks');

    Route::get('Update/Marks/Grade{id}', [MarksGradeController::class, 'UpdateMarksGrade'])->name('UpdateMarksGrade');


    // -----------------
    // update data save
    // -----------------

    Route::post('UpdateClassSave{id}', [ClassController::class, 'UpdateClassSave'])->name('UpdateClassSave');

    Route::post('UpdateSubjectSave{id}', [SubjectController::class, 'UpdateSubjectSave'])->name('UpdateSubjectSave');

    Route::post('UpdateYearSave{id}', [YearController::class, 'UpdateYearSave'])->name('UpdateYearSave');

    Route::post('UpdateMarksSave{id}', [MarksEntryController::class, 'UpdateMarksSave'])->name('UpdateMarksSave');

    Route::get('Update/SaveMarks/Grade{id}', [MarksGradeController::class, 'UpdateSaveMarksGrade'])->name('UpdateSaveMarksGrade');


    // -----------------
    // Delete Data
    // -----------------

    Route::get('DeleteYear{id}', [YearController::class, 'DeleteYear'])->name('DeleteYear');

    Route::get('DeleteClass{id}', [ClassController::class, 'DeleteClass'])->name('DeleteClass');

    Route::get('DeleteSubject{id}', [SubjectController::class, 'DeleteSubject'])->name('DeleteSubject');

    Route::get('DeleteMarks{id}', [MarksEntryController::class, 'DeleteMarks'])->name('DeleteMarks');

    Route::get('Delete/Marks/Grade{id}', [MarksGradeController::class, 'DeleteMarksGrade'])->name('DeleteMarksGrade');


    // log out 
    Route::get('LogOut', [LogInController::class, 'LogOut'])->name('LogOut');
});


// -------------------------------------
// Admin Side Page Calling Routes End
// -------------------------------------


//-----------------------------------
// Student pages Routs Start
//-----------------------------------

// Home Page Call 
Route::get('/', [StudentEndHomeController::class, 'StudentHome'])->name('StudentHome');
Route::get('StudentAbout', [StudentEndHomeController::class, 'StudentAbout'])->name('StudentAbout');
Route::get('StudentAdmissions', [StudentEndHomeController::class, 'StudentAdmissions'])->name('StudentAdmissions');
Route::get('StudentCourse', [StudentEndHomeController::class, 'StudentCourse'])->name('StudentCourse');
Route::get('StudentContact', [StudentEndHomeController::class, 'StudentContact'])->name('StudentContact');
Route::get('StudentRegistration', [StudentEndHomeController::class, 'StudentRegistration'])->name('StudentRegistration');
Route::get('StudentLogIn', [StudentEndHomeController::class, 'StudentLogIn'])->name('StudentLogIn');

// Student Registration 
Route::post('StudentRegSave', [StudentEndHomeController::class, 'StudentRegSave'])->name('StudentRegSave');

// Student Log In Check  
Route::get('StudentLogInCheck', [StudentEndHomeController::class, 'StudentLogInCheck'])->name('StudentLogInCheck');

// Forget Password
Route::get('StudentForgetPswdPage', [StudentEndHomeController::class, 'StudentForgetPswdPage'])->name('StudentForgetPswdPage');

Route::post('StudentForgetSave', [StudentEndHomeController::class, 'StudentForgetSave'])->name('StudentForgetSave');

Route::get('StudentLogOut', [StudentEndHomeController::class, 'StudentLogOut'])->name('StudentLogOut');

// Student Log out

Route::group(['middleware' => ['StudentLogInCheck']], function () {

    Route::get('StudentResult', [StudentEndHomeController::class, 'StudentResult'])->name('StudentResult');

    Route::get('StudentProfile', [StudentEndHomeController::class, 'StudentProfile'])->name('StudentProfile');

    // Student Profile Update
    Route::get('StudentProfileUpdate', [StudentEndHomeController::class, 'StudentProfileUpdate'])->name('StudentProfileUpdate');
    
    // Change Password
    Route::get('StudentChagePswdPage', [StudentEndHomeController::class, 'StudentChagePswdPage'])->name('StudentChagePswdPage');

    Route::post('StudentChangePswd', [StudentEndHomeController::class, 'StudentChangePswd'])->name('StudentChangePswd');
});

//-----------------------------------
// Student pages Routs End
//-------------------------------
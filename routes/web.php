<?php

#############################################
################AUTH#########################
#############################################
Auth::routes();
Route::get('check/email/confirmation/{token}', 'Email\ConfirmEmailController@clickemaillink');

################HOME######################
Route::get('home', 'HomeController@index');
Route::get('/', 'LandingPage\LandingController@home');
Route::get('signup', 'LandingPage\LandingController@signUp');


##############################################
#################TEACHER######################
##############################################
Route::prefix('teacher')->group(function () {
    Route::get('registration', 'Teacher\Register\RegisterController@registerForm');
    Route::post('registration', 'Teacher\Register\RegisterController@saveTeacherData');

    Route::prefix('uploads')->group(function () {
        Route::get('all', 'Teacher\Uploads\UploadsController@uploads');
        Route::get('questions', 'Teacher\Uploads\QuestionsController@showClasses');
    });

##############################################
#################STUDENT######################
##############################################
    Route::prefix('student')->group(function () {
        Route::get('registration', 'Student\RegisterController@showRegistrationForm');
        Route::post('registration', 'Student\RegisterController@saveRegistationForm');
    });
});

##############################################
#############SYSTEM ADMINISTRATOR#############
##############################################
Route::prefix('admin')->group(function () {

});

##############################################
##############SHARED##########################
##############################################

##############################################
###############ROOT###########################
##############################################

##############################################
#############TESTING##########################
##############################################

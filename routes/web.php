<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StudentCourseController;
use App\Http\Controllers\StudentQuizController;
use App\Http\Controllers\SuperUserController;
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

Route::get('/', [AppController::class, 'frontPage'])->name('app.front-page');
Route::get('about', [AppController::class, 'aboutPage'])->name('app.about-page');
Route::get('licensees', [AppController::class, 'licenseesPage'])->name('app.licensees-page');
Route::get('contacts', [AppController::class, 'contactsPage'])->name('app.contacts-page');

Route::prefix('services')->group(function (){
    Route::get('/{slug}', [ServiceController::class, 'publicShow'])->name('services.show-public');
});

Route::prefix('email')->group(function (){
    Route::post('feedback-data', [EmailController::class, 'mailFeedbackData'])->name('email.feedback-data');
    Route::post('feedback-consult', [EmailController::class, 'mailFeedbackConsultData'])->name('email.feedback-consult-data');
    Route::post('feedback-data', [EmailController::class, 'mailFeedbackPartnerData'])->name('email.feedback-partner-data');
});

Route::prefix('education')->group(function () {
    // Сведения об образовательной организации
    Route::prefix('information')->group(function () {
        Route::get('main', [EducationController::class, 'mainInformationView'])->name('education.info.main');
        Route::get('structure', [EducationController::class, 'structureView'])->name('education.info.structure');
        Route::get('standards', [EducationController::class, 'standardsView'])->name('education.info.standards');
        Route::get('teachers', [EducationController::class, 'teachersView'])->name('education.info.teachers');
    });
    // Платные услуги
    Route::prefix('services')->group(function (){
        Route::get('price', [EducationController::class, 'educationPrice'])->name('education.price');
        Route::get('outsourcing/price', [EducationController::class, 'outsourcingPrice'])->name('education.outsourcing.price');
    });
    // Формы обучения
    Route::prefix('forms')->group(function () {
        Route::get('full-time', [EducationController::class, 'fullTimeStudyView'])->name('education.forms.full-time');
        Route::get('distance', [EducationController::class, 'distanceStudyView'])->name('education.forms.distance');
        Route::get('remote', [EducationController::class, 'remoteStudyView'])->name('education.forms.remote');
    });
    // Документы
    Route::prefix('documents')->group(function () {
        Route::get('permits', [EducationController::class, 'permitsDocsView'])->name('education.docs.permits');
        Route::get('local', [EducationController::class, 'localDocsView'])->name('education.docs.local');
    });
    // Об учебном центре
    Route::prefix('about')->group(function () {
        Route::get('contacts', [EducationController::class, 'contactsView'])->name('education.about.contacts');
        Route::get('reviews', [EducationController::class, 'reviewsView'])->name('education.about.reviews');
    });
});


// AJAX
Route::get('ajax/remove-image/{image}', [AjaxController::class, 'removeImage'])->name('ajax.remove-image');

Route::middleware('auth')->group(function () {
    Route::prefix('account')->group(function () {
        Route::get('/', [AccountController::class, 'account'])->name('account');
        Route::get('edit', [AccountController::class, 'editAccount'])->name('account.edit');
        Route::put('edit', [AccountController::class, 'updateAccount'])->name('account.update');
        Route::get('password', [AccountController::class, 'editPassword'])->name('account.password');
        Route::put('password', [AccountController::class, 'updatePassword'])->name('account.password.update');
    });

    // My courses
    Route::get('my-courses', [StudentCourseController::class, 'myCourses'])->name('account.my-courses');
    Route::get('choose-quiz/{quiz}', [StudentCourseController::class, 'quizType'])->name('account.choose-quiz');
    Route::get('quizzes/{quiz}', [StudentQuizController::class, 'show'])->name('account.quizzes.show');
    Route::post('quizzes/{quiz}', [StudentQuizController::class, 'storeAnswers'])->name('account.quiz.answers.store');
    Route::get('quizzes/{quiz}/result/asd', [StudentQuizController::class, 'quizResult'])->name('account.quiz.result');
});

// Функционал для супер-админа и админа
Route::prefix('super-admin')->middleware(['role:super-admin|admin'])->group(function () {
    Route::resource('courses', CourseController::class);
    Route::resource('courses/{course}/quizzes', QuizController::class);
    Route::resource('quizzes/{quiz}/questions', QuestionController::class);
    Route::resource('services', ServiceController::class);
});

// Делаем пользователя evd.work@yandex.ru супер-администратором
Route::get('set-superuser-role', [SuperUserController::class, 'setRoleToAdmin']);

require __DIR__ . '/auth.php';

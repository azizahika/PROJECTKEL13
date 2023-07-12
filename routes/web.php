<?php

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PsychologistController;
use App\Http\Controllers\AdminController;


// Public routes
Route::get('/', function () {
    return view('index');
});

Route::get('/faq', function () {
    return view('user.faq');
});

Route::get('/contact', function () {
    return view('user.contact');
});

Route::middleware(['auth'])->group(function () {
    // User routes
    Route::get('/questionnaire', function () {
        return view('user.questionnaire');
    });

    Route::post('/questionnaire', function () {
        // Proses pengisian kuisioner
    });

    Route::get('/questionnaire/result', function () {
        return view('user.questionnaire_result');
    });

    Route::get('/consultation', function () {
        return view('user.consultation');
    });

    Route::get('/medical-records', function () {
        return view('user.medical_records');
    });

    Route::get('/communication', function () {
        return view('user.communication');
    });

    // Psychologist routes
    Route::middleware(['role:psychologist'])->group(function () {
        Route::get('/psychologist/consultation', function () {
            return view('psychologist.consultation');
        });

        Route::post('/psychologist/consultation', function () {
            // Proses konsultasi oleh ahli psikolog
        });

        Route::get('/psychologist/medical-records', function () {
            return view('psychologist.medical_records');
        });

        Route::get('/psychologist/communication', function () {
            return view('psychologist.communication');
        });
    });

    // Admin routes
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/psychologists', function () {
            return view('admin.psychologists');
        });

        Route::get('/admin/consultations', function () {
            return view('admin.consultations');
        });

        Route::get('/admin/questionnaires', function () {
            return view('admin.questionnaires');
        });

        Route::get('/admin/questionnaire-results', function () {
            return view('admin.questionnaire_results');
        });
    });

    // Authentication routes
    Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [UserController::class, 'login']);
    Route::post('/logout', [UserController::class, 'logout']);
    Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [UserController::class, 'register']);
});


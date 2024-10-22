<?php

use App\Http\Controllers\adminpanel\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;

use App\Http\Controllers\adminpanel\CompanyController  as AdminCompanyController;
use App\Http\Controllers\adminpanel\JobController  as AdminJobController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/* Home Page */
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/jobdetail/{id}', [JobController::class, 'jobdetail'])->name('jobdetail');

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminCompanyController::class, 'index'])->name('admin.dashboard');

    //Route::resource('companies', CompanyController::class);
    Route::get('/admin/companies',[AdminCompanyController::class,'index'])->name('admin.companies');
    Route::get('/admin/companies/create-company',[AdminCompanyController::class,'create'])->name('admin.companies.create');

    Route::post('/admin/companies/save-company',[AdminCompanyController::class,'store'])->name('admin.companies.save');
    Route::get('/admin/companies/show-company/{id}',[AdminCompanyController::class,'show'])->name('admin.companies.show');

    Route::get('/admin/companies/edit/{id}',[AdminCompanyController::class,'edit'])->name('admin.companies.edit');
    Route::post('/admin/companies/update/{id}',[AdminCompanyController::class,'update'])->name('admin.companies.update');

    Route::delete('/admin/companies/{id}',[AdminCompanyController::class,'destroy'])->name('admin.companies.destroy');

    //
    // Routes for job postings
    Route::get('/admin/jobs',[AdminJobController::class,'index'])->name('admin.jobs');
    Route::get('/admin/jobs/create', [AdminJobController::class, 'create'])->name('admin.jobs.create');
    Route::post('/admin/jobs/save-job', [AdminJobController::class, 'store'])->name('admin.jobs.store');
    Route::get('/admin/jobs/{job}', [AdminJobController::class, 'show'])->name('admin.jobs.show');
    Route::get('/admin/jobs/{job}/edit', [AdminJobController::class, 'edit'])->name('admin.jobs.edit');
    Route::post('/admin/jobs/{job}', [AdminJobController::class, 'update'])->name('admin.jobs.update');
    Route::delete('/admin/jobs/{id}', [AdminJobController::class, 'destroy'])->name('admin.jobs.destroy');
});

require __DIR__.'/auth.php';


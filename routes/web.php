<?php
use App\Http\Controllers\FaqHome;
use App\Http\Controllers\PageHome;
use App\Http\Controllers\AdminPage;
use App\Http\Controllers\AdminTeam;
use App\Http\Controllers\AdminAbout;
use App\Http\Controllers\BlogDetail;
use App\Http\Controllers\AdminBanner;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminArticle;
use App\Http\Controllers\AdminCategory;
use App\Http\Controllers\AdminServices;
use App\Http\Controllers\ServiceDetail;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AdminFaqController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DashboardController;

// Frontend Routes
Route::get('/', [WelcomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{id}', [ServiceDetail::class, 'show'])->name('services.show');
Route::get('/teams', [TeamsController::class, 'index'])->name('teams');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/category/{id}', [BlogController::class, 'category'])->name('blogs.category');
Route::get('/blogs/{id}', [BlogDetail::class, 'show'])->name('blogs.show');
Route::get('/faq', [FaqHome::class, 'index'])->name('faq');
// privacy policy
Route::get('/privacy-policy', [PageHome::class, 'privacy'])->name('privacy');
// terms and conditions
Route::get('/terms-conditions', [PageHome::class, 'terms'])->name('terms');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Load authentication and profile routes from a separate file
require __DIR__ . '/Auth.php';

// Protected Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // banner routes
    Route::get('/banner', [AdminBanner::class, 'index'])->name('banner.index');
     Route::put('/banner', [AdminBanner::class, 'update'])->name('banner.update');

    // Service Routes
    Route::get('/services', [AdminServices::class, 'index'])->name('services.index');
    Route::get('/services/create', [AdminServices::class, 'create'])->name('services.create');
    Route::post('/services/store', [AdminServices::class, 'store'])->name('services.store');
    Route::get('/services/{id}', [AdminServices::class, 'show'])->name('services.show');
    Route::get('/services/edit/{id}', [AdminServices::class, 'edit'])->name('services.edit');
    Route::post('/services/update/{service}', [AdminServices::class, 'update'])->name('services.update');
    Route::delete('/services/delete/{id}', [AdminServices::class, 'destroy'])->name('services.delete');

    // About Routes
    Route::get('/about', [AdminAbout::class, 'index'])->name('about.index');
    Route::get('/about/create', [AdminAbout::class, 'create'])->name('about.create');
    Route::post('/about/store', [AdminAbout::class, 'store'])->name('about.store');
    Route::get('/about/{id}', [AdminAbout::class, 'show'])->name('about.show');
    Route::get('/about/edit/{id}', [AdminAbout::class, 'edit'])->name('about.edit');
    Route::post('/about/update/{about}', [AdminAbout::class, 'update'])->name('about.update');
    Route::delete('/about/delete/{id}', [AdminAbout::class, 'destroy'])->name('about.delete');

    // FAQ Routes
    Route::get('/faq', [AdminFaqController::class, 'index'])->name('faq.index');
    Route::get('/faq/create', [AdminFaqController::class, 'create'])->name('faq.create');
    Route::post('/faq/store', [AdminFaqController::class, 'store'])->name('faq.store');
    Route::get('/faq/{id}', [AdminFaqController::class, 'show'])->name('faq.show');
    Route::get('/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('faq.edit');
    Route::post('/faq/update/{faq}', [AdminFaqController::class, 'update'])->name('faq.update');
    Route::delete('/faq/delete/{id}', [AdminFaqController::class, 'destroy'])->name('faq.delete');

    // Team Routes
    Route::get('/teams', [AdminTeam::class, 'index'])->name('teams.index');
    Route::get('/teams/create', [AdminTeam::class, 'create'])->name('teams.create');
    Route::post('/teams/store', [AdminTeam::class, 'store'])->name('teams.store');
    Route::get('/teams/{id}', [AdminTeam::class, 'show'])->name('teams.show');
    Route::get('/teams/edit/{id}', [AdminTeam::class, 'edit'])->name('teams.edit');
    Route::post('/teams/update/{team}', [AdminTeam::class, 'update'])->name('teams.update');
    Route::delete('/teams/delete/{id}', [AdminTeam::class, 'destroy'])->name('teams.delete');

    // Category Routes
    Route::get('/categories', [AdminCategory::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [AdminCategory::class, 'create'])->name('categories.create');
    Route::post('/categories/store', [AdminCategory::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}', [AdminCategory::class, 'show'])->name('categories.show');
    Route::get('/categories/edit/{id}', [AdminCategory::class, 'edit'])->name('categories.edit');
    Route::post('/categories/update/{category}', [AdminCategory::class, 'update'])->name('categories.update');
    Route::delete('/categories/delete/{id}', [AdminCategory::class, 'destroy'])->name('categories.delete');

    // Article Routes
    Route::get('/articles', [AdminArticle::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [AdminArticle::class, 'create'])->name('articles.create');
    Route::post('/articles/store', [AdminArticle::class, 'store'])->name('articles.store');
    Route::get('/articles/{id}', [AdminArticle::class, 'show'])->name('articles.show');
    Route::get('/articles/edit/{id}', [AdminArticle::class, 'edit'])->name('articles.edit');
    Route::post('/articles/update/{article}', [AdminArticle::class, 'update'])->name('articles.update');
    Route::delete('/articles/delete/{id}', [AdminArticle::class, 'destroy'])->name('articles.delete');

    // Pages Routes
    Route::get('/pages', [AdminPage::class, 'index'])->name('pages.index');
    Route::get('/pages/create', [AdminPage::class, 'create'])->name('pages.create');
    Route::post('/pages/store', [AdminPage::class, 'store'])->name('pages.store');
    Route::get('/pages/{id}', [AdminPage::class, 'show'])->name('pages.show');
    Route::get('/pages/edit/{id}', [AdminPage::class, 'edit'])->name('pages.edit');
    Route::post('/pages/update/{page}', [AdminPage::class, 'update'])->name('pages.update');
    Route::delete('/pages/delete/{id}', [AdminPage::class, 'destroy'])->name('pages.delete');
});





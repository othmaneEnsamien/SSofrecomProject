<?php

use App\Http\Livewire\Admin\AdminAddCompetenceComponent;
use App\Http\Livewire\Admin\AdminCompetenceComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditCompetenceComponent;
use App\Http\Livewire\Admin\AdminProjetComponent;
use App\Http\Livewire\HomeComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/gestion/Competences', AdminCompetenceComponent::class)->name('admin.competences');
    Route::get('/admin/gestion/dashboard', AdminProjetComponent::class)->name('admin.projets');
    Route::get('/admin/gestion/addcompetence', AdminAddCompetenceComponent::class)->name('admin.addcompetence');
    Route::get('/admin/gestion/editcompetences/{competence_id}', AdminEditCompetenceComponent::class)->name('admin.editcompetences');
});

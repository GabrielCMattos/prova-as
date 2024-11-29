<?php

use App\Http\Controllers\ArtifactController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CuratorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('artifacts', action: [ArtifactController::class, 'index'])->name('artifacts.index');
    Route::get('artifacts/create', [ArtifactController::class, 'create'])->name('artifacts.create');
    Route::post('artifacts', [ArtifactController::class, 'store']);
    Route::get('artifacts/{id}/edit', [ArtifactController::class, 'edit'])->name('artifacts.edit');
    Route::put('artifacts/{id}', [ArtifactController::class, 'update']);
    Route::delete('artifacts/{id}', [ArtifactController::class, 'destroy']);

    Route::get('collections', action: [CollectionController::class, 'index'])->name('collections.index');
    Route::get('collections/create', [CollectionController::class, 'create'])->name('collections.create');
    Route::post('collections', [CollectionController::class, 'store']);
    Route::get('collections/{id}/edit', [CollectionController::class, 'edit'])->name('collections.edit');
    Route::put('collections/{id}', [CollectionController::class, 'update']);
    Route::delete('collections/{id}', [CollectionController::class, 'destroy']);

    Route::get('curators', action: [CuratorController::class, 'index'])->name('curators.index');
    Route::get('curators/create', [CuratorController::class, 'create'])->name('curators.create');
    Route::post('curators', [CuratorController::class, 'store']);
    Route::get('curators/{id}/edit', [CuratorController::class, 'edit'])->name('curators.edit');
    Route::put('curators/{id}', [CuratorController::class, 'update']);
    Route::delete('curators/{id}', [CuratorController::class, 'destroy']);
    
});

require __DIR__.'/auth.php';

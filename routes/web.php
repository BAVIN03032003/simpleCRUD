<?php

use App\Http\Controllers\StudentController;
use App\Models\Employee;
use App\Models\Phone;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $user = Phone::find(1);
    dd($user->phone);
});

// Route::get('/',[StudentController::class,'index'])->name('student_form');
// Route::post('/store',[StudentController::class,'store']);
// Route::get('/list',[StudentController::class,'list'])->name('student_list');
// Route::get('/edit/{id}',[StudentController::class,'edit'])->name('student_edit');
// Route::post('/update/{id}',[StudentController::class,'update']);
// Route::get('/delete/{id}',[StudentController::class,'delete']);

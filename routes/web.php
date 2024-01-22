<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/', function () {
    $rules1 = \App\Models\Rule::where('rule_rule', '=', 's1')->get();
    $rules2 = \App\Models\Rule::where('rule_rule', '=', 's2')->get();
    $rules3 = \App\Models\Rule::where('rule_rule', '=', 's3')->get();
    $rules4 = \App\Models\Rule::where('rule_rule', '=', 's4')->get();
    return view('index', ['rules1'=>$rules1, 'rules2'=>$rules2, 'rules3'=>$rules3, 'rules4'=>$rules4]);
});

Route::get('/rule/{id}', function(Request $request){
    $rule = \App\Models\Rule::where('id', $request->id)->first();
    return view('show', ['rule'=>$rule]);
});

Route::get('/rules',[RuleController::class,'index'])->middleware('auth');
Route::get('create',[RuleController::class,'create'])->middleware('auth');
Route::post('post',[RuleController::class,'store'])->middleware('auth');
Route::get('show/{id}',[RuleController::class,'show'])->middleware('auth');
Route::get('edit/{id}',[RuleController::class,'edit'])->middleware('auth');
Route::post('update/{id}',[RuleController::class,'update'])->middleware('auth');
Route::get('delete/{id}',[RuleController::class,'destroy'])->middleware('auth');

Route::get('login', [AuthenticatedSessionController::class,'create']);
Route::get('logout', [AuthenticatedSessionController::class,'destroy']);

Route::get('/dashboard', function () {
    return view('auth/login');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

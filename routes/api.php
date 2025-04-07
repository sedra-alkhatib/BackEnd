<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ImageAnalysisController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CustomerQuestionAnswerController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\PythonController;


Route::apiResource('users', UserController::class);
Route::apiResource('profiles', ProfileController::class);
Route::apiResource('customers', CustomerController::class);
Route::apiResource('image-analyses', ImageAnalysisController::class);
Route::apiResource('questions', QuestionController::class);
Route::apiResource('answers', AnswerController::class);
Route::apiResource('customer-question-answers', CustomerQuestionAnswerController::class);
Route::apiResource('results', ResultController::class);











Route::post('/analyze-skin', [PythonController::class, 'analyzeSkin']);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

    
});

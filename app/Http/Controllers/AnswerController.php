<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index()
    {
        return Answer::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer_text' => 'required|string',
        ]);

        return Answer::create($request->all());
    }

    public function show(Answer $answer)
    {
        return $answer;
    }

    public function update(Request $request, Answer $answer)
    {
        $answer->update($request->all());
        return $answer;
    }

    public function destroy(Answer $answer)
    {
        $answer->delete();
        return response()->json(['message' => 'تم الحذف بنجاح']);
    }
}

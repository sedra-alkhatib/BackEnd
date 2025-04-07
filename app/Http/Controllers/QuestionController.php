<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return Question::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'question_text' => 'required|string',
        ]);

        return Question::create($request->all());
    }

    public function show(Question $question)
    {
        return $question;
    }

    public function update(Request $request, Question $question)
    {
        $question->update($request->all());
        return $question;
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return response()->json(['message' => 'تم الحذف بنجاح']);
    }
}

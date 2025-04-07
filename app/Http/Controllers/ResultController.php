<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        return Result::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'customer_question_answer' => 'required|exists:customer_question_answers,id',
            'result_value' => 'required|string',
        ]);

        return Result::create($request->all());
    }

    public function show(Result $result)
    {
        return $result;
    }

    public function update(Request $request, Result $result)
    {
        $result->update($request->all());
        return $result;
    }

    public function destroy(Result $result)
    {
        $result->delete();
        return response()->json(['message' => 'تم الحذف بنجاح']);
    }
}

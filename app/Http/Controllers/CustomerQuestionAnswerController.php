<?php

namespace App\Http\Controllers;

use App\Models\CustomerQuestionAnswer;
use Illuminate\Http\Request;

class CustomerQuestionAnswerController extends Controller
{
    public function index()
    {
        return CustomerQuestionAnswer::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'question_id' => 'required|exists:questions,id',
            'answer_id' => 'required|exists:answers,id',
        ]);

        return CustomerQuestionAnswer::create($request->all());
    }

    public function show(CustomerQuestionAnswer $customerQuestionAnswer)
    {
        return $customerQuestionAnswer;
    }

    public function update(Request $request, CustomerQuestionAnswer $customerQuestionAnswer)
    {
        $customerQuestionAnswer->update($request->all());
        return $customerQuestionAnswer;
    }

    public function destroy(CustomerQuestionAnswer $customerQuestionAnswer)
    {
        $customerQuestionAnswer->delete();
        return response()->json(['message' => 'تم الحذف بنجاح']);
    }
}

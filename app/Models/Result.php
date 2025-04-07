<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'customer_question_answer_id', 'result_value',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function customerQuestionAnswer()
    {
        return $this->belongsTo(CustomerQuestionAnswer::class);
    }
}

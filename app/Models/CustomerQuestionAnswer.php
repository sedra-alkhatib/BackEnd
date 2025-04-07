<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerQuestionAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'question_id', 'answer_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}

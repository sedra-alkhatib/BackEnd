<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function imageAnalysis()
    {
        return $this->hasMany(ImageAnalysis::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }

    public function questionAnswers()
    {
        return $this->hasMany(CustomerQuestionAnswer::class);
    }
}

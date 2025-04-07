<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageAnalysis extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id', 'image_url', 'skin_tone_result',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    use HasFactory;
    public $table = 'producers';

    public $fillable = ['title', 'location', 'products', 'about', 'image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

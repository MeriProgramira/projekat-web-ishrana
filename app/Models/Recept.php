<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    use HasFactory;

    public $table = 'recepti';

    public $fillable = ['title', 'complexity', 'short_description', 'ingredients', 'preparation', 'dish_type', 'image', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

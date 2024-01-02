<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsToMany(category::class, 'categories_lessons', 'lesson_id', 'category_id');
    }

    public function level(){
        return $this->belongsTo(Level::class);
    }
}

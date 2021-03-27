<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['name','category_id', 'level_id', 'teacher_id', 'description', 'course_path'];

    public function User(){
        return $this->belongsTo(User::class);
    }
}


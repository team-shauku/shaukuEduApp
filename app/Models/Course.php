<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['name','description','category_id','teacher_id', 'level_id', 'course_path'];

    public function User(){
        return $this->belongsTo(User::class);
    }
}


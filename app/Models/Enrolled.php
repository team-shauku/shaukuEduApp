<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolled extends Model
{
    use HasFactory;

    protected $fillable=[
        'studentname',
        'coursename',
        'category_id',
        'teacher_id',
        'level_id'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
}

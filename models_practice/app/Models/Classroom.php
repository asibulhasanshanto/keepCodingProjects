<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    public function assignments(){
        return $this->hasMany('App\Models\Assignment');
    }
    public function students()
    {
        return $this->belongsToMany(Student::class)->withTimestamps();
    }
    public function teacher(){
        return $this->hasone(Teacher::class);
    }
}

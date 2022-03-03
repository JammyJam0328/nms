<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function sectionstudent(){
        return $this->hasMany(SectionStudent::class);
    }
    
    public function studentparents()
    {
        return $this->hasMany(StudentParent::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BMI extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sectionstudent()
    {
        return $this->belongsTo(SectionStudent::class);
    }
}

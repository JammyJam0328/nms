<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function adviser()
    {
        return $this->belongsTo(Adviser::class);
    }

    public function sectionstudents()
    {
        return $this->hasMany(SectionStudent::class);
    }
}
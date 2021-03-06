<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MealPlan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function mealType()
    {
        return $this->belongsTo(MealType::class);
    }

    public function foods()
    {
        return $this->hasMany(Food::class);
    }

    
}
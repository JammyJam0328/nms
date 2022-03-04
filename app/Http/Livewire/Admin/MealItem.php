<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\MealPlan;
use App\Models\Food;

class MealItem extends Component
{
    public $meal;
    public $new_food;
    public $day;
    public function render()
    {
        return view('livewire.admin.meal-item');
    }

    public function addFood($id)
    {
        Food::create([
            'meal_plan_id'=>$id,
            'name'=>$this->new_food,
        ]);
        $this->new_food='';
    }
}
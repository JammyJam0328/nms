<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\MealPlan as StudentMeal;
use App\Models\Food;
class MealPlan extends Component
{
    public $filter='1';
    protected $listeners=['foodAdded'=>'$refresh'];
    public $new_food;
    public function addFood($id)
    {
        $this->validate([
            'new_food'=>'required',
      
        ]);
        Food::create([
            'meal_plan_id'=>$id,
            'name'=>$this->new_food,
        ]);
        $this->new_food='';
    }
    public function render()
    {
        return view('livewire.admin.meal-plan',[
            'meals'=>StudentMeal::where('meal_type_id',$this->filter)->with('foods')->get()->chunk(3),
        ]);
    }

    public function removeFood($id)
    {
        Food::find($id)->delete();
    }
    public $new_day;
    public function addDay()
    {
        $this->validate([
            'new_day'=>'required',
      
        ]);
        $meal_time=['breakfast','lunch','supper'];
        foreach($meal_time as $meal)
        {
            StudentMeal::create([
                'meal_type_id'=>$this->filter,
                'day'=>$this->new_day,
                'meal_time'=>$meal,
            ]);
        }

        $this->new_day='';
    }

  
}
<?php

namespace App\Http\Livewire;

// use App\Http\Livewire;
use Livewire\Component;
use App\Models\SectionStudent;
use App\Models\MealPlan;

class StudentDashboard extends Component
{
    public $status;

    public function mount()
    {
        $this->status = SectionStudent::where('student_id', auth()->user()->student->id)->first()->bmis->first()->status;
        // dd($this->status);
    }

    public function render()
    {
        return view('livewire.student-dashboard', [
            'bmis' => SectionStudent::where('student_id', auth()->user()->student->id)->first()->bmis,
            'meals' => $this->getMeal(),
        ]);
    }
    
    public function getMeal(){
      if ($this->status == 'Obese' && $this->status == 'Overweight') {
          return MealPlan::where('meal_type_id', 1)->get()->chunk(3);
      }else{
      return MealPlan::where('meal_type_id', 2)->get()->chunk(3);
    }
    }

    public function showMealPlan($status)
    {
        dd("sd");
    }
}

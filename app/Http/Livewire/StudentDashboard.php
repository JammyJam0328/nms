<?php

namespace App\Http\Livewire;

// use App\Http\Livewire;
use Livewire\Component;
use App\Models\SectionStudent;
use App\Models\MealPlan;
use App\Models\BMI;

use App\Models\Monitoring;
class StudentDashboard extends Component
{
    public $status;
    public $bmi_id;
    public function mount()
    {
        $this->status = SectionStudent::where('student_id', auth()->user()->student->id)->first()->bmis->first()->status;
        $student = SectionStudent::where('student_id', auth()->user()->student->id)->first();
        $this->bmi_id = BMI::where('section_student_id', $student->id)->latest()->first()->id;
    }

    public function render()
    {
       $section_student = SectionStudent::where('student_id', auth()->user()->student->id)->first();
        return view('livewire.student-dashboard', [
            'bmis' => $section_student->bmis()->latest()->get(),
            'meals' => $this->getMeal(),
            'dones'=> Monitoring::where('student_id', auth()->user()->student->id)->where('b_m_i_id',$this->bmi_id)->pluck('meal_plan_id')->toArray(),
        ]);
    }
    
    public function getMeal(){
        if ($this->status == 'Obese' && $this->status == 'Overweight') {
          return MealPlan::where('meal_type_id', 1)->get()->chunk(3);
        }else{
         return MealPlan::where('meal_type_id', 2)->get()->chunk(3);
        }
    }

    public function showMealPlan($status,$bmiId)
    {
       $this->status=$status;
        $this->bmi_id=$bmiId;
    }

    public function done($meal_id)
    {
        Monitoring::create([
            'student_id' => auth()->user()->student->id,
            'b_m_i_id' => $this->bmi_id,
            'meal_plan_id' => $meal_id,
        ]);
    }
}
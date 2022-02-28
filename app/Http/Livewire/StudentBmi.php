<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BMI;

class StudentBmi extends Component
{
    public $sectionstudentid;

    protected $listeners = ['addBMI' => '$refresh'];

    public function render()
    {
        return view('livewire.student-bmi',[
            'bmis' => BMI::where('section_student_id', $this->sectionstudentid)->paginate(10),
        ]);
    }
}

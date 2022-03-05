<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Section;
use App\Models\SectionStudent;
use App\Models\BMI;
use Carbon\Carbon;
use App\Models\Student;
class Report extends Component
{
    public $year;
    public $allyear;
    public $sections=[];
    public $section;
    public $month;
    public $report=[];
    // public $overall = [];
    
    public function getGradeSeven(){
       return   Section::where('grade_level','7th')->whereHas('sectionstudents',function($q){
            $q;
        })->get();
    }

    public function getGradeEight(){
       $students = Student::with(['sectionstudent.section' => function($q){
            $q->where('grade_level','8th')->where('school_year',$this->allyear);
        }])->get()->groupBy('sex');

        return $students;
     }

    public function getGradeNine(){ 
        return   Section::where('grade_level','9th')->get();
     }

    public function getGradeTen(){
        return   Section::where('grade_level','10th')->get();
     }

    public function getGradeEleven(){
        return   Section::where('grade_level','11th')->get();
     }

    public function getGradeTwelve(){
        return   Section::where('grade_level','12th')->get();
     }


    public function updatedYear()
    {
        
        $this->sections = Section::where('school_year', $this->year)->get();
    }

    public function render()
    {
        // dd();
        return view('livewire.report',[
            'reports' => $this->report,
            'seventh_grade' => $this->getGradeSeven(),
            'eigth_grade' => $this->getGradeEight(),
        ]);
    }

    public function generate(){
        $this->report = Bmi::whereMonth('created_at', '=', $this->month)->first()->whereHas('sectionstudent', function($query){
            $query->whereHas('section', function($k){
                $k->where('school_year', '=', $this->year)->where('name', '=', $this->section);
            });
           
        })->get();
        
    }
}

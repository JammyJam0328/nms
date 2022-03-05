<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Section;
use App\Models\SectionStudent;
use App\Models\BMI;
use Carbon\Carbon;
class Report extends Component
{
    public $year;
    public $sections=[];
    public $section;
    public $month;
    public $report=[];


    public function updatedYear()
    {
        
        $this->sections = Section::where('school_year', $this->year)->get();
    }

    public function render()
    {
        return view('livewire.report',[
            'reports' => $this->report,
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

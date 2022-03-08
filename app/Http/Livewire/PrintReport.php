<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BMI;
use App\Models\Section;

class PrintReport extends Component
{
    public $month;
    public $year;
    public $section;
    public $grade_level;

    
    public function mount($month,$year,$section){
        $this->month = $month;
        $this->year = $year;
        $this->section = $section;

        $this->grade_level = Section::where('name',$this->section)->where('school_year',$this->year)->first()->grade_level;
        // dd($this->grade_level);
    }

    

    public function render()
    {
        return view('livewire.print-report',[
            'reports' => Bmi::whereMonth('created_at', '=', $this->month)->first()->whereHas('sectionstudent', function($query){
                $query->whereHas('section', function($k){
                    $k->where('school_year', '=', $this->year)->where('name', '=', $this->section);
                });
            })->get(),
        ]);
    }
}

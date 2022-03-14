<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SectionStudent;

class ChartPrint extends Component
{
    public $type;


    public function mount()
    {
        $this->type = request('type');
        // dd($this->type);
    }

    public function render()
    {
        return view('livewire.chart-print',[

            //male
            'bminormal' => SectionStudent::whereHas('bmis', function($q){
                $q->where('status', '=', 'Normal');
            })->whereHas('student', function($query){
                $query->where('sex', 'Male');
            })->count(),
            'bmisevereunderweight' => SectionStudent::whereHas('bmis', function($q){
                $q->where('status', '=', 'Severely underweight');
            })->whereHas('student', function($query){
                $query->where('sex', 'Male');
            })->count(),
            'bmiunderweight' => SectionStudent::whereHas('bmis', function($q){
                $q->where('status', '=', 'Underweight');
            })->whereHas('student', function($query){
                $query->where('sex', 'Male');
            })->count(),
            'bmioverweight' => SectionStudent::whereHas('bmis', function($q){
                $q->where('status', '=', 'Overweight');
            })->whereHas('student', function($query){
                $query->where('sex', 'Male');
            })->count(),
            'bmiobese' => SectionStudent::whereHas('bmis', function($q){
                $q->where('status', '=', 'Obese');
            })->whereHas('student', function($query){
                $query->where('sex', 'Male');
            })->count(),

            //female
     
            'femaleoverweight' =>SectionStudent::whereHas('bmis', function($q){
                $q->where('status', '=', 'Overweight');
            })->whereHas('student', function($query){
                $query->where('sex', 'Female');
            })->count(),
            'femalesevereunderweight' => SectionStudent::whereHas('bmis', function($q){
                $q->where('status', '=', 'Severely underweight');
            })->whereHas('student', function($query){
                $query->where('sex','Female');
            })->count(),
            'femaleunderweight' => SectionStudent::whereHas('bmis', function($q){
                $q->where('status', '=', 'Underweight');
            })->whereHas('student', function($query){
                $query->where('sex','Female');
            })->count(),
            'femalenormal' => SectionStudent::whereHas('bmis', function($q){
                $q->where('status', '=', 'Normal');
            })->whereHas('student', function($query){
                $query->where('sex','Female');
            })->count(),
            'femaleobese' => SectionStudent::whereHas('bmis', function($q){
                $q->where('status', '=', 'Obese');
            })->whereHas('student', function($query){
                $query->where('sex','Female');
            })->count(),


            'maleseverelystudented' => SectionStudent::whereHas('bmis', function($q){
                $q->where('height_for_age', '=', 'Severely stunted');
            })->whereHas('student', function($query){
                $query->where('sex', 'Male');
            })->count(),
            'malestunted' => SectionStudent::whereHas('bmis', function($q){
                $q->where('height_for_age', '=', 'Stunted');
            })->whereHas('student', function($query){
                $query->where('sex', 'Male');
            })->count(),
            'malenormal' => SectionStudent::whereHas('bmis', function($q){
                $q->where('height_for_age', '=', 'Normal');
            })->whereHas('student', function($query){
                $query->where('sex', 'Male');
            })->count(),
            'maletall' => SectionStudent::whereHas('bmis', function($q){
                $q->where('height_for_age', '=', 'Tall');
            })->whereHas('student', function($query){
                $query->where('sex', 'Male');
            })->count(),
            

            //Female
            'femaleseverelystunted' => SectionStudent::whereHas('bmis', function($q){
                $q->where('height_for_age', '=', 'Severely stunted');
            })->whereHas('student', function($query){
                $query->where('sex', 'Female');
            })->count(),
            'femalestunted' => SectionStudent::whereHas('bmis', function($q){
                $q->where('height_for_age', '=', 'Stunted');
            })->whereHas('student', function($query){
                $query->where('sex', 'Female');
            })->count(),
            'femalenormal' => SectionStudent::whereHas('bmis', function($q){
                $q->where('height_for_age', '=', 'Normal');
            })->whereHas('student', function($query){
                $query->where('sex', 'Female');
            })->count(),
            'femaletall' => SectionStudent::whereHas('bmis', function($q){
                $q->where('height_for_age', '=', 'Tall');
            })->whereHas('student', function($query){
                $query->where('sex', 'Female');
            })->count(),
            
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SectionStudent;

class Charts extends Component
{
    public function render()
    {
        
        return view('livewire.charts',[

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
            
        ]);
    }
}

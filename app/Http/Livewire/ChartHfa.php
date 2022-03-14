<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SectionStudent;

class ChartHfa extends Component
{
    public function render()
    {
        return view('livewire.chart-hfa',[
            //male
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

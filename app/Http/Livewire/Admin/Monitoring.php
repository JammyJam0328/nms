<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Student;
use App\Models\SectionStudent;
use App\Models\BMI;
use App\Models\MealPlan;

use App\Models\Monitoring as MonitoringModel;

use Livewire\WithPagination;
class Monitoring extends Component
{
    use WithPagination;
    public $search='';
    public $action='showList';
    public $set_id;
    public $latest_bmi;
    public $meal_plans=[];
    public $dones=[];
    public $student;
    public function render()
    {
        return view('livewire.admin.monitoring',[
            'students' => Student::where('last_name','like','%'.$this->search.'%')->paginate(10),
        ]);
    }
}
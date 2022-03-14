<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentParent;
use App\Models\MealPlan;
use App\Models\SectionStudent;
use App\Models\BMI;
use App\Models\Monitoring;

class ParentController extends Controller
{
    public function index()
    {
        $parent = StudentParent::where('user_id', auth()->user()->id)->first();
        $student = Student::where('id',$parent->student_id)->first();
        $lates_section =SectionStudent::where('student_id', $student->id)->latest()->first();
        $latest_bmi = BMI::where('section_student_id', $lates_section->id)->latest()->first();
        return view('parent-pages.home',[
            'student'=>$student,
            'latest_bmi'=>$latest_bmi,
            'meal_plans'=>$this->getMeal($latest_bmi->status),
            'dones'=>$this->dones($student->id,$latest_bmi->id),
        ]);
    }

    protected function getMeal($status)
    {
        if ($status == 'Obese' && $status == 'Overweight') {
            return MealPlan::where('meal_type_id', 1)->get()->chunk(3);
        }else{
            return MealPlan::where('meal_type_id', 2)->get()->chunk(3);
        }
    }

    protected function dones($studet_id,$bmi_id)
    {
        return Monitoring::where('student_id', $studet_id)->where('b_m_i_id',$bmi_id)->pluck('meal_plan_id')->toArray();
    }
}
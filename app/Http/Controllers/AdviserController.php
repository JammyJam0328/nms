<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\StudentParent;
use App\Models\MealPlan;
use App\Models\SectionStudent;
use App\Models\BMI;
use App\Models\Monitoring;
class AdviserController extends Controller
{
    
    public function section($id){
        return view('adviser-pages.my-section',['id'=>$id]);
    }
    public function student($id){
        return view('adviser-pages.student-bmi',['id'=>$id]);
    }

    public function monitoring(Request $request)
    {
        $id = $request->id;
        $student = Student::where('id',$id)->first();
        $latest_section = SectionStudent::where('student_id',$id)->orderBy('id','desc')->first();
        $latest_bmi = BMI::where('section_student_id',$latest_section->id)->orderBy('id','desc')->first();
        return view('adviser-pages.monitoring',[
            'student'=>$student,
            'latest_bmi'=>$latest_bmi,
            'meal_plans'=>$this->getMeal($latest_bmi->status),
            'dones'=>$this->dones($id,$latest_bmi->id),
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
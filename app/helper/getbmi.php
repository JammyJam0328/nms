<?php


namespace App\Helper;
use App\Models\Student;
use App\Models\SectionStudent;
use App\Models\Section;
use App\Models\BMI;
Class GetBmi{
    public static function getGradeSeventh($shoolyear)
    {
         $students = Student::with(['sectionstudent'=>function($query){
            $query->with(['section'=>function($query){
                $query->where('grade_level','7th');
            }]);
         }])->get()->groupBy('sex');
         
         $femaleStudent = [...$students['Female']];
        $female_ids = [];

        foreach($femaleStudent as $key=>$student){
            $female_ids[]=$student->sectionstudent;
        }

        return $female_ids;
        
    }

    public static function getGradeEight($shoolyear)
    {
        return $students = Student::whereHas('sectionstudent',function($query){
            $query->whereHas('section',function($query){
                return $query->where('grade_level','8th');
            });
        })->get()->groupBy('sex');
    }


}
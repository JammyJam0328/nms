<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BMI;
use App\Models\SectionStudent;
use App\Helper\Heightage;
use App\Models\Student;
use Carbon\Carbon;

class StudentBmi extends Component
{
    public $height;
    public $weight;
    public $bmi_result;
    public $sectionstudentid;

    public function mount($id)
    {
        $this->sectionstudentid = $id;
        // dd($this->sectionstudentid);
        // dd($this->sectionstudentid);
        // dd(SectionStudent::where('id', $this->sectionstudentid)->first()->student->sex);
    }
   

    protected $listeners = ['addBMI' => '$refresh'];

    public function render()
    {
        return view('livewire.student-bmi',[
            'student' => SectionStudent::where('id',$this->sectionstudentid)->first(),
            'bmis' => BMI::where('section_student_id', $this->sectionstudentid)->paginate(10),
        ]);
    }

    public function showBMI(){
        
        $stud = SectionStudent::where('id',$this->sectionstudentid)->first();

        // dd($stud->student);
        $this->validate([
            'height' => 'required',
            'weight' => 'required',
        ]);
        // dd($hfa);
    
          $h = $this->height*$this->height;
        $w = $this->weight;
        $bmi = $w/$h;
        // dd($bmi);
        
       
        
        if ($bmi < 16) {
           $this->bmi_result = "Severely underweight";
        }elseif ($bmi >= 16 && $bmi < 18.5) {
            $this->bmi_result = "Underweight";
        }elseif ($bmi >= 18.5 && $bmi < 24.9) {
            $this->bmi_result = "Normal";
        }elseif ($bmi >= 25 && $bmi < 29.9) {
            $this->bmi_result = "Overweight";
        }elseif ($bmi >= 30 && $bmi < 35) {
            $this->bmi_result = "Obese";
        }

        // dd($this->bmi_result);

       

        if ($stud->student->sex == "Male") {
            $hfa = Heightage::getMale(Carbon::parse($stud->student->date_of_birth)->diff(Carbon::now())->format('%y'),Carbon::parse($stud->student->date_of_birth)->diff(Carbon::now())->format('%m'),$this->height*100);
        }else{
           $hfa = Heightage::getFemale(Carbon::parse($stud->student->date_of_birth)->diff(Carbon::now())->format('%y'),Carbon::parse($stud->student->date_of_birth)->diff(Carbon::now())->format('%m'),$this->height*100);
       
        }

        BMI::create([
            'height' => $this->height,
            'weight' => $this->weight,
            'bmi' => $bmi,
            'status' => $this->bmi_result,
            'section_student_id' => $this->sectionstudentid,
            'height_for_age' => $hfa,
        ]);
        $this->reset([
            'height' ,
            'weight' ,
        ]);
        
    }
}

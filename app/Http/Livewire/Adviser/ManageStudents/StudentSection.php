<?php

namespace App\Http\Livewire\Adviser\ManageStudents;

use Livewire\Component;
use App\Models\Student;
use Livewire\WithPagination;
use App\Models\Section;
use App\Models\SectionStudent;
use Carbon\Carbon;
use App\Models\BMI;
use App\Helper\Heightage;

class StudentSection extends Component
{
    use WithPagination;
    public $section_id;
    public $search = "";
    public $search_results = [];
    public $name;
    public $sex;
    public $height;
    public $weight;
    public $student_id;
    public $bmi_result_panel = false;
    
    public $bmi_result;

 

    public function render()
    {
        return view('livewire.adviser.manage-students.student-section',[
            'sectionstudents' => SectionStudent::where('section_id', $this->section_id)->paginate(10),
            'section' => Section::where('id', $this->section_id)->first(),
            'students' => $this->search_results,
        ]);
    }

    public function updatedSearch(){
      if ($this->search != "") {
        $this->search_results = Student::where('first_name', 'like', '%' . $this->search . '%')->orwhere('middle_name','like','%'. $this->search . '%')->orWhere('last_name', 'like', '%' . $this->search . '%')->get();
      }else{
          $this->search_results = [];
      }
    }

    public function add($id){
        $bod = Student::where('id',$id)->first()->date_of_birth;
        $current_age = Carbon::parse($bod)->diffInYears(Carbon::now());
        
        if (SectionStudent::where('section_id', $this->section_id)->where('student_id', '=', $id)->count() >= 1) {
            $this->dispatchBrowserEvent('notify',[
                'message'=>'The Student is in the list.',
                'type'=>'error',
                'action'=>'none'
            ]);
        }else{

            $stud = Student::where('id',$id)->first();
            $stud->update([
                'age' => $current_age,
            ]);

             $student = SectionStudent::create([
            'student_id' => $id,
            'section_id' => $this->section_id,
            'current_age' => $current_age,
        
        ]);
        }
       

    }

    public function openBMI($id){

        // dd();
        $data = SectionStudent::where('id', $id)->first();
       $this->student_id = $data->student->id;
        $this->name = $data->student->first_name." ".$data->student->last_name;
        // dd($this->name);
        $this->sex = $data->student->sex;
        $this->section_id = $id;

    }
    
    public function showBMI(){
        $stud = Student::where('id', $this->section_id)->first();
        // dd();
        // $hfa = Heightage::getFemale("17","6","174");   
        
        
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

        $this->validate([
            'height' => 'required',
            'weight' => 'required',
        ]);

        if ($stud->sex == "male") {
            $hfa = Heightage::getMale(Carbon::parse($stud->date_of_birth)->diff(Carbon::now())->format('%y'),Carbon::parse($stud->date_of_birth)->diff(Carbon::now())->format('%m'),$this->height*100);
        }else{
           $hfa = Heightage::getFemale(Carbon::parse($stud->date_of_birth)->diff(Carbon::now())->format('%y'),Carbon::parse($stud->date_of_birth)->diff(Carbon::now())->format('%m'),$this->height*100);
       
        }

        BMI::create([
            'height' => $this->height,
            'weight' => $this->weight,
            'bmi' => $bmi,
            'status' => $this->bmi_result,
            'section_student_id' => $this->section_id,
            'height_for_age' => $hfa,
        ]);
        $this->emit('addBMI');


        // dd('show');
      
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Section;
use App\Models\SectionStudent;
use App\Models\BMI;
use Carbon\Carbon;
use App\Models\Student;
class Report extends Component
{
    public $year;
    public $allyear;
    public $sections = [];
    // public $section;
    public $selected_section;
    public $month;
    public $allmonth;
    public $report=[];
  

    public function updatedYear()
    {
        $this->sections = Section::where('school_year', '=', $this->year)->get();
    }

    public function render()
    {
        return view('livewire.report',[
            'reports' => $this->report,
             //Grade 7
            'sevenMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level','7th');
                });
            })->count(),
            'sevenFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level','7th');
                });
            })->count(),

            //Grade 8

            'eightMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level','8th');
                });
            })->count(),
            'eightFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level','8th');
                });
            })->count(),

            //Grade 9
            'nineMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level','9th');
                });
            })->count(),
            'nineFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level','9th');
                });
            })->count(),

            //Grade 10
            'tenMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level','10th');
                });
            })->count(),
            'tenFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level','10th');
                });
            })->count(),

            //Grade 11
            'elevenMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level','11th');
                });
            })->count(),
            'elevenFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level','11th');
                });
            })->count(),

            //Grade 12
            'twelveMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level','12th');
                });
            })->count(),
            'twelveFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level','12th');
                });
            })->count(),




            //Grade 7 BMI Severely Underweight
            'sevenSUMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Severely underweight');
                });
            })->count(),
            'sevenSUFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Severely underweight');
                });
            })->count(),

            //Grade 8 BMI Severely Underweight
            'eightSUMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Severely underweight');
                });
            })->count(),
            'eightSUFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Severely underweight');
                });
            })->count(),

            //Grade 9 BMI Severely Underweight
            'nineSUMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Severely underweight');
                });
            })->count(),
            'nineSUFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Severely underweight');
                });
            })->count(),

            //Grade 10 BMI Severely Underweight
            'tenSUMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Severely underweight');
                });
            })->count(),
            'tenSUFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Severely underweight');
                });
            })->count(),

            //Grade 11 BMI Severely Underweight
            'elevenSUMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Severely underweight');
                });
            })->count(),
            'elevenSUFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Severely underweight');
                });
            })->count(),
            
            //Grade 12 BMI Severely Underweight
            'twelveSUMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Severely underweight');
                });
            })->count(),
            'twelveSUFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Severely underweight');
                });
            })->count(),

            //Grade 7 BMI Underweight
            'sevenUMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Underweight');
                });
            })->count(),
            'sevenUFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Underweight');
                });
            })->count(),

            //Grade 8 BMI Underweight
            'eightUMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Underweight');
                });
            })->count(),
            'eightUFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Underweight');
                });
            })->count(),

            //Grade 9 BMI Underweight
            'nineUMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Underweight');
                });
            })->count(),
            'nineUFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Underweight');
                });
            })->count(),

            //Grade 10 BMI Underweight
            'tenUMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Underweight');
                });
            })->count(),
            'tenUFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Underweight');
                });
            })->count(),
            
            //Grade 11 BMI Underweight
            'elevenUMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Underweight');
                });
            })->count(),
            'elevenUFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Underweight');
                });
            })->count(),

            //Grade 12 BMI Underweight
            'twelveUMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Underweight');
                });
            })->count(),
            'twelveUFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Underweight');
                });
            })->count(),

            //Grade 7 BMI Normal
            'sevenNMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Normal');
                });
            })->count(),
            'sevenNFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Normal');
                });
            })->count(),
            
            //Grade 8 BMI Normal
            'eightNMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Normal');
                });
            })->count(),
            'eightNFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Normal');
                });
            })->count(),

            //Grade 9 BMI Normal
            'nineNMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Normal');
                });
            })->count(),
            'nineNFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Normal');
                });
            })->count(),

            //Grade 10 BMI Normal
            'tenNMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Normal');
                });
            })->count(),
            'tenNFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Normal');
                });
            })->count(),

            //Grade 11 BMI Normal
            'elevenNMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Normal');
                });
            })->count(),
            'elevenNFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Normal');
                });
            })->count(),

            //Grade 12 BMI Normal
            'twelveNMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Normal');
                });
            })->count(),
            'twelveNFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Normal');
                });
            })->count(),

            //Grade 7 BMI Overweight
            'sevenOWMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Overweight');
                });
            })->count(),
            'sevenOWFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Overweight');
                });
            })->count(),

            //Grade 8 BMI Overweight
            'eightOWMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Overweight');
                });
            })->count(),
            'eightOWFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Overweight');
                });
            })->count(),

            //Grade 9 BMI Overweight
            'nineOWMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Overweight');
                });
            })->count(),
            'nineOWFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Overweight');
                });
            })->count(),

            //Grade 10 BMI Overweight
            'tenOWMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Overweight');
                });
            })->count(),
            'tenOWFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Overweight');
                });
            })->count(),

            //Grade 11 BMI Overweight
            'elevenOWMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Overweight');
                });
            })->count(),
            'elevenOWFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Overweight');
                });
            })->count(),

            //Grade 12 BMI Overweight
            'twelveOWMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Overweight');
                });
            })->count(),
            'twelveOWFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Overweight');
                });
            })->count(),
            
            //Grade 7 BMI Obese
            'sevenOMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Obese');
                });
            })->count(),
            'sevenOFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Obese');
                });
            })->count(),

            //Grade 8 BMI Obese
            'eightOMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Obese');
                });
            })->count(),
            'eightOFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Obese');
                });
            })->count(),

            //Grade 9 BMI Obese
            'nineOMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Obese');
                });
            })->count(),
            'nineOFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Obese');
                });
            })->count(),

            //Grade 10 BMI Obese
            'tenOMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Obese');
                });
            })->count(),
            'tenOFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Obese');
                });
            })->count(),

            //Grade 11 BMI Obese
            'elevenOMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Obese');
                });
            })->count(),
            'elevenOFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Obese');
                });
            })->count(),

            //Grade 12 BMI Obese
            'twelveOMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Obese');
                });
            })->count(),
            'twelveOFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('status', 'Obese');
                });
            })->count(),

            //Grade 7 HFA Severely stunted
            'sevenSSMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Severely stunted');
                });
            })->count(),
            'sevenSSFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Severely stunted');
                });
            })->count(),

            //Grade 8 HFA Severely stunted
            'eightSSMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Severely stunted');
                });
            })->count(),
            'eightSSFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Severely stunted');
                });
            })->count(),

            //Grade 9 HFA Severely stunted
            'nineSSMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Severely stunted');
                });
            })->count(),
            'nineSSFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Severely stunted');
                });
            })->count(),

            //Grade 10 HFA Severely stunted
            'tenSSMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Severely stunted');
                });
            })->count(),
            'tenSSFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Severely stunted');
                });
            })->count(),

            //Grade 11 HFA Severely stunted
            'elevenSSMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Severely stunted');
                });
            })->count(),
            'elevenSSFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Severely stunted');
                });
            })->count(),

            //Grade 12 HFA Severely stunted
            'twelveSSMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Severely stunted');
                });
            })->count(),
            'twelveSSFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Severely stunted');
                });
            })->count(),

            //Grade 7 HFA Stunted
            'sevenSMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Stunted');
                });
            })->count(),
            'sevenSFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Stunted');
                });
            })->count(),
            
            //Grade 8 HFA Stunted
            'eightSMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Stunted');
                });
            })->count(),
            'eightSFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Stunted');
                });
            })->count(),

            //Grade 9 HFA Stunted
            'nineSMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Stunted');
                });
            })->count(),
            'nineSFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Stunted');
                });
            })->count(),

            //Grade 10 HFA Stunted
            'tenSMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Stunted');
                });
            })->count(),
            'tenSFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Stunted');
                });
            })->count(),

            //Grade 11 HFA Stunted
            'elevenSMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Stunted');
                });
            })->count(),
            'elevenSFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Stunted');
                });
            })->count(),

            //Grade 12 HFA Stunted
            'twelveSMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Stunted');
                });
            })->count(),
            'twelveSFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Stunted');
                });
            })->count(),

            //Grade 7 HFA Normal
            'sevenNOMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Normal');
                });
            })->count(),
            'sevenNOFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Normal');
                });
            })->count(),

            //Grade 8 HFA Normal
            'eightNOMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Normal');
                });
            })->count(),
            'eightNOFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Normal');
                });
            })->count(),

            //Grade 9 HFA Normal
            'nineNOMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Normal');
                });
            })->count(),
            'nineNOFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Normal');
                });
            })->count(),

            //Grade 10 HFA Normal
            'tenNOMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Normal');
                });
            })->count(),
            'tenNOFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Normal');
                });
            })->count(),

            //Grade 11 HFA Normal
            'elevenNOMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Normal');
                });
            })->count(),
            'elevenNOFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Normal');
                });
            })->count(),

            //Grade 12 HFA Normal
            'twelveNOMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Normal');
                });
            })->count(),
            'twelveNOFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Normal');
                });
            })->count(),

            //Grade 7 HFA Tall
            'sevenTMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Tall');
                });
            })->count(),
            'sevenTFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '7th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Tall');
                });
            })->count(),

            //Grade 8 HFA Tall
            'eightTMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Tall');
                });
            })->count(),
            'eightTFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '8th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Tall');
                });
            })->count(),

            //Grade 9 HFA Tall
            'nineTMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Tall');
                });
            })->count(),
            'nineTFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '9th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Tall');
                });
            })->count(),

            //Grade 10 HFA Tall
            'tenTMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Tall');
                });
            })->count(),
            'tenTFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '10th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Tall');
                });
            })->count(),

            //Grade 11 HFA Tall
            'elevenTMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Tall');
                });
            })->count(),
            'elevenTFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '11th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Tall');
                });
            })->count(),

            //Grade 12 HFA Tall
            'twelveTMale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Male')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Tall');
                });
            })->count(),
            'twelveTFemale' => Student::whereHas('sectionstudent', function($query){
                $query->whereHas('student',function($q){
                    $q->where('sex', 'Female')->whereMonth('created_at', '=', $this->allmonth);
                })->whereHas('section', function($s){
                    $s->where('school_year', $this->allyear)->where('grade_level', '12th');
                })->whereHas('bmis', function($k){
                    $k->where('height_for_age', 'Tall');
                });
            })->count(),
        ]);
    }

    public function generate(){
        $this->report = Bmi::whereMonth('created_at', '=', $this->month)->first()->whereHas('sectionstudent', function($query){
            $query->whereHas('section', function($k){
                $k->where('school_year', '=', $this->year)->where('name', '=', $this->selected_section);
            });  
        })->get();
       
        
    }
}

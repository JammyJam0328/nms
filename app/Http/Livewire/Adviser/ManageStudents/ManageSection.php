<?php

namespace App\Http\Livewire\Adviser\ManageStudents;

use Livewire\Component;
use App\Models\Section;
class ManageSection extends Component
{
    public $grade_levels=[];
    public $school_years=[];
    public function render()
    {
        return view('livewire.adviser.manage-students.manage-section',[
            'sections'=>Section::where('adviser_id',auth()->user()->adviser->id)->get(),
        ]);
    }
    public function mount()
    {
        // generate school years like 2020-2021 from 2020 to 2040
        for($i=2020;$i<=2040;$i++){
            $this->school_years[]=$i.'-'.($i+1);
        }
        // generate grade levels like 7th, 8th, 9th, 10th, 11th, 12th
        $this->grade_levels=[
            '7th',
            '8th',
            '9th',
            '10th',
            '11th',
            '12th',
        ];
    }

    public $section_name='';
    public $grade_level='';
    public $school_year='';

    public function createSection()
    {
        $this->validate([
            'section_name'=>'required',
            'grade_level'=>'required',
            'school_year'=>'required',
        ]);

        Section::create([
            'name'=>$this->section_name,
            'grade_level'=>$this->grade_level,
            'school_year'=>$this->school_year,
            'adviser_id'=>auth()->user()->adviser->id,
        ]);

       $this->reset([
           'section_name',
           'grade_level',
           'school_year',
       ]);

       $this->dispatchBrowserEvent('notify',[
           'message'=>'Section successfully created!',
           'type'=>'success',
           'action'=>'none'
       ]);
        
        
    }

    public $new_section_name='';
    public $new_grade_level='';
    public $new_school_year='';
    public $edit_section;
    public function editSection($id)
    {
        $this->edit_section = Section::find($id);
        $this->new_section_name = $this->edit_section->name;
        $this->new_grade_level = $this->edit_section->grade_level;
        $this->new_school_year = $this->edit_section->school_year;
        $this->dispatchBrowserEvent('start-editing');
    }

    public function updateSection()
    {
        $this->validate([
            'new_section_name'=>'required',
            'new_grade_level'=>'required',
            'new_school_year'=>'required',
        ]);

        $this->edit_section->update([
            'name'=>$this->new_section_name,
            'grade_level'=>$this->new_grade_level,
            'school_year'=>$this->new_school_year,
        ]);

        $this->reset([
            'new_section_name',
            'new_grade_level',
            'new_school_year',
        ]);

        $this->dispatchBrowserEvent('notify',[
            'message'=>'Section successfully updated!',
            'type'=>'success',
            'action'=>'none'
        ]);
    }

    public function deleteSection($id)
    {
        $section = Section::find($id);
        $section->delete();

        $this->dispatchBrowserEvent('notify',[
            'message'=>'Section successfully deleted!',
            'type'=>'success',
            'action'=>'none'
        ]);
    }
}
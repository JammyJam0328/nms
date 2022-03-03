<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Student;
use App\Models\StudentParent;
use App\Models\User;

class ManageParents extends Component
{
    public $searchTerm='';
    public function render()
    {
        return view('livewire.admin.manage-parents',[
            'students' => Student::where('last_name','like','%'.$this->searchTerm.'%')->get()
        ]);
    }

    public $set_id='';
    public function getStudentProperty()
    {
        return Student::find($this->set_id);
    }
    public function setStudent($id)
    {
        $this->set_id=$id;
        $this->searchTerm='';
    }

    public $first_name='';
    public $middle_name='';
    public $last_name='';
    public $contact_number='';
    public $relationship='mother';

    public function addParent()
    {
        $this->validate([
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'last_name' => 'required',
            'contact_number' => 'required',
            'relationship' => 'required',
        ]);
        $parent = StudentParent::create([
            'student_id'=>$this->student->id,
            'first_name'=>$this->first_name,
            'middle_name'=>$this->middle_name,
            'last_name'=>$this->last_name,
            'contact_number'=>$this->contact_number,
            'relationship'=>$this->relationship
        ]);
        $email = str_replace(' ', '', $this->first_name.$this->middle_name.$this->last_name).'@gmail.com';
        User::create([
            'name'=>$this->first_name.' '.$this->last_name,
            'email'=>$email,
            'password'=>bcrypt($this->contact_number),
            'role'=>'parent',
        ]);

        $this->reset([
            'first_name',
            'middle_name',
            'last_name',
            'contact_number',
            'relationship',
        ]);

        $this->dispatchBrowserEvent('alert',[
            'message'=>'Parent Added Successfully',
            'type'=>'success',
            'nextAction'=>''
        ]);
    }
}
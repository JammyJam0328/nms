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
    
        $email = str_replace(' ', '', $this->first_name.$this->middle_name.$this->last_name).'@gmail.com';
        $user = User::create([
            'name'=>$this->first_name.' '.$this->last_name,
            'email'=>$email,
            'password'=>bcrypt($this->contact_number),
            'role'=>'parent',
        ]);

        StudentParent::create([
            'user_id'=>$user->id,
            'student_id'=>$this->student->id,
            'first_name'=>$this->first_name,
            'middle_name'=>$this->middle_name,
            'last_name'=>$this->last_name,
            'contact_number'=>$this->contact_number,
            'relationship'=>$this->relationship
        ]);

        $this->reset([
            'first_name',
            'middle_name',
            'last_name',
            'contact_number',
            'relationship',
        ]);

        $this->dispatchBrowserEvent('notify',[
            'message'=>'Parent Added Successfully',
            'type'=>'success',
            'nextAction'=>''
        ]);
    }
    public $edit_id;
    public function getParentProperty()
    {
        return StudentParent::find($this->edit_id);
    }

    public $new_first_name;
    public $new_middle_name;
    public $new_last_name;
    public $new_contact_number;
    public $new_relationship;
    public function edit($id)
    {
        $this->edit_id=$id;
        $this->new_first_name=$this->parent->first_name;
        $this->new_middle_name=$this->parent->middle_name;
        $this->new_last_name=$this->parent->last_name;
        $this->new_contact_number=$this->parent->contact_number;
        $this->new_relationship=$this->parent->relationship;
        $this->dispatchBrowserEvent('start-editing');
    }

    public function update()
    {
        $this->validate([
            'new_first_name' => 'required',
            'new_middle_name' => 'nullable',
            'new_last_name' => 'required',
            'new_contact_number' => 'required',
            'new_relationship' => 'required',
        ]);

        $this->parent->update([
            'first_name'=>$this->new_first_name,
            'middle_name'=>$this->new_middle_name,
            'last_name'=>$this->new_last_name,
            'contact_number'=>$this->new_contact_number,
            'relationship'=>$this->new_relationship
        ]);

        $this->reset([
            'new_first_name',
            'new_middle_name',
            'new_last_name',
            'new_contact_number',
            'new_relationship',
        ]);

        $this->dispatchBrowserEvent('notify',[
            'message'=>'Parent Updated Successfully',
            'type'=>'success',
            'nextAction'=>''
        ]);
    }

    public function delete($id)
    {
        $parent = StudentParent::find($id);
        $parent->user()->delete();
        $parent->delete();
       
        $this->dispatchBrowserEvent('notify',[
            'message'=>'Parent Deleted Successfully',
            'type'=>'success',
            'nextAction'=>''
        ]);
    }
}
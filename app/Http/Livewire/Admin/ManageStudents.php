<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Student;
// use livewire pagination
use Livewire\WithPagination;
class ManageStudents extends Component
{
    use WithPagination;
    public $searchTerm='';
    public function render()
    {
        return view('livewire.admin.manage-students',[
            'students'=>Student::where('last_name','like','%'.$this->searchTerm.'%')->with('user')->paginate(10)
        ]);
    }
    public $first_name;
    public $middle_name;
    public $last_name;
    public $age;
    public $date_of_birth;
    public $address;
    public $contact_number;
    public $sex;
    public function createStudent()
    {
        $this->validate([
            'first_name'=>'required',
            'middle_name'=>'nullable',
            'last_name'=>'required',
            'age'=>'required',
            'date_of_birth'=>'required',
            'address'=>'required',
            'contact_number'=>'required',
            'sex'=>'required|in:Male,Female'
        ]);
        $email = str_replace(' ', '', $this->first_name.$this->middle_name.$this->last_name).'@gmail.com';

        $account = User::create([
            'role'=>'student',
            'name' => $this->first_name.' '.$this->middle_name.' '.$this->last_name,
            'email'=>strtolower($email),
            'password'=>bcrypt('password12345'),
        ]);
        Student::create([
            'user_id'=>$account->id,
            'first_name'=>$this->first_name,
            'middle_name'=>$this->middle_name,
            'last_name'=>$this->last_name,
            'age'=>$this->age,
            'date_of_birth'=>$this->date_of_birth,
            'address'=>$this->address,
            'contact_number'=>$this->contact_number,
            'sex'=>$this->sex,
        ]);

        $this->reset([
            'first_name',
            'middle_name',
            'last_name',
            'age',
            'date_of_birth',
            'address',
            'contact_number',
            'sex'
        ]);
        $this->dispatchBrowserEvent('notify',[
            'type'=>'success',
            'message'=>'Student created successfully',
            'nextAction'=>'none',
        ]);
    }
     public $new_first_name;
    public $new_middle_name;
    public $new_last_name;
    public $new_age;
    public $new_date_of_birth;
    public $new_address;
    public $new_contact_number;
    public $new_sex;
    public $edit_student;
    public function edit($id)
    {
        $this->edit_student = Student::find($id);
        $this->new_first_name = $this->edit_student->first_name;   
        $this->new_middle_name = $this->edit_student->middle_name;   
        $this->new_last_name = $this->edit_student->last_name;   
        $this->new_age = $this->edit_student->age;   
        $this->new_date_of_birth = $this->edit_student->date_of_birth;   
        $this->new_address = $this->edit_student->address;   
        $this->new_contact_number = $this->edit_student->contact_number;   
        $this->new_sex = $this->edit_student->sex;   
        $this->dispatchBrowserEvent('start-editing');
    }

    public function updateStudent()
    {

        $this->validate([
            'new_first_name'=>'required',
            'new_middle_name'=>'nullable',
            'new_last_name'=>'required',
            'new_age'=>'required',
            'new_date_of_birth'=>'required',
            'new_address'=>'required',
            'new_contact_number'=>'required',
            'new_sex'=>'required|in:Male,Female'
        ]);
        
        $this->edit_student->update([
            'first_name'=>$this->new_first_name,
            'middle_name'=>$this->new_middle_name,
            'last_name'=>$this->new_last_name,
            'age'=>$this->new_age,
            'date_of_birth'=>$this->new_date_of_birth,
            'address'=>$this->new_address,
            'contact_number'=>$this->new_contact_number,
            'sex'=>$this->new_sex,
        ]);

        $this->dispatchBrowserEvent('notify',[
            'type'=>'success',
            'message'=>'Student updated successfully',
            'nextAction'=>'none',
        ]);
    }

    public function deleteStudent($id)
    {
        $student = Student::find($id);
        $student->delete();
        $student->user->delete();
        $this->dispatchBrowserEvent('notify',[
            'type'=>'success',
            'message'=>'Student deleted successfully',
            'nextAction'=>'none',
        ]);
    }
    
}
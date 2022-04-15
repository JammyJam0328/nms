<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentProfile extends Component
{
    public $first_name;
    public $last_name;
    public $middle_name;
    public $sex;
    public $date_of_birth;
    public $age;
    public $address;
    public $contact_number;


    public function mount(){
        $data = auth()->user()->student;
        $this->first_name = $data->first_name;
        $this->last_name = $data->last_name;
        $this->middle_name = $data->middle_name;
        $this->sex = $data->sex;
        $this->date_of_birth = $data->date_of_birth;
        $this->age = $data->age;
        $this->address = $data->address;
        $this->contact_number = $data->contact_number;
    }

    public function render()
    {
        return view('livewire.student-profile');
    }

    public function updateStudent(){
        $data = auth()->user()->student;
        $data->update([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'middle_name' => $this->middle_name,
            'sex' => $this->sex,
            'date_of_birth' => $this->date_of_birth,
            'age' => $this->age,
            'address' => $this->address,
            'contact_number' => $this->contact_number,
        ]);
        $this->dispatchBrowserEvent('notify',[
            'message'=>'Profile updated Successfully',
            'type'=>'success',
            'action'=>'none'
        ]);
    }
}

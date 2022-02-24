<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Adviser;
// use livewire pagination
use Livewire\WithPagination;
class Accounts extends Component
{
    use WithPagination;
    public $searchTerm='';

    public function render()
    {
        return view('livewire.admin.accounts',[
            'advisers'=>Adviser::where('last_name','like','%'.$this->searchTerm.'%')->paginate(10)
        ]);
    }

    public $first_name;
    public $middle_name;
    public $last_name;
    public $sex;
    public $address;
    public $contact_number;

    public function create()
    {
        $this->validate([
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'sex'=>'required|in:Male,Female',
            'address'=>'required',
            'contact_number'=>'required',
        ]);
        $email = str_replace(' ', '', $this->first_name.$this->middle_name.$this->last_name).'@gmail.com';
            $account = User::create([
                'role'=>'adviser',
                'name'=>$this->first_name.' '.$this->middle_name.' '.$this->last_name,
                'email'=>strtolower($email),
                'password'=>bcrypt('password12345'),
            ]);
        Adviser::create([
            'user_id'=>$account->id,
            'first_name'=>$this->first_name,
            'middle_name'=>$this->middle_name,
            'last_name'=>$this->last_name,
            'sex'=>$this->sex,
            'address'=>$this->address,
            'contact_number'=>$this->contact_number,
        ]);
        

            $this->first_name='';
            $this->middle_name='';
            $this->last_name='';
            $this->sex='';
            $this->address='';
            $this->contact_number='';

        $this->dispatchBrowserEvent('notify', [
            'type'=>'success',
            'message'=>'Account successfully created!',
            'nextAction'=>'none'
        ]);

    }

    public $update_first_name;
    public $update_middle_name;
    public $update_last_name;
    public $update_sex;
    public $update_address;
    public $update_contact_number;
    public $update_account;
    public function edit($id)
    {
        $this->update_account = Adviser::find($id);
        $this->update_first_name = $this->update_account->first_name;
        $this->update_middle_name = $this->update_account->middle_name;
        $this->update_last_name = $this->update_account->last_name;
        $this->update_sex = $this->update_account->sex;
        $this->update_address = $this->update_account->address;
        $this->update_contact_number = $this->update_account->contact_number;
        $this->dispatchBrowserEvent('start-editing');
    }

    public function update()
    {
        $this->validate([
            'update_first_name'=>'required',
            'update_middle_name'=>'nullable',
            'update_last_name'=>'required',
            'update_sex'=>'required|in:Male,Female',
            'update_address'=>'required',
            'update_contact_number'=>'required',
        ]);
        $this->update_account->update([
            'first_name'=>$this->update_first_name,
            'middle_name'=>$this->update_middle_name,
            'last_name'=>$this->update_last_name,
            'sex'=>$this->update_sex,
            'address'=>$this->update_address,
            'contact_number'=>$this->update_contact_number,
        ]);


        $this->update_first_name='';
        $this->update_middle_name='';
        $this->update_last_name='';
        $this->update_sex='';
        $this->update_address='';
        $this->update_contact_number='';
         $this->dispatchBrowserEvent('notify', [
            'type'=>'success',
            'message'=>'Account successfully updated!',
            'nextAction'=>'none'
        ]);
    }

    public function delete($id)
    {
        $adviser = Adviser::find($id);
        $adviser->delete();
        $use = User::where('adviser_id',$id)->first();
        $use->delete();
        $this->dispatchBrowserEvent('notify', [
            'type'=>'success',
            'message'=>'Account successfully deleted!',
            'nextAction'=>'none'
        ]);
    }

    public function generateAccount($id)
    {
        $adviser = Adviser::find($id);
        $adviser->update([
            'hasAccount'=>true
        ]);
        $email = str_replace(' ', '', $this->first_name.$this->middle_name.$this->last_name).'@gmail.com';
        User::create([
            'adviser_id'=>$adviser->id,
            'role'=>'adviser',
            'name'=>$adviser->first_name.' '.$adviser->middle_name.' '.$adviser->last_name,
            'email'=>strtolower($email),
            'password'=>bcrypt('password12345'),
        ]);

        $this->dispatchBrowserEvent('notify', [
            'type'=>'success',
            'message'=>'Account successfully generated!',
            'nextAction'=>'none'
        ]);
    }


}
<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

use App\Livewire\Forms\UserForm;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class UserManagement extends Component{

    use WithPagination;
    public $isOpen=false;
    public $search,$selectroles;
    public UserForm $form;
    use Actions;

    public function render(){
        $users=User::where('name','like','%'.$this->search.'%')->latest('id')->paginate(6);
        $roles=Role::all();
        return view('livewire.admin.user-management',compact('users','roles'));
    }

    public function create(){
        $this->isOpen=true;
        $this->form->resetForm();
        $this->resetValidation();
    }

    public function store(){
        $this->validate();

        if(!isset($this->form->user->id)){
            $user=User::create($this->form->all());
            $user->roles()->attach(array_keys($this->selectroles,'true'));
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro creado'
            );
        }else{
            $user=User::find($this->form->user->id);
            $user->roles()->sync(array_keys($this->selectroles,'true'));
            $user->update($this->form->all());
            $this->dialog()->success(
                $title = 'Mensaje del sistema',
                $description = 'Registro actualizado'
            );
        }
        $this->reset(['isOpen']);
    }

    public function edit(User $user){
        //$this->form=$period->toArray();
        $this->form->setForm($user);
        $this->isOpen=true;
        $this->selectroles=array_fill_keys($user->roles->pluck('id')->toArray(), true);
    }

    public function destroy(User $user){
        $user->delete();
    }
}

<?php

namespace App\Http\Livewire\Pengguna;

use App\Models\Role;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use AuthorizesRequests;
    use WithFileUploads;

    public $roles;
    public $roleArr;

    public $email;
    public $username;
    public $password;
    public $role;
    public $avatar;
    public $isUploading = false;

    public function mount(Role $role)
    {
        $this->roles = $role;
        $this->roleArr = Role::pluck('name', 'id');
    }

    protected function rules()
    {
        return [
            'avatar'   => 'image|max:1024',
            'username' => 'required',
            'password' => ['required', 'min:8'],
            'email'    => ['required', 'email', 'not_in:'.auth()->user()->email],
            'role'     => 'required',
        ];
    }

    public function updatedAvatar()
    {
        $this->validate([
            'avatar' => 'image|max:1024',
        ]);
    }

    public function saveAvatar()
    {
        $this->avatar->store('avatar');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function storeUserGeneral()
    {
        $validatedData = $this->validate();
        User::create($validatedData);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function storeUserInfo()
    {
        $validatedData = $this->validate(
            ['email' => 'required|email'],
            [
                'email.required' => 'The :attribute cannot be empty.',
                'email.email'    => 'The :attribute format is not valid.',
            ],
            ['email' => 'Email Address']
        );

        UserInfo::create($validatedData);
    }

    public function render()
    {
//      $roles = Role::pluck('name','id');
        return view('livewire.pengguna.create');
    }
}

<?php

namespace App\Http\Livewire\Pengguna;

use App\Models\Role;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class Create extends Component
{
    use AuthorizesRequests;

    //  use WithFileUploads;

    public $roles;
    public $roleArr;

    public $permissions;
    public string $selectedRoles = '';
    public array $selectedPermission = [];
    public bool $isChecked = false;
    // list of permission actions
    public array $permissionCrud = ['read', 'write', 'create', 'delete'];
    public string $permissionModel = 'user';

    public $email;
    public $username;
    public $password;
    public $role;
    public $avatar;

    public bool $updateMode = false;
    public bool $isUploading = false;

    public function mount()
    {
        $this->roles = Role::where('name', '!=', 'superadmin')->get();
        $this->roleArr = Role::pluck('name', 'id');
    }

    protected function rules()
    {
        return [
            //      'avatar' => 'image|max:1024',
            'username'    => 'required',
            'password'    => ['required', 'min:8'],
            'email'       => ['required', 'email', 'not_in:'.auth()->user()->email],
            'role'        => 'required',
            'permissions' => 'required',
        ];
    }

    //  public function updatedAvatar()
    //  {
//    $this->validate([
//                      'avatar' => 'image|max:1024',
//                    ]);
    //  }

    //  public function updatePermission()
    //  {
//
    //  }

    //  public function saveAvatar()
    //  {
//    $this->avatar->store('avatar');
    //  }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        $user = User::create([
            'username' => $this->username,
            'password' => \Hash::make($this->password),
            'email'    => $this->email,
            'nik'      => '343534534534534',
            'is_admin' => false,
            'status'   => true,
        ]);
        $user->role($this->selectedRoles)->syncPermissions($this->selectedPermission);

        return $user;
    }

    //  public function storeUserGeneral()
    //  {
//    $validatedData = $this->validate();
//    dd($validatedData);
//    $user = User::create($validatedData);
//    $role = Role::where('name',$user->role);
//    $user->role->syncPermissions($this->selectedPermission);
    //  }

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
        return view('livewire.pengguna.create');
    }
}

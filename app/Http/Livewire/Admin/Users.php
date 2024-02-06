<?php

namespace App\Http\Livewire\Admin;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Users extends Component
{
    use withPagination;
    
    public $user;
    public $role;
    public $confirmItemDeletion = false;
    public $confirmItemAdd = false;
   
    protected $rules = [
        'user.name' => 'required', 
        'user.email' => 'required', 
        'user.password' => 'nullable|min:6',
        'role' => 'nullable', 
    ];

     /**
     * The livewire render function
     *
     * @return void
     */
    public function render()
    {
      $users = User::paginate(25);
      $roles = Role::where('name', '!=', 'business')->get();
      return view('livewire.admin.users.index', compact('users', 'roles'));
    }

    /**
     * store post
     *
     * @return void
     */

    public function store()
    {
        $this->validate();
        if(isset($this->user->id)){
            $this->user->save();
            $this->user->roles()->sync($this->role);
            session()->flash('message', 'Update successful!');
        }else{
            $user = User::create($this->user);
            $user->roles()->sync($this->role);
            session()->flash('message', 'User added successfully!');
        }
        $this->resetErrorBag(['user']);
        $this->confirmItemAdd = false;
        return redirect()->route('admin.users');
    }

    /**
     * display edit modal (route - model binding)
     */
    public function showEditModal(User $user)
    {
        $this->user = $user;
        $this->role = $user->roles->pluck('id')->first();
        $this->confirmItemAdd = true;
    }

    /**
     * Display confim post deletion modal.
     */

    public function showDeleteModal($id)
    {
        $this->confirmItemDeletion = $id;
    }

     
     /**
      * Delete post item
      *
      * @param  mixed $id
      * @return void
      */
     public function destroy(User $user)
    {
        $user->delete();
        $this->confirmItemDeletion = false;
        session()->flash('message', 'Deleted successfully.');
        $this->user = null;
        return redirect()->route('admin.users');
    }


      /**
     * close  modal and reset the form 
     */
    public function closeModal()
    {
        $this->confirmItemAdd = false;
        $this->reset(['user']);
    }
    
}

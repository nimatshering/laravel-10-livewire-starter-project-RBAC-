<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Admin\Address;

class Addresses extends Component
{
    public $address;
    public $confirmItemDeletion = false;
    public $confirmItemAdd = false;

    protected $rules = [
        'address.location' => 'required', 
        'address.telephone' => 'required', 
        'address.email' => 'required', 
        'address.opening_hrs' => 'required', 
    ];

    /**
     * Render page
     *
     * @return void
     */
    public function render()
    {
        $addresses= Address::orderBy('created_at','asc')->get();
        return view('livewire.admin.address.index', compact('addresses'));
    }


     /**
     * store  data
     *
     * @return void
     */

     public function store()
    {
        $this->validate();
        if(isset($this->address->id)){
            $this->address->save();
            session()->flash('message', 'Address successfully updated!');
        }else{
            Address::create([
            'location' =>   $this->address['location'], 
            'telephone' => $this->address['telephone'],
            'email' => $this->address['email'],
            'opening_hrs' => $this->address['opening_hrs'],
            ]);
            session()->flash('message', 'Address successfully created!');
         }
        $this->reset(['address']);
        $this->confirmItemAdd = false;
        return redirect()->route('admin.address');
    }

   /**
     * display edit modal (route - model binding)
     */
    public function showEditModal(Address $address)
    {
        $this->address = $address;
        $this->confirmItemAdd = true;
    }

    /**
     * Display confim deletion modal.
     */

    public function showDeleteModal($id)
    {
        $this->confirmItemDeletion = $id;
    }

     
     /**
      * Delete  item
      *
      * @param  mixed $id
      * @return void
      */
     public function destroy(Address $address)
    {
        $address->delete();
        $this->confirmItemDeletion = false;
        session()->flash('message', 'Address deleted successfully.');
        $this->reset(['address']);
        return redirect()->route('admin.address');
    }

     /**
     * close  modal and reset the form 
     */
    public function closeModal()
    {
        $this->confirmItemAdd = false;
        $this->reset(['address']);
    }
}

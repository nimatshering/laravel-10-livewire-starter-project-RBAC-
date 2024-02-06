<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Admin\Link;

class Usefullinks extends Component
{
    public $link;

    public $confirmItemDeletion = false;
    public $confirmItemAdd = false;
   
    protected $rules = [
        'link.name' => 'required', 
        'link.url' => 'required', 
    ];


     /**
     * The livewire render function
     *
     * @return void
     */
    public function render()
    {
      $links = Link::paginate(10);
      return view('livewire.admin.links.index', compact('links'));
    }


    /**
     * store post
     *
     * @return void
     */
    public function store()
    {
        $this->validate();
        if(isset($this->link->id)){
            $this->link->save();
            session()->flash('message', 'Link updated successfully!');
        }else{
          Link::create([
            'name' =>   $this->link['name'], 
            'url' =>   $this->link['url'], 
            ]);
            session()->flash('message', 'Link added successfully!');
            }
        $this->resetErrorBag(['link']);
        $this->link = null;
        $this->confirmItemAdd = false;
        return redirect()->route('admin.usefullinks');
    }

    /**
     * display edit modal (route - model binding)
     */
    public function showEditModal(Link $link)
    {
        $this->link = $link;
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
     public function destroy(Link $link)
    {
        $link->delete();
        $this->confirmItemDeletion = false;
        session()->flash('message', 'Link deleted successfully.');
        $this->link = null;
        return redirect()->route('admin.usefullinks');
    }

      /**
     * close  modal and reset the form 
     */
    public function closeModal()
    {
        $this->confirmItemAdd = false;
        $this->reset(['link']);
    }
}

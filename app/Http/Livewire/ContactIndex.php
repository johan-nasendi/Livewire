<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Contact;

class ContactIndex extends Component
{
    use WithPagination;
    public $paginate = 2;
    public $search;
    public $statusUpdate = false;

    protected $listeners = [
        'contactStored' => 'handleStores',
        'contactUpadated' => 'handleUpdates'
    ];

    protected $queryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        return view('livewire.contact-index',[
            'contacts' => $this->search == null ?
            Contact::orderBy('id','DESC')->paginate($this->paginate) :
            Contact::latest()->where('name', 'like', '%' . $this->search . '%')->paginate($this->paginate)
        ]);
    }

    public function getContact($id)
    {
        $this->statusUpdate = true;
        $contact = Contact::find($id);
        $this->emit('getContact', $contact);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Contact::find($id);
            $data->delete();
            session()->flash('message','Contact was deleted!');
        }
    }
    public function handleStores($contact)
    {
        // dd($contact);
        session()->flash('message','Contact ' . $contact['name'] . ' was stored!');
    }
    public function handleUpdates($contact)
    {
        // dd($contact);
        session()->flash('message','Contact ' . $contact['name'] . ' was updated!');
    }
}

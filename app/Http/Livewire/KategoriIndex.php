<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Kategori;
use Livewire\WithPagination;

class KategoriIndex extends Component
{
    use WithPagination;

    public $paginate = 2;
    public $search;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.kategori.kategori-index', [
            'kategori' => $this->search === null ?
            Kategori::latest()->paginate($this->paginate) :
            Kategori::latest()->where('nama', 'like', '%' . $this->search .'%')->paginate($this->paginate)
        ])->extends('layout.template');
    }
    public function destroy($id)
    {
        if ($id) {
            $data = Kategori::find($id);
            $data->delete();

            session()->flash('message', 'Kategori was delete!');
        }
    }
}

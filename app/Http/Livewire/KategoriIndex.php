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
    public $id_kategori;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        // print_r(Kategori::latest()->paginate($this->paginate));
        return view('livewire.kategori.kategori-index', [
            'kategori' => $this->search === null ?
                Kategori::latest()->paginate($this->paginate) :
                Kategori::latest()->where('nama_produk', 'like', '%' . $this->search . '%')->paginate($this->paginate)
        ])->extends('layout.template');
    }
    public function destroy($id_kategori)
    {
        if ($id_kategori) {
            Kategori::where('id_kategori', $id_kategori)->delete();

            session()->flash('message', 'Kategori was delete!');
        }
    }
}

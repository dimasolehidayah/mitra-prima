<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kategori;
use App\Models\Setting;
use Livewire\WithPagination;

class KategoriIndex extends Component
{
    use WithPagination;

    public $paginate = 5;
    public $search;
    public $id_kategori;

    protected $paginationTheme = 'bootstrap';

    public function destroy($id_kategori)
    {
        if ($id_kategori) {
        Kategori::where('id_kategori', $id_kategori)->delete();

            session()->flash('pesan', 'Kategori was delete!');
        }
    }
    public function render()
    {
        $this->setting = Setting::latest()->get();

        return view('livewire.kategori.kategori-index', [
            'kategori' => $this->search === null ?
                Kategori::latest()->paginate($this->paginate) :
                Kategori::latest()->where('nama_produk', 'like', '%' . $this->search . '%')->paginate($this->paginate)
        ])->extends('layout.template',['setting' => $this->setting]);
    }
}

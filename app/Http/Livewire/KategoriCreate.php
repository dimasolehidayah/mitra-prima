<?php

namespace App\Http\Livewire;

use App\Models\Kategori;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class KategoriCreate extends Component
{
    public $nama_produk;
    public $deskripsi;

    public function render()
    {
        return view('livewire.kategori.kategori-create')
            ->extends('layout.template');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $rules = [
        'nama_produk' => 'required',
        'deskripsi' => 'required',

    ];
    protected $messages = [
        'nama_produk.required' => 'wajib diisi !!',
        'deskripsi.required' => 'wajib diisi !!',
    ];

    public function store()
    {

        $this->validate();

        Kategori::create([
            'nama_produk' => $this->nama_produk,
            'deskripsi' => $this->deskripsi,
            'created_by' => Auth::user()->id,
            'update_by' => Auth::user()->id,
        ]);
        session()->flash('message', 'Kategori was Store!');
        redirect('/kategori');
    }
}

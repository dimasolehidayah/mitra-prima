<?php

namespace App\Http\Livewire;

use App\Models\Kategori;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class KategoriCreate extends Component
{
    public $nama;
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
        'nama' => 'required',
        'deskripsi' => 'required',

    ];
    protected $messages = [
        'nama.required' => 'nama required',
        'deskripsi.required' => 'deskripsi required',
    ];

    public function store()
    {

         $this->validate();

        Kategori::create([
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'created_by' => Auth::user()->id,
            'update_by' => Auth::user()->id,
        ]);
        session()->flash('message', 'Kategori was Store!');
        redirect('/kategori');
    }
}

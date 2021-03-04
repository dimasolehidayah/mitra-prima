<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class ProdukCreate extends Component
{
    use WithFileUploads;

    public $foto;
    public $id_kategori;
    public $no_hp;

    public function render()
    {
        return view('livewire.produk.produk-create')
            ->extends('layout.template');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $rules = [
        'foto' => 'image|mimes:png,jpg,bmp,jpeg',
        'id_kategori' => 'required',
        'no_hp' => 'required|max:20',
    ];
    protected $messages = [
        'foto.image' => 'foto required',
        'foto.mimes' => 'foto extension jpg,png,jpeg,bmp',
        'id_kategori.required' => 'id kategori required',
        'no_hp.required' => 'no_handphone required',
        'no_hp.max' => 'max 20 character',
    ];

    public function store()
    {

        $data = $this->validate();

        $data['foto'] = md5($this->foto . microtime()) . '.' . $this->foto->extension();
        $this->foto->storeAs('photos', $data['foto']);

        Produk::create([
            'foto' => $data['foto'],
            'id_kategori' => $this->id_kategori,
            'no_hp' => $this->no_hp,
            'created_by' => Auth::user()->id,
            'update_by' => Auth::user()->id,
        ]);
        session()->flash('message', 'Produk was Store!');
        redirect('/produk');
    }
}

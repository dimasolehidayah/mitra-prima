<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class ProdukCreate extends Component
{
    use WithFileUploads;

    public $nama_produk;
    public $deskripsi;
    public $foto;
    public $id_kategori;
    public $no_hp;

    public function render()
    {
        return view('livewire.produk-create')
            ->extends('layout.template');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $rules = [

        'nama_produk' => 'required|min:2',
        'deskripsi' => 'required',
        'foto' => 'image|mimes:png,jpg,bmp,jpeg',
        'id_kategori' => 'required',
        'no_hp' => 'required',
    ];
    protected $messages = [
        'nama_produk.required' => 'nama required',
        'nama_produk.min' => 'min 2 character',
        'deskripsi.required' => 'deskripsi required',
        'foto.image' => 'foto required',
        'foto.mimes' => 'foto extension jpg,png,jpeg,bmp',
        'id_kategori.required' => 'id kategori required'

    ];

    public function store()
    {

        $data = $this->validate();

        $data['foto'] = md5($this->foto . microtime()) . '.' . $this->foto->extension();
        $this->foto->storeAs('photos', $data['foto']);

        Produk::create([
            'nama_produk' => $this->nama_produk,
            'deskripsi' => $this->deskripsi,
            'foto' => $data['foto'],
            'id_kategori' => $this->id_kategori,
            'no_hp' => $this->no_hp,
            'created_by' => Auth::user()->id,
            'update_by' => Auth::user()->id,
        ]);
        redirect('/produk');
    }
}

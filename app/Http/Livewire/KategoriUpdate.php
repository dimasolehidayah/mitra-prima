<?php

namespace App\Http\Livewire;

use App\Models\Kategori;
use Livewire\Component;

class KategoriUpdate extends Component
{

    public $id_kategori;
    public $nama;
    public $deskripsi;
    public $kategoriId;

    public function render()
    {
        return view('livewire.kategori.kategori-update')
            ->extends('layout.template');
    }

    protected $rules = [

        'id_kategori' => 'required',
        'nama' => 'required',
        'deskripsi' => 'required',

    ];
    protected $messages = [
        'id_kategori.required' => 'id kategori required',
        'nama.required' => 'nama required',
        'deskripsi.required' => 'deskripsi required',
    ];
    public function mount(Kategori $kategori)
    {
        // echo "<pre>";
        // print_r($produk->first()->id);
        $kategori = $kategori->first();
        if ($kategori) {
            $this->kategoriId = $kategori['id'];
            $this->id_kategori = $kategori['id_kategori'];
            $this->nama = $kategori['nama'];
            $this->deskripsi = $kategori['deskripsi'];
        }
    }
    public function update()
    {

        if ($this->kategoriId) {
            $kategori = Kategori::find($this->kategoriId);
            $this->validate();

            $kategori->update();
            session()->flash('message', 'Kategori was Updated!');
            redirect('/kategori', $kategori);
        }
    }
}

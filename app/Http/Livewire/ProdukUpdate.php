<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use App\Models\Kategori;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProdukUpdate extends Component
{
    use WithFileUploads;


    public $produkId;
    public $foto;
    public $fotolama;
    public $id_kategori;
    public $harga;
    public $stok;


    public function render()
    {
        return view('livewire.produk.produk-update',
        [ 'produk' => Kategori::latest()->get()
        ])->extends('layout.template');
    }


    protected $rules = [
        'id_kategori' => 'required',
        'stok' => 'required',
        'harga' => 'required',
    ];
    protected $messages = [
        'deskripsi.required' => 'deskripsi required',
        'id_kategori.required' => 'id kategori required',
        'stok' => 'stok required',
        'harga' => 'harga required',
    ];
    public function mount($id)
    {
        // echo "<pre>";
        // print_r($produk->first()->id);
        $produk = Produk::where('id', $id)->first();
        if ($produk) {
            $this->produkId = $produk['id'];
            $this->fotolama = $produk['foto'];
            $this->id_kategori = $produk['id_kategori'];
            $this->stok = $produk['stok'];
            $this->harga = $produk['harga'];
        }
    }
    public function update()
    {

        if ($this->produkId) {
            $produk = Produk::find($this->produkId);
            $data = $this->validate();
            $data['foto'] = $this->fotolama;

            if ($this->foto) {
                unlink(public_path('storage/photos/') . '/' . $data['foto']);
                $data = $this->validate([
                    'foto' => 'image|mimes:png,jpg,bmp,jpeg,svg',
                ]);

                $data['foto'] = md5($this->foto . microtime()) . '.' . $this->foto->extension();
                $this->foto->storeAs('photos', $data['foto']);
            }
            $produk->update($data);
            session()->flash('message', 'Produk was Updated!');
            redirect('/produk', $produk);
        }
    }
}

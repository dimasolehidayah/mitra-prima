<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProdukUpdate extends Component
{
    use WithFileUploads;


    public $produkId;
    public $foto;
    public $fotolama;
    public $id_kategori;
    public $no_hp;
    public $harga;
    public $stok;


    public function render()
    {
        return view('livewire.produk.produk-update')
            ->extends('layout.template');
    }


    protected $rules = [
        'id_kategori' => 'required',
        'no_hp' => 'required|max:20',
        'stok' => 'required',
        'harga' => 'required',
    ];
    protected $messages = [
        'deskripsi.required' => 'deskripsi required',
        'id_kategori.required' => 'id kategori required',
        'no_hp.required' => 'no_handphone required',
        'no_hp.max' => 'max 20 character',
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
            $this->no_hp = $produk['no_hp'];
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
                    'foto' => 'image|mimes:png,jpg,bmp,jpeg',
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

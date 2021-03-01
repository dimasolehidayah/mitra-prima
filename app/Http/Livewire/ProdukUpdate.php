<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProdukUpdate extends Component
{
    use WithFileUploads;

    public $nama_produk;
    public $deskripsi;
    public $produkId;
    public $foto;
    public $fotolama;
    public $id_kategori;
    public $no_hp;

    protected $listeners =  [
        'showProduk'
    ];
    public function render()
    {
        return view('livewire.produk-update')
            ->extends('layout.template');
    }

    public function showProduk($produk)
    {
        $this->produkId = $produk['id'];
        $this->nama_produk = $produk['nama_produk'];
        $this->deskripsi = $produk['deskripsi'];
        $this->fotolama = $produk['foto'];
        $this->id_kategori = $produk['id_kategori'];
        $this->no_hp = $produk['no_hp'];
    }


    protected $rules = [

        'nama_produk' => 'required|min:2',
        'deskripsi' => 'required',
        'id_kategori' => 'required',
        'no_hp' => 'required|max:20',
    ];
    protected $messages = [
        'nama_produk.required' => 'nama required',
        'nama_produk.min' => 'min 2 character',
        'deskripsi.required' => 'deskripsi required',
        'id_kategori.required' => 'id kategori required',
        'no_hp.required' => 'no_handphone required',
        'no_hp.max' => 'max 20 character',

    ];
    public function mount(Produk $produk)
    {
        // echo "<pre>";
        // print_r($produk->first()->id);
        $produk = $produk->first();
        if ($produk) {
            $this->produkId = $produk['id'];
            $this->nama_produk = $produk['nama_produk'];
            $this->deskripsi = $produk['deskripsi'];
            $this->fotolama = $produk['foto'];
            $this->id_kategori = $produk['id_kategori'];
            $this->no_hp = $produk['no_hp'];
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
            redirect('/produk', $produk);
        }
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Setting;

class Detail extends Component
{
    public $data;
    public $foto;
    public $fotolama;
    public $id_kategori;
    public $harga;
    public $stok;
    public $produkId, $setting;

    public function mount($id)
    {
       $this->data = Produk::where('id', $id)->latest('produk.created_at')->leftJoin('kategori', 'kategori.id_kategori', '=', 'produk.id_kategori')->first();

    }
    public function render()
    {
        $kategori =  Kategori::orderBy('id_kategori','ASC')->first();
        $this->setting = Setting::latest()->get();

        return view('livewire.detail')->extends('layout.frontend', ['setting' => $this->setting]);
    }
}

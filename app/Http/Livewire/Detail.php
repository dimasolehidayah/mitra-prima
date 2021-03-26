<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produk;
use App\Models\Kategori;

class Detail extends Component
{
    public $data;
    public $foto;
    public $fotolama;
    public $id_kategori;
    public $harga;
    public $stok;
    public $produkId;

    // public function mount($id)
    // {
    //    $this->data = Produk::find($id);

    // }
    public function render()
    {
        $produks =  Produk::orderBy('id','ASC')->first();
        $kategori =  Kategori::orderBy('id_kategori','ASC')->first();

        return view('livewire.detail',[
            'produk' => $produks,
            'kategori' => $kategori
        ])->extends('detail');
    }
}

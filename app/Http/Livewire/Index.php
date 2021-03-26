<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Setting;
use App\Models\Produk;
use App\Models\Slider;

class Index extends Component
{
  
    public function render()
    {
        return view('livewire.index',[
            'setting' => Setting::latest()->get(),
            'produk' => Produk::latest('produk.created_at')->leftJoin('kategori', 'kategori.id_kategori', '=', 'produk.id_kategori')->get(),
            'slider' => Slider::latest()->get(),
        ])->extends('index');
    }

}

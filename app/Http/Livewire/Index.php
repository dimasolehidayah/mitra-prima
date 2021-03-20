<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Setting;
use App\Models\Produk;
use App\Models\Slider;
use App\Models\Kategori;

class Index extends Component
{
    public function render()
    {
        return view('livewire.index',[
            'setting' => Setting::latest()->get(),
            'produk' => Produk::latest('Produk.created_at')->leftJoin('Kategori', 'Kategori.id_kategori', '=', 'Produk.id_kategori')->get(),
            'slider' => Slider::latest()->get(),
        ])->extends('index');
    }
}

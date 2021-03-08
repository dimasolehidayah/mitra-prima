<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Slider;
use App\Models\User;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard',[
           'produk' => Produk::get()->count(),
           'kategori' => Kategori::get()->count(),
           'slider' => Slider::get()->count(),
           'user' => User::get()->count(),
        ])
            ->extends('layout.template');
    }
}

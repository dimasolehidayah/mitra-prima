<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Slider;
use App\Models\User;
use App\Models\Setting;

class Dashboard extends Component
{
    public function render()
    {
        $this->setting = Setting::latest()->get();

        return view('livewire.dashboard',[
           'produk' => Produk::get()->count(),
           'kategori' => Kategori::get()->count(),
           'slider' => Slider::get()->count(),
           'user' => User::get()->count(),
        ])
        ->extends('layout.template',['setting' => $this->setting]);
    }
}

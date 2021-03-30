<?php

namespace App\Http\Livewire;

use App\Models\Kategori;
use App\Models\Setting;
use Livewire\Component;

class KategoriUpdate extends Component
{

    public $kategoriId;
    public $nama_produk;
    public $deskripsi;

    protected $rules = [
        'nama_produk' => 'required',
        'deskripsi' => 'required',

    ];
    protected $messages = [
        'nama_produk.required' => 'nama required',
        'deskripsi.required' => 'deskripsi required',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function mount($id_kategori)
    {
        // echo "<pre>";
        // echo $id;
        // print_r($kategori->first()->id);
        $kategori = Kategori::where('id_kategori', $id_kategori)->first();
        if ($kategori) {
            $this->kategoriId = $kategori['id_kategori'];
            $this->nama_produk = $kategori['nama_produk'];
            $this->deskripsi = $kategori['deskripsi'];
        }
    }
    public function update()
    {

        $this->kategoriId;
        $kategori = Kategori::where('id_kategori',$this->kategoriId);
        $data = $this->validate();

        $kategori->update($data);
        session()->flash('message', 'Kategori was Updated!');
        redirect('/kategori', $kategori);

    }
    public function render()
    {
        $this->setting = Setting::latest()->get();

        return view('livewire.kategori.kategori-update')
        ->extends('layout.template',['setting' => $this->setting]);
    }
}

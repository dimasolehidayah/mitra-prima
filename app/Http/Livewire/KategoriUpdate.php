<?php

namespace App\Http\Livewire;

use App\Models\Kategori;
use Livewire\Component;

class KategoriUpdate extends Component
{

    public $kategoriId;
    public $nama;
    public $deskripsi;


    public function render()
    {
        return view('livewire.kategori.kategori-update')
            ->extends('layout.template');
    }

    protected $rules = [
        'nama' => 'required',
        'deskripsi' => 'required',

    ];
    protected $messages = [
        'nama.required' => 'nama required',
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
            $this->nama = $kategori['nama'];
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
}

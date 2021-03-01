<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Produk;

class ProdukIndex extends Component
{
    public function render()
    {
        $produk = Produk::all();

        return view('livewire.produk-index', ['produk' => $produk])
            ->extends('layout.template');
    }
    public function destroy($id)
    {
        if ($id) {
            $data = Produk::find($id);
            if ($data->foto <> "") {
                unlink(public_path('storage/photos/') . '/' . $data->foto);
            }
            $data->delete();

            session()->flash('message', 'Contact was delete!');
        }
    }
    public function getProduk($id)
    {
        $produk = Produk::find($id);
        // print_r($produk->get());
        // echo "Berhasil";
        $this->emit('showProduk', $produk);
    }
}

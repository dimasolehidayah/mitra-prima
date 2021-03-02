<?php

namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Produk;
use Livewire\WithPagination;

class ProdukIndex extends Component
{
    use WithPagination;

    public $paginate = 2;
    public $search;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.produk-index', [
            'produk' => $this->search === null ?
            Produk::latest()->paginate($this->paginate) :
            Produk::latest()->where('nama_produk', 'like', '%' . $this->search .'%')->paginate($this->paginate)
        ])->extends('layout.template');
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

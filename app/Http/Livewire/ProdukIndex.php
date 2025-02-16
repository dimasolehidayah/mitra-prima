<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produk;
use App\Models\Setting;
use Livewire\WithPagination;

class ProdukIndex extends Component
{
    use WithPagination;

    public $paginate = 5;
    public $search;

    protected $paginationTheme = 'bootstrap';

    public function destroy($id)
    {
        if ($id) {
            $data = Produk::find($id);
            if ($data->foto <> "") {
                unlink(public_path('storage/photos/') . '/' . $data->foto);
            }
            $data->delete();

            session()->flash('pesan', 'Produk was delete!');
        }
    }
    public function getProduk($id)
    {
        $produk = Produk::find($id);
        // print_r($produk->get());
        // echo "Berhasil";
        $this->emit('showProduk', $produk);
    }
    public function render()
    {
        $this->setting = Setting::latest()->get();

        return view('livewire.produk.produk-index', [
            'produk' => $this->search === null ?
            Produk::leftJoin('kategori', 'kategori.id_kategori', '=', 'produk.id_kategori')->paginate($this->paginate) :
            Produk::latest()->where('nama_produk', 'like', '%' . $this->search .'%')->paginate($this->paginate)
        ])->extends('layout.template',['setting' => $this->setting]);
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Slider;
use Livewire\WithFileUploads;

class SliderUpdate extends Component
{
    use WithFileUploads;

    public $judul;
    public $gambar;
    public $gambarlama;
    public $sliderId;

    public function render()
    {
        return view('livewire.slider.slider-update')
        ->extends('layout.template');
    }

    public function mount($id)
    {
        // echo "<pre>";
        // print_r($produk->first()->id);
        $slider = Slider::where('id', $id)->first();
        if ($slider) {
            $this->sliderId = $slider['id'];
            $this->judul = $slider['judul'];
            $this->gambarlama = $slider['gambar'];
        }
    }
    protected $rules = [

        'judul' => 'required|min:2',
    ];
    protected $messages = [
        'judul.required' => 'nama required',
        'judul.min' => 'min 2 character',
    ];
    public function update()
    {

        if ($this->sliderId) {
            $slider = Slider::find($this->sliderId);
            $data = $this->validate();
            $data['gambar'] = $this->gambarlama;

            if ($this->gambar) {
                unlink(public_path('storage/photos/') . '/' . $data['gambar']);
                $data = $this->validate([
                    'gambar' => 'image|mimes:png,jpg,bmp,jpeg',
                ]);

                $data['gambar'] = md5($this->gambar . microtime()) . '.' . $this->gambar->extension();
                $this->gambar->storeAs('photos', $data['gambar']);
            }
            $slider->update($data);
            session()->flash('message', 'Contact was Updated!');
            redirect('/slider', $slider);
        }
    }
}

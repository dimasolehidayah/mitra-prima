<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;

class SliderCreate extends Component
{
    use WithFileUploads;

    public $judul;
    public $gambar;

    public function render()
    {
        return view('livewire.slider.slider-create')
        ->extends('layout.template');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $rules = [

        'judul' => 'required|min:2',
        'gambar' => 'image|mimes:png,jpg,bmp,jpeg',
    ];
    protected $messages = [
        'judul.required' => 'nama required',
        'judul.min' => 'min 2 character',
        'gambar.image' => 'foto required',
        'gambar.mimes' => 'foto extension jpg,png,jpeg,bmp',
    ];

    public function store()
    {

        $data = $this->validate();

        $data['gambar'] = md5($this->gambar . microtime()) . '.' . $this->gambar->extension();
        $this->gambar->storeAs('photos', $data['gambar']);

        Slider::create([
            'judul' => $this->judul,
            'gambar' => $data['gambar'],
            'update_by' => Auth::user()->id,
        ]);
        session()->flash('message', 'Slider was Store!');
        redirect('/slider');
    }
}

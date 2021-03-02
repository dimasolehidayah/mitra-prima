<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Slider;

class SliderIndex extends Component
{
    public function render()
    {
        return view('livewire.slider.slider-index',[
            'slider' => Slider::latest()->get()
        ])->extends('layout.template');
    }
    public function destroy($id)
    {
        if ($id) {
            $data = Slider::find($id);
            if ($data->gambar <> "") {
                unlink(public_path('storage/photos/') . '/' . $data->gambar);
            }
            $data->delete();

            session()->flash('message', 'Slider was delete!');
        }
    }
}

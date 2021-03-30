<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Slider;
use App\Models\Setting;

class SliderIndex extends Component
{
    public function destroy($id)
    {
        if ($id) {
            $data = Slider::find($id);
            if ($data->gambar <> "") {
                unlink(public_path('storage/photos/') . '/' . $data->gambar);
            }
            $data->delete();

            session()->flash('pesan', 'Slider was delete!');
        }
    }
    public function render()
    {
        $this->setting = Setting::latest()->get();

        return view('livewire.slider.slider-index',[
            'slider' => Slider::latest()->get()
        ])->extends('layout.template',['setting' => $this->setting]);
    }
}

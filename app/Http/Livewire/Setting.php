<?php

namespace App\Http\Livewire;


use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Setting as ModelSetting;

class Setting extends Component
{
    use WithFileUploads;

    public $nama_website;
    public $deskripsi;
    public $logo;
    public $email;
    public $no_hp;
    public $alamat;

    protected $rules = [
        'nama_website' => 'required|min:2',
        'deskripsi' => 'required',
        'logo' => 'image|mimes:png,jpg,bmp,jpeg',
        'email' => 'required',
        'no_hp' => 'required|max:20',
        'alamat' => 'required',
    ];
    protected $messages = [
        'nama_website.required' => 'nama required',
        'nama_website.min' => 'min 2 character',
        'deskripsi.required' => 'deskripsi required',
        'logo.image' => 'foto required',
        'logo.mimes' => 'foto extension jpg,png,jpeg,bmp',
        'email.required' => 'id kategori required',
        'no_hp.required' => 'no_handphone required',
        'no_hp.max' => 'max 20 character',
        'alamat' => 'alamat required',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function store()
    {
        $data = $this->validate();

        $data['logo'] = md5($this->logo . microtime()) . '.' . $this->logo->extension();
        $this->logo->storeAs('photos', $data['logo']);

        ModelSetting::create([
            'nama_website' => $this->nama_website,
            'deskripsi' => $this->deskripsi,
            'logo' => $data['logo'],
            'email' => $this->email,
            'no_hp' => $this->no_hp,
            'alamat' => $this->alamat,
            'created_by' => Auth::user()->id,
            'update_by' => Auth::user()->id,
        ]);
        session()->flash('message', 'Produk was Store!');
        redirect('/setting');
    }
    public function render()
    {
        return view('livewire.setting')
            ->extends('layout.template');
    }
}

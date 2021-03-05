<?php

namespace App\Http\Livewire;


use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Setting as ModelSetting;
use Illuminate\Support\Facades\DB;

class Setting extends Component
{
    use WithFileUploads;

    public $nama_website;
    public $deskripsi;
    public $logo;
    public $email;
    public $no_hp;
    public $alamat;
    public $logolama;

    protected $rules = [
        'nama_website' => 'required|min:2',
        'deskripsi' => 'required',
        // 'logo' => 'image|mimes:png,jpg,bmp,jpeg',
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
    public function mount()
    {
        $setting = ModelSetting::latest()->first();
        if ($setting) {
            $this->nama_website = $setting->nama_website;
            $this->deskripsi = $setting->deskripsi;
            $this->no_hp = $setting->no_hp;
            $this->alamat = $setting->alamat;
            $this->email = $setting->email;
            $this->logolama = $setting->logo;
        }
    }
    public function store()
    {
        // $data = $this->validate();
        $count = ModelSetting::latest()->count();
        // print_r($count);
        if ($count > 0) {

            $this->update();
        } else {
            // $data = $this->validate();
            if ($this->logo) {
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
            } else {
                $this->rules['logo'] = 'image|mimes:png,jpg,bmp,jpeg';
                $this->validate();
            }
        }

        session()->flash('message', 'Produk was Store!');
        redirect('/setting');
    }
    public function update()
    {

        // $this->kategoriId;
        $setting = ModelSetting::latest()->first();
        $data = $this->validate();
        $data['logo'] = $this->logolama;
        if ($this->logo) {
            unlink(public_path('storage/photos/') . '/' . $data['logo']);
            $data['logo'] = md5($this->logo . microtime()) . '.' . $this->logo->extension();
            $this->logo->storeAs('photos', $data['logo']);
        }
        $setting->update($data);
        session()->flash('message', 'Kategori was Updated!');
        redirect('/kategori', $setting);
    }
    public function render()
    {
        $count = ModelSetting::latest()->count();
        $data = ModelSetting::latest()->first();
        // print_r($count);
        if ($count > 0) {
            // $this->update();
        } else {
            $rules['logo'] = 'image|mimes:png,jpg,bmp,jpeg';
        }
        return view('livewire.setting', [
            'data' => $data
            ])
            ->extends('layout.template');
    }
}

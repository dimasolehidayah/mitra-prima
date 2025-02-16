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
    public $jam;
    public $no_hp;
    public $fb;
    public $instagram;
    public $youtube;
    public $pesan;
    public $alamat;
    public $logolama;

    protected $rules = [
        'nama_website' => 'required|min:2',
        'deskripsi' => 'required',
        // 'logo' => 'image|mimes:png,jpg,bmp,jpeg',
        'email' => 'required',
        'jam' => 'required',
        'fb' => 'required',
        'instagram' => 'required',
        'youtube' => 'required',
        'no_hp' => 'required|max:20',
        'alamat' => 'required',
        'pesan' => 'required',
    ];
    protected $messages = [
        'nama_website.required' => 'wajib diisi !!',
        'nama_website.min' => 'min 2 character',
        'deskripsi.required' => 'wajib diisi !!',
        'logo.image' => 'wajib diisi !!',
        'logo.mimes' => 'logo extension jpg,png,jpeg,bmp',
        'email.required' => 'wajib diisi !!',
        'no_hp.required' => 'wajib diisi !!',
        // 'no_hp.max' => 'max 13 character',
        // 'no_hp.min' => 'max 11 character',
        'alamat.required' => 'wajib diisi !!',
        'fb.required' => 'wajib diisi !!',
        'instagram.required' => 'wajib diisi !!',
        'youtube.required' => 'wajib diisi !!',
        'jam.required' => 'wajib diisi !!',
        'pesan.required' => 'wajib diisi !!',
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
            $this->jam = $setting->jam;
            $this->fb = $setting->fb;
            $this->instagram = $setting->instagram;
            $this->youtube = $setting->youtube;
            $this->pesan = $setting->pesan;
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
                    'jam' => $this->jam,
                    'fb' => $this->fb,
                    'instagram' => $this->instagram,
                    'youtube' => $this->youtube,
                    'pesan' => $this->pesan,
                    'created_by' => Auth::user()->id,
                    'update_by' => Auth::user()->id,
                ]);
            } else {
                $this->rules['logo'] = 'image|mimes:png,jpg,bmp,jpeg';
                $this->validate();
            }
        }

        session()->flash('message', 'Setting was Store!');
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
        session()->flash('message', 'Setting was Updated!');
        redirect('/kategori', $setting);
    }
    public function render()
    {
        // $count = ModelSetting::latest()->count();
        $data = ModelSetting::latest()->first();
        $this->setting = ModelSetting::latest()->get();
        // // print_r($count);
        // if ($count > 0) {
        //     // $this->update();
        // } else {
        //     $rules['logo'] = 'image|mimes:png,jpg,bmp,jpeg';
        // }
        return view('livewire.setting', [
            'data' => $data
            ])
            ->extends('layout.template',['setting' => $this->setting]);
    }
}

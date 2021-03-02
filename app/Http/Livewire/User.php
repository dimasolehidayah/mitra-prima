<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User as TabelUser;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $user;
    public $ids;
    public $name;
    public $email;
    public $password;
    public $search;

    protected $rules = [
        'name' => 'required|min:4',
        'email' => 'required|email',
        'password' => 'required|min:4',
    ];

    protected $messages = [
        'name.required' => 'nama tidak boleh kosong',
        'name.min' => 'minimal 4 karakter',
        'email.required' => 'email tidak boleh kosong',
        'email.email' => 'bukan format email',
        // 'email.unique' => 'email sudah terdaftar',
        'password.required' => 'password tidak boleh kosong',
        'password.min' => 'password min 4 karakter'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function ClearForm()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function SimpanData()
    {
        $this->validate();
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ];
        TabelUser::insert($data);
        session()->flash('pesan', 'Data Berhasil Disimpan !!!');
        $this->ClearForm();
        $this->emit('adduser');

        redirect('user');
    }

    public function DetailData($id)
    {
        $user = TabelUser::where('id', $id)->first();

        $this->ids = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
    }

    public function UpdateData()
    {
        $validasi = $this->validate();
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ];
        TabelUser::where('id', $this->ids)->update($data);
        session()->flash('pesan', 'Data Berhasil Disimpan !!!');
        $this->ClearForm();
        $this->emit('edituser');

        redirect('user');
    }

    public function DeleteData()
    {
        TabelUser::where('id', $this->ids)->delete();
        session()->flash('hapus', 'Data Berhasil Dihapus !!!');
        $this->emit('deleteuser'); //id pada modal

        redirect('user');
    }

    public function render()
    {
        $users = TabelUser::where('name', 'like', '%' . $this->search . '%')
            ->orwhere('email', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'DESC')
            ->paginate(10);
        return view('livewire.user', ['users' => $users])
            ->extends('layout.template')
            ->section('content');
    }
}

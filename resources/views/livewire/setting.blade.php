@section('title','Pengaturan')
@section('header','Pengaturan')
@section('kotak')

<div class="row">
    <div class="col-xl-4">
        <!-- Profile picture card-->
        <div class="card">
            <div class="card-header">
                <h3>Pengaturan Logo</h3>
            </div>
            <div class="card-body text-center">
                <!-- Profile picture image-->
                @if ($data == null)
                <img class="img-account-profile mb-4 @error('logo') is-invalid @enderror"
                    src="{{ url('/'.'frontend/assets/img/kosong.jpg') }}" width="250px" />
                @error('logo')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                @else
                <img class="img-account-profile mb-4" src="{{ url('/'.'storage/photos/'.$data->logo) }}"
                    width="250px" />
                @endif
                <label class="btn btn-danger">Ganti Logo
                    <input type="file" hidden wire:model="logo" class="form-control
                @error('logo') is-invalid @enderror"></label>
            </div>
        </div>
    </div>

    <div class="col-xl-8">
        <!-- Account details card-->
        <div class="card mb-4">
            <div class="card-header">
                <h3>Pengaturan Website</h3>
            </div>
            <div class="card-body">
                @if (session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <form wire:submit.prevent="store">

                    <!-- Form Group (name)-->
                    <div class="form-group">
                        <label class="small mb-1">Nama Website</label>
                        <input type="text" wire:model="nama_website" class="form-control
                        @error('nama_website') is-invalid @enderror">
                        @error('nama_website')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- Form Group (no hp)-->


                    <div class="form-group">
                        <label class="small mb-1">Jam Buka</label>
                        <textarea type="text" wire:model="jam" class="form-control @error('jam') is-invalid @enderror"
                            id="exampleFormControlTextarea1" rows="3"></textarea>
                        @error('jam')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="small mb-1">Alamat</label>
                        <textarea type="text" wire:model="alamat"
                            class="form-control @error('alamat') is-invalid @enderror" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                        @error('alamat')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="small mb-1">Deskripsi</label>
                        <textarea type="text" wire:model="deskripsi"
                            class="form-control @error('deskripsi') is-invalid @enderror"
                            id="exampleFormControlTextarea1" rows="3"></textarea>
                        @error('deskripsi')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <h3>Pengaturan Sosial Media</h3>
            </div>
            <div class="card-body">
                <label class="small mb-1">No Hp</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">+62</span>
                    <input placeholder="Contoh : 81234567890" pattern="[0-9]{11}" type="tel" wire:model="no_hp" aria-describedby="basic-addon1" class="form-control
                            @error('no_hp') is-invalid @enderror">
                    @error('no_hp')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="small mb-1">Pesan WhatsApp</label>
                    <textarea type="text" wire:model="pesan" class="form-control @error('pesan') is-invalid @enderror"
                        id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('pesan')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="small mb-1">Link Facebook</label>
                    <input placeholder="Contoh : https://www.google.com/" type="url" wire:model="fb" class="form-control
                        @error('fb') is-invalid @enderror">
                    @error('fb')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="small mb-1">Link Instagram</label>
                    <input placeholder="Contoh : https://www.google.com/" type="url" wire:model="instagram" class="form-control
                        @error('instagram') is-invalid @enderror">
                    @error('instagram')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="small mb-1">Link Youtube</label>
                    <input placeholder="Contoh : https://www.google.com/" type="url" wire:model="youtube" class="form-control
                        @error('youtube') is-invalid @enderror">
                    @error('youtube')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Form Group (email address)-->
                <div class="form-group">
                    <label class="small mb-1">Email</label>
                    <input type="email" wire:model="email" class="form-control
                        @error('email') is-invalid @enderror">
                    @error('email')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button class="btn btn-danger" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

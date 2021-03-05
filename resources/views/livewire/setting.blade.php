@section('title','Pengaturan')
@section('header','Pengaturan')
@section('kotak')

    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card">
                <div class="card-header">Pengaturan Logo</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile mb-4"
                        src="{{ url('/'.'storage/photos/'.$data->logo) }}" alt />
                    <!-- Profile picture help block-->
                    {{-- <div class="small font-italic text-muted mb-4">Klik untuk mengganti</div> --}}
                    <!-- Profile picture upload button-->
                    <label class="btn btn-primary" >Upload new image
                    <input type="file" hidden wire:model="logo" class="form-control
                @error('logo') is-invalid @enderror"></label>
                @error('logo')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div>
        </div>

        {{-- <div class="form-group col-md-6">
            <label class="small mb-1">Logo</label>
                <input type="file" wire:model="logo" class="form-control
                @error('logo') is-invalid @enderror">
                @error('logo')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div> --}}

        <div class="col-xl-8">
    <!-- Account details card-->
    <div class="card mb-4">
        <div class="card-header">Pengaturan Website</div>
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
                        <label class="small mb-1">No Hp</label>
                        `
                            <input type="text" wire:model="no_hp" class="form-control
                            @error('no_hp') is-invalid @enderror">
                            @error('no_hp')
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
                <div class="form-group">
                    <label class="small mb-1">Alamat</label>
                    <textarea type="text" wire:model="alamat" class="form-control @error('alamat') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error('alamat')
                    <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="small mb-1">Deskripsi</label>
                    <textarea type="text" wire:model="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('deskripsi')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>
                <!-- Save changes button-->
                <button class="btn btn-primary" type="submit">Save changes</button>
            </form>
        </div>
        </div>
    </div>
</div>
{{-- @endsection --}}


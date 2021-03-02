@section('title','Tambah Slider')
@section('header','Tambah Slider')



<div class="container">
    <form wire:submit.prevent="store">
        <br>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" wire:model="judul" class="form-control
            @error('judul') is-invalid @enderror">
            @error('judul')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label>Foto</label>
            <input type="file" wire:model="gambar" class="form-control
            @error('gambar') is-invalid @enderror">
            @error('gambar')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>

    </form>
</div>

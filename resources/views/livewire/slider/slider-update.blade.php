@section('title','Update Slider')
@section('header','Update Slider')

<div class="container">
    <form wire:submit.prevent="update">
        <input type="hidden" name="" wire:model="sliderId">
        <div class="form-group">
            <br>
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
            <label>Deskripsi</label>
            <textarea type="text" wire:model="deskripsi" class="form-control
            @error('deskripsi') is-invalid @enderror"></textarea>
            @error('deskripsi')
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
        <br><br>
    </form>
</div>


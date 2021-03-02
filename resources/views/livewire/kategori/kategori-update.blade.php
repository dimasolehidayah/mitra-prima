@section('title','Update Produk')
@section('header','Update Produk')

<div class="container">
    <form wire:submit.prevent="update">
        <input type="hidden" name="" wire:model="kategoriId">
        <div class="form-group">
            <label>ID Kategori</label>
            <input type="text" wire:model="id_kategori" class="form-control
            @error('id_kategori') is-invalid @enderror">
            @error('id_kategori')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" wire:model="nama" class="form-control
            @error('nama') is-invalid @enderror">
            @error('nama')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <input type="text" wire:model="deskripsi" class="form-control
            @error('deskripsi') is-invalid @enderror">
            @error('deskripsi')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>

    </form>
</div>



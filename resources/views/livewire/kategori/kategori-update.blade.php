@section('title','Update Kategori')
@section('header','Update Kategori')

<div class="container">
    <br>
    <form wire:submit.prevent="update">
        <input type="hidden" name="kategoriId" wire:model="kategoriId">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" wire:model="nama_produk" class="form-control
            @error('nama_produk') is-invalid @enderror">
            @error('nama_produk')
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

        <button type="submit" class="btn btn-success">Simpan</button>
        <br>
        <br>
    </form>
</div>

@section('title','Tambah Produk')
@section('header','Tambah Produk')



<div>
    <form wire:submit.prevent="store">
        <div class="form-group">
            <label>Nama Produk</label>
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
            <input type="text" wire:model="deskripsi" class="form-control
            @error('deskripsi') is-invalid @enderror">
            @error('deskripsi')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="form-group">
            <label>Foto</label>
            <input type="file" wire:model="foto" class="form-control
            @error('foto') is-invalid @enderror">
            @error('foto')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
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
            <label>No Handphone</label>
            <input type="text" wire:model="no_hp" class="form-control
            @error('no_hp') is-invalid @enderror">
            @error('no_hp')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        <button type="submit" class="btn btn-success">Simpan</button>

    </form>
</div>


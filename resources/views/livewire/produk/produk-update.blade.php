@section('title','Update Produk')
@section('header','Update Produk')



<div class="container">
    <form wire:submit.prevent="update">
        <input type="hidden" name="" wire:model="produkId">
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
        <div class="form-group">
            <label>Harga</label>
            <input type="text" wire:model="harga" class="form-control
            @error('harga') is-invalid @enderror">
            @error('harga')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="text" wire:model="stok" class="form-control
            @error('stok') is-invalid @enderror">
            @error('stok')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>

    </form>
</div>



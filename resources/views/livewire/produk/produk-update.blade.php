@section('title','Update Produk')
@section('header','Update Produk')

<div class="container">
    <br>
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

            <select wire:model="id_kategori" class="form-control
            @error('id_kategori') is-invalid @enderror">
            @foreach ($produk as $data)
            <option value="{{$data->id_kategori}}">{{$data->id_kategori}}-{{$data->nama_produk}}</option>
            @endforeach
        </select>

            @error('id_kategori')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" wire:model="harga" class="form-control
            @error('harga') is-invalid @enderror">
            @error('harga')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Stok</label>
            <input type="number" wire:model="stok" class="form-control
            @error('stok') is-invalid @enderror">
            @error('stok')
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

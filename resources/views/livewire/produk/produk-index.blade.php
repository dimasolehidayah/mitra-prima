@section('title','Produk')
@section('header','Produk')
<div>
    <div class="card-header">
    <a href="/produkCreate" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
        </div>
    @endif
    @if (session()->has('pesan'))
        <div class="alert alert-danger" role="alert">
            {{ session('pesan')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
        </div>
    @endif

    <div class="card-body">
    <div class="row mt-3 mb-3">
    <div class="col">
            <select wire:model="paginate" name="" id="" class="form-control form-control-sm w-auto">
                <option value="2">2</option>
                <option value="5">5</option>
                <option value="10">10</option>
            </select>
        </div>
        <div class="col">
            <input wire:model="search" name="" id="" class="form-control " placeholder="Search">
        </div>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Foto</th>
                <th scope="col">No Handphone</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $data)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $data->nama_produk }}</td>
                <td>{{ $data->deskripsi }}</td>
                <td>
                    <img src="{{ url('storage/photos/'.$data->foto)}}" width="100">
                </td>
                <td>+62{{ $data->no_hp }}</td>
                <td>Rp.{{ $data->harga }}</td>
                <td>{{ $data->stok }}</td>
                <td>
                    <a href="/produkUpdate/{{$data->id}}" class="btn btn-primary btn-sm">Edit</a>
                    {{-- <button wire:click="getProduk({{$data->id}})" class="btn btn-sm btn-info text-white">Edit</button> --}}
                    <button wire:click="destroy({{$data->id}})" class="btn btn-sm btn-danger text-white">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $produk->links() }}
    </div>
</div>

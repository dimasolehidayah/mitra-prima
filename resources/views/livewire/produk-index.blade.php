@section('title','Produk')
@section('header','Produk')
<div class="container">
    <hr>
    <div>
    <a href="/produkCreate" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message')}}
        </div>
    @endif

    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Foto</th>
                <th scope="col">ID Kategori</th>
                <th scope="col">No Hp</th>
                <th scope="col">Created By</th>
                <th scope="col">Update By</th>
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
                <td>{{ $data->id_kategori }}</td>
                <td>+62{{ $data->no_hp }}</td>
                <td>{{ $data->created_by }}</td>
                <td>{{ $data->update_by }}</td>
                <td>
                    <a href="/produkUpdate/{{$data->id}}" class="btn btn-primary btn-sm">Edit Data</a>
                    {{-- <button wire:click="getProduk({{$data->id}})" class="btn btn-sm btn-info text-white">Edit</button> --}}
                    <button wire:click="destroy({{$data->id}})" class="btn btn-sm btn-danger text-white">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

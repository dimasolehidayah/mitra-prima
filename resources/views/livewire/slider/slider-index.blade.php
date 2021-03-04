@section('title','Slider')
@section('header','Slider')
<div>
    <div class="card-header">
        <a href="/sliderCreate" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        @endif
    <div class="card-body">
    <table class="table table-bordered table-striped">
        <thead class="table-info">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Foto</th>
                <th scope="col">Update By</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($slider as $data)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $data->judul }}</td>
                <td>
                    <img src="{{ url('storage/photos/'.$data->gambar)}}" width="100">
                </td>
                <td>{{ $data->update_by }}</td>
                <td>
                    <a href="/sliderUpdate/{{$data->id}}" class="btn btn-primary btn-sm">Edit</a>
                    <button wire:click="destroy({{$data->id}})" class="btn btn-sm btn-danger text-white">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

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
        @if (session()->has('pesan'))
        <div class="alert alert-danger" role="alert">
            {{ session('pesan')}}
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
                <th scope="col">Deskripsi</th>
                <th scope="col">Foto</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($slider as $data)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->deskripsi }}</td>
                <td>
                    <img src="{{ url('storage/photos/'.$data->gambar)}}" width="100">
                </td>
                <td>
                    <a href="/sliderUpdate/{{$data->id}}" class="btn btn-primary btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@foreach ($slider as $s)
<!-- Modal -->
<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true close-btn">×</span>
               </button>
           </div>
          <div class="modal-body">
               <p>Are you sure want to delete {{$s->judul}}?</p>
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
               <button type="button" wire:click.prevent="destroy({{$s->id}})" class="btn btn-danger close-modal" data-dismiss="modal">Delete</button>
           </div>
       </div>
   </div>
</div>
@endforeach

</div>

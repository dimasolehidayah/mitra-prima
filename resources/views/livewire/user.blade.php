@section('title','Pengguna')
@section('header','Pengguna')
<div>
    <div class="card-header">

        <button type="button" class="btn btn-danger" wire:click.prevent="ClearForm" data-toggle="modal"
            data-target="#adduser">
            Tambah Pengguna
        </button>

        {{-- <input wire:model="search" type="text" placeholder="Search..." class="form-control"> --}}

    </div>
    <div class="card-body">
        @if (session('pesan'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ (session('pesan')) }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if (session('hapus'))
        <div class="alert alert-danger alert-dismissible fade show">
            {{ (session('hapus')) }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
                <input wire:model="search" type="text" placeholder="Search..." class="form-control">
            </div>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped table-sm">
                <thead class="table-danger">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $data)
                    <tr>
                        <th class="table align-middle">{{ $loop->iteration }}</th>
                        <td class="table align-middle">{{ $data->name }}</td>
                        <td class="table align-middle">{{ $data->email }}</td>
                        <td class="table align-middle">{{ $data->password }}</td>
                        <td>
                            <button wire:click.prevent="DetailData({{ $data->id }})" class="btn btn-sm btn-warning"
                                data-toggle="modal" data-target="#edituser"><i class="far fa-edit"></i></button>
                            <button wire:click.prevent="DetailData({{ $data->id }})" class="btn btn-sm btn-danger"
                                data-toggle="modal" data-target="#deleteuser"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $users->links() }}
    </div>

    <!-- Modal Add-->
    <div wire:ignore.self class="modal fade" id="adduser" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" wire:model="name" class="form-control">
                            @error('name') <label class="text-danger">{{ $message }}</label> @enderror
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" wire:model="email" class="form-control">
                            @error('email') <label class="text-danger">{{ $message }}</label> @enderror
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" wire:model="password" class="form-control">
                            @error('password') <label class="text-danger">{{ $message }}</label> @enderror
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" wire:click.prevent="SimpanData()">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal edit --}}

    <div wire:ignore.self class="modal fade" id="edituser" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" wire:model="name" class="form-control">
                            @error('name') <label class="text-danger">{{ $message }}</label> @enderror
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" wire:model="email" class="form-control">
                            @error('email') <label class="text-danger">{{ $message }}</label> @enderror
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" wire:model="password" class="form-control">
                            @error('password') <label class="text-danger">{{ $message }}</label> @enderror
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" wire:click.prevent="UpdateData">Update</button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal delete --}}

    <div wire:ignore.self class="modal fade" id="deleteuser" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Data User {{ $name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda Ingin Menghapus Data Ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" wire:click.prevent="DeleteData">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.livewire.on('adduser', () => {
            $('#adduser').modal('hide');
            $('.modal-backdrop').hide();
        });

        window.livewire.on('edituser', () => {
            $('#edituser').modal('hide');
            $('.modal-backdrop').hide();
        });

        window.livewire.on('deleteuser', () => {
            $('#deleteuser').modal('hide');
            $('.modal-backdrop').hide();
        });

    </script>
</div>

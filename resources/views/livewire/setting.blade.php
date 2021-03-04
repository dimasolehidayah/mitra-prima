@section('title','Pengaturan')
@section('header','Pengaturan')
<div>
    <!-- Account details card-->
        <div class="card-header">Pengaturan Website</div>
        <div class="card-body">
            <form>
                <!-- Form Group (name)-->
                <div class="form-group">
                    <label class="small mb-1">Nama Website</label>
                    <input class="form-control" id="inputUsername" type="text"
                        placeholder="" value="" />
                </div>
                <!-- Form Row-->
                <div class="form-row">
                    <!-- Form Group (no hp)-->
                    <div class="form-group col-md-6">
                        <label class="small mb-1">No Hp</label>
                        <input class="form-control" id="inputFirstName" type="text"
                            placeholder="" value="" />
                    </div>
                    <!-- Form Group (logo)-->
                    <div class="form-group col-md-6">
                        <label class="small mb-1">Logo</label>
                        <input class="form-control" id="inputLastName" type="file"
                            placeholder="" value="" />
                    </div>
                </div>
                <!-- Form Group (email address)-->
                <div class="form-group">
                    <label class="small mb-1">Email</label>
                    <input class="form-control" id="inputEmailAddress" type="email"
                        placeholder="" value="" />
                </div>
                <div class="form-group">
                    <label class="small mb-1">Alamat</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label class="small mb-1">Deskripsi</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <!-- Save changes button-->
                <button class="btn btn-primary" type="button">Save changes</button>
            </form>
        </div>
</div>


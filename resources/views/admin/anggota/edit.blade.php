@foreach ($anggota as $a)
    
<div class="modal fade" id="update-anggota{{ $a->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{ url('/admin/anggota/update/' .  $a->id ) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
            <div class="modal-body">
            
                 <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">nis</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="nis"  value="{{ $a->nis }}" required>               
                 </div>

                 <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="fullname"  value="{{ $a->fullname }}" required>               
                 </div>

                 <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">username</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="username" value="{{ $a->username }}" required>               
                 </div>

                 <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">kelas</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="kelas" value="{{ $a->kelas }}" required>               
                 </div>

                 <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">alamat</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" value="{{ $a->alamat }}" name="alamat" required>               
                 </div>

                 <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">status</label>
                    <select name="verif_id"  class="form-select" >
                        <option value="" disabled selected>-- pilih opsion</option>
                        <option value="verified">verified</option>
                        <option value="unverified">unverified</option>
                    </select>
                </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </form>
      </div>
    </div>
  </div>
  @endforeach

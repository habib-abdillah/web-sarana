@extends('admin.layout.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Edit Data User</h3>
                    </div>
                    <form role="form" action="{{URL::to('/upuser/'.$edit->id)}}" method="post">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                            <label for="InputNama">Nama</label>
                            <input type="text" value="{{$edit->name}}" class="form-control" name="name" id="InputNama" placeholder="Masukan nama anda" required>
                          </div>
                        <div class="form-group">
                          <label for="InputEmail">Email</label>
                          <input type="email" value="{{$edit->email}}" class="form-control" name="email" id="InputEmail" placeholder="Masukan email anda" required>
                        </div>
                        <div class="form-group">
                            <label for="InputRole">Role</label>
                            <select class="custom-select rounded-2" name="role" id="InputRole" required>
                              <option value="Tamu" {{'Tamu' == $edit->role ? 'selected' : ''}}>Tamu</option>
                              <option value="Admin" {{'Admin' == $edit->role ? 'selected' : ''}}>Admin</option>
                            </select>
                          </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
                  <!-- /.card -->
                  </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">
      
                </div>
                <!--/.col (right) -->
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
          </section>
    </div>
@endsection
@extends('admin.layout.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Reset Password User</h3>
                    </div>
                    <form role="form" action="{{URL::to('/respass/'.$respassword->id)}}" method="post">
                        @csrf
                      <div class="card-body">
                        <div class="form-group">
                            <label for="InputNama">Nama</label>
                            <input type="text" value="{{$respassword->name}}" readonly class="form-control" name="name" id="InputNama" placeholder="Masukan nama anda" required>
                          </div>
                        <div class="form-group">
                          <label for="InputEmail">Email</label>
                          <input type="email" value="{{$respassword->email}}" readonly class="form-control" name="email" id="InputEmail" placeholder="Masukan email anda" required>
                        </div>
                        <div class="form-group">
                          <label for="InputPassword1">Password</label>
                          <input type="password" class="form-control" name="password" id="InputPassword" placeholder="Masukan password baru" required>
                        </div>
                        <div class="form-group">
                          <label for="InputRole">Role</label>
                          <input type="role" value="{{$respassword->role}}" readonly class="form-control" name="role" id="InputRole" placeholder="Masukan role" required>
                        </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
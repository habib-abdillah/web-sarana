@extends('admin.layout.app')

@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data User</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Role</th>
                      @if(auth()->user()->role=='Admin')
                      <th>Aksi</th>
                      @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($all as $key=>$row)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->role }}</td>
                            @if(auth()->user()->role=='Admin')
                            <td class="d-flex justify-content-center">
                                <a href="{{ URL::to('/edit-user/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ URL::to('/reset-password/'.$row->id) }}" class="btn btn-sm btn-primary ml-2">Reset Password</a>
                                <a href="{{ URL::to('/delete-user/'.$row->id) }}" class="btn btn-sm btn-danger ml-2">Delete</a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
</div>

@endsection
@extends('admin.layout.app')

@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Ruangan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama Ruangan</th>
                      <th>Lokasi Ruangan</th>
                      <th>kode ruangan</th>
                      <th>Lebar Bangunan</th>
                      <th>Panjang Bangunan</th>
                      <th>lantai Ke</th>
                      <th>Kapasitas</th>
                      @if(auth()->user()->role=='Admin')
                      <th>Aksi</th>
                      @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($allr as $key=>$row)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $row->nama_ruangan }}</td>
                            <td>{{ $row->lokasi_ruangan }}</td>
                            <td>{{ $row->kode_ruangan }}</td>
                            <td>{{ $row->lebar_ruangan }}</td>
                            <td>{{ $row->panjang_ruangan }}</td>
                            <td>{{ $row->lantai_ke }}</td>
                            <td>{{ $row->kapasitas }}</td>
                            @if(auth()->user()->role=='Admin')
                            <td class="d-flex justify-content-center">
                                <a href="{{ URL::to('/edit-ruangan/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ URL::to('/delete-ruangan/'.$row->id) }}" class="btn btn-sm btn-danger ml-2">Delete</a>
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
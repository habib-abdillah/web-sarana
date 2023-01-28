@extends('admin.layout.app')

@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Bangunan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>NO</th>
                      <th>Nama Bangunan</th>
                      <th>Lebar Bangunan</th>
                      <th>Panjang Bangunan</th>
                      <th>Kepemilikan</th>
                      <th>Jumlah Lantai</th>
                      <th>Tanggal SK Penggunaan</th>
                      @if(auth()->user()->role=='Admin')
                      <th>Aksi</th>
                      @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($allb as $key=>$row)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $row->nama_bangunan }}</td>
                            <td>{{ $row->lebar_bangunan }}</td>
                            <td>{{ $row->panjang_bangunan }}</td>
                            <td>{{ $row->kepemilikan }}</td>
                            <td>{{ $row->jml_lantai }}</td>
                            <td>{{ $row->tgl_sk }}</td>
                            @if(auth()->user()->role=='Admin')
                            <td class="d-flex justify-content-center">
                                <a href="{{ URL::to('/edit-bangunan/'.$row->id) }}" class="btn btn-sm btn-info">Edit</a>
                                <a href="{{ URL::to('/delete-bangunan/'.$row->id) }}" class="btn btn-sm btn-danger ml-2">Delete</a>
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
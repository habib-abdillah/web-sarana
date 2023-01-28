@extends('admin.layout.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Edit Data Bangunan</h3>
                    </div>
                    <form role="form" action="{{URL::to('/upbangunan/'.$edit->id)}}" method="post">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                              <label for="InputNamaBangunan">Nama Bangunan</label>
                              <input type="text" Value="{{$edit->nama_bangunan}}" class="form-control" name="nama_bangunan" id="InputNamaBangunan" placeholder="Masukan nama bangunan" required>
                          </div>
                          <div class="form-group">
                            <label for="InputLebarBangunan">Lebar Bangunan</label>
                            <input type="text" Value="{{$edit->lebar_bangunan}}" class="form-control" name="lebar_bangunan" id="InputLebarBangunan" placeholder="Masukan lebar bangunan" required>
                          </div>
                          <div class="form-group">
                            <label for="InputPanjangBangunan">Panjang Bangunan</label>
                            <input type="text" Value="{{$edit->panjang_bangunan}}" class="form-control" name="panjang_bangunan" id="InputPanjangBangunan" placeholder="Masukan panjang bangunan" required>
                          </div>
                          <div class="form-group">
                            <label for="InputKepemilikan">Kepemilikan</label>
                            <input type="text" Value="{{$edit->kepemilikan}}" class="form-control" name="kepemilikan" id="InputKepemilikan" placeholder="Masukan kepemilikan" required>
                          </div>
                          <div class="form-group">
                            <label for="InputJumlahLantai">Jumlah Lantai</label>
                            <input type="text" Value="{{$edit->jml_lantai}}" class="form-control" name="jml_lantai" id="InputJumlahLantai" placeholder="Masukan jumlah lantai" required>
                          </div>
                          <div class="form-group">
                            <label for="InputTanggalSK">Tanggal SK Penggunaan</label>
                            <input type="date" Value="{{$edit->tgl_sk}}" class="form-control" name="tgl_sk" id="InputTanggalSK" required>
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
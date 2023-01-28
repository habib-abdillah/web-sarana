@extends('admin.layout.app')

@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Edit Data Ruangan</h3>
                    </div>
                    <form role="form" action="{{URL::to('/upruangan/'.$edit->id)}}" method="post">
                        @csrf
                        <div class="card-body">
                          <div class="form-group">
                              <label for="InputNamaRuangan">Nama Ruangan</label>
                              <input type="text" value="{{$edit->nama_ruangan}}" class="form-control" name="nama_ruangan" id="InputNamaRuangan" placeholder="Masukan nama ruangan" required>
                          </div>
                          <div class="form-group">
                            <label for="InputLokasiRuangan">Lokasi Ruangan</label>
                            <input type="text" value="{{$edit->lokasi_ruangan}}" class="form-control" name="lokasi_ruangan" id="InputLokasiRuangan" placeholder="Masukan lokasi ruangan" required>
                          </div>
                          <div class="form-group">
                            <label for="InputKodeRuangan">Kode Ruangan</label>
                            <input type="text" value="{{$edit->kode_ruangan}}" class="form-control" name="kode_ruangan" id="InputKodeRuangan" placeholder="Masukan kode ruangan" required>
                          </div>
                          <div class="form-group">
                            <label for="InputPanjangRuangan">Panjang Ruangan</label>
                            <input type="text" value="{{$edit->panjang_ruangan}}" class="form-control" name="panjang_ruangan" id="InputPanjangRuangan" placeholder="Masukan panjang ruangan" required>
                          </div>
                          <div class="form-group">
                            <label for="InputLebarRuangan">Lebar Ruangan</label>
                            <input type="text" value="{{$edit->lebar_ruangan}}" class="form-control" name="lebar_ruangan" id="InputLebarRuangan" placeholder="Masukan lebar ruangan" required>
                          </div>
                          <div class="form-group">
                            <label for="InputLantai">Lantai Ke</label>
                            <input type="text" value="{{$edit->lantai_ke}}" class="form-control" name="lantai_ke" id="InputLantai" placeholder="Masukan posisi lantai" required>
                          </div>
                          <div class="form-group">
                            <label for="InputKapasitas">Kapasitas</label>
                            <input type="text" value="{{$edit->kapasitas}}" class="form-control" name="kapasitas" id="InputKapasitas" placeholder="Masukan kapsitas ruangan" required>
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
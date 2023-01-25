@extends('layout.v_template')
@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-1">
      <div class="col-sm-12">
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Pegawai</h3>
          </div>
          <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>Dibuat Oleh</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{$pegawai[0]->nama_pegawai_dibuat}}</td>
                  </tr>
                  <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td>{{$pegawai[0]->nip_pegawai_dibuat}}</td>
                  </tr>
                </tbody>
                <thead>
                  <tr>
                    <th>Diverifikasi Oleh</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{$pegawai[0]->nama_pegawai_diverifikasi}}</td>
                  </tr>
                  <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td>{{$pegawai[0]->nip_pegawai_diverifikasi}}</td>
                  </tr>
                </tbody>
                <thead>
                  <tr>
                    <th>Disetujui Oleh</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{$pegawai[0]->nama_pegawai_disetujui}}</td>
                  </tr>
                  <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td>{{$pegawai[0]->nip_pegawai_disetujui}}</td>
                  </tr>
                </tbody>
              </table>
          </div>
          <div class="card-footer">
            <a href="/instansi/pegawai/edit/{{$pegawai[0]->id_instansi}}" class="btn btn-warning">Edit</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Satker</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <tbody>
                  <tr>
                    <td>Kode Instansi</td>
                    <td>:</td>
                    <td>{{$instansi[0]->kode_instansi}}</td>   
                  </tr>
                  <tr>
                    <td>Nama Instansi</td>
                    <td>:</td>
                    <td>{{$instansi[0]->nama_instansi}}</td>   
                  </tr>
                  <tr>
                    <td>Kode BA</td>
                    <td>:</td>
                    <td>{{$instansi[0]->kode_ba}}</td>   
                  </tr>
                  <tr>
                    <td>Kode Eselon 1</td>
                    <td>:</td>
                    <td>{{$instansi[0]->kode_eselon_1}}</td>   
                  </tr>
                  <tr>
                    <td>Kode Satker</td>
                    <td>:</td>
                    <td>{{$instansi[0]->kode_satker}}</td> 
                  </tr>
                  <tr>
                    <td>Jenis Kewenangan</td>
                    <td>:</td>
                    <td>{{$instansi[0]->jenis_kewenangan}}</td> 
                  </tr>
                  <tr>
                    <td>Nama UAPPAW</td>
                    <td>:</td>
                    <td>{{$instansi[0]->nama_uappaw}}</td> 
                  </tr>
                  <tr>
                    <td>Kode UAPPAW</td>
                    <td>:</td>
                    <td>{{$instansi[0]->kode_uappaw}}</td> 
                  </tr>
                  <tr>
                    <td>Periode</td>
                    <td>:</td>
                    <td>{{$instansi[0]->periode}}</td> 
                  </tr>
              </tbody>
            </table>
            <div class="card-footer">
              <a href="/instansi/edit/{{$instansi[0]->id_instansi}}" class="btn btn-warning">Edit</a>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Analisis</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
              <thead>
                <tr>
                  <th>Sheet</th>
                  <th>Total Skor</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($sheet as $data)
                  @foreach ($data as $dataSheet)
                    <tr>
                      <td>{{$dataSheet->sheet}}</td>
                      <td>{{$dataSheet->total_skor}}</td>
                      <td>
                        <a href="analisisLK/{{$dataSheet->id_instansi}}" class="btn btn-sm btn-primary">Detail</a>
                      </td>   
                    </tr>
                  @endforeach
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
</section>
@endsection
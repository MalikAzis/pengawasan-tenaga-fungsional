@extends('layouts.app') 
@section('beranda') active
@endsection
 
@section('content')

<div class="row pt-2 pb-2">
  <div class="col-sm-12">
    <h4 class="page-title">Detail IPKPS</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javaScript:void();">IPKPS</a></li>
      <li class="breadcrumb-item active"><a href="javaScript:void();">Unggah IPKPS</a></li>
      <li class="breadcrumb-item active"><a href="javaScript:void();">Detail IPKPS</a></li>
      <li class="breadcrumb-item active" aria-current="page">Komponen 4</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <span><i class="fa fa-ribbon"></i> Komponen 4</span>
        <!-- Large Size Modal -->
        <button type="button" class="btn btn-primary waves-effect pull-right waves-light m-1" data-toggle="modal" data-target="#largesizemodal"><i class="fa fa-plus"></i>
          <span>Kriteria</span></button>
        <!-- Modal -->
        <div class="modal fade" id="largesizemodal">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-file"></i> Tambah Kriteria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">

                  <div class="form-group">
                    <label for="input-1">Kriteria</label>
                    <select name="kriteria_id" id="kriteria" class="form-control" id="input-1">
  
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="input-1">Bukti</label>
                    <input type="file" name="file" class="form-control-file" id="input-1" placeholder="Upload file">
                  </div>
                  <div class="form-group">
                    <label for="input-1">Skor (Self Assessment)</label>
                    <select name="bukti_id" id="bukti" class="form-control" id="input-1">
                      
                    </select>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">
                      <i class="fa fa-times"></i> Batal
                  </button>
                  <button type="submit" class="btn btn-primary shadow-primary px-5">
                      <i class="fa fa-check-square-o"></i>
                      Simpan
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="card-body">

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th rowspan="2">No.</th>
                          <th rowspan="2">Komponen</th>
                          <th rowspan="2">Bukti</th>
                          <th colspan="2" class="text-center">Skor</th>
                          <th rowspan="2">Aksi</th>
                        </tr>
                        <tr>
                          <th style="width: 20%;">Self Assessment</th>
                          <th>Penilai</th>
                        </tr>
                      </thead>
                      <tbody>

                        @php $no = 1; 
@endphp
                        <tr>
                          <td>{{$no++}}</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>
                            <a data-toggle="modal" data-target="#ubahKomponen" href="#" class="btn btn-outline-primary">
                                  <i class="fa fa-pencil"></i></a>
                            </a>
                          </td>
                        </tr>
                        <div class="modal fade" id="ubahKomponen">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title"><i class="fa fa-pencil"></i> Ubah Komponen</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                              </div>
                              <form action="" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="PATCH" />
                                <div class="modal-body">
                                  <div class="form-group">
                                    <label for="input-1">Kriteria</label>
                                    <select name="kriteria_id" id="kriteria" class="form-control" id="input-1">
                        
                                          </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="input-1">Bukti</label>
                                    <input type="file" name="file" class="form-control-file" id="input-1" placeholder="Upload file">
                                  </div>
                                  <div class="form-group">
                                    <label for="input-1">Skor (Self Assessment)</label>
                                    <select name="bukti_id" id="bukti" class="form-control" id="input-1">
                                            
                                          </select>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
                                  <button type="submit" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Simpan</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <form id="delete-form" action="#" method="post" style="display:none">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" id="delete-id">
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>



<!--End Dashboard Content-->
@endsection
@extends('layouts.app') 
@section('beranda') active
@endsection
 
@section('content')

<div class="row pt-2 pb-2">
  <div class="col-sm-12">
    <h4 class="page-title">Unggah IPKPS</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javaScript:void();">Beranda</a></li>
      <li class="breadcrumb-item active" aria-current="page">Unggah IPKPS</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <i class="fa fa-file"></i> Unggah IPKPS
        <!-- Large Size Modal -->
        <button type="button" data-toggle="modal" data-target="#tambahIpkps" class="btn btn-square btn-primary waves-effect waves-light m-1 pull-right">
          <i class="fa fa-plus-circle"></i> Tambah IPKPS</button>
        <span>Tambah</span></button>
        <!-- Modal -->
        <div class="modal fade" id="tambahIpkps">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><i class="fa fa-file"></i> Unggah IPKPS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
              </div>
              <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">

                  <div class="form-group">
                    <label for="input-1">Tahun</label>
                    <select name="tahun_id" id="tahun" class="form-control" id="input-1">

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="input-1">Berkas Identitas</label>
                    <input type="file" name="file" class="form-control-file" id="input-1" placeholder="Upload file">
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
        <div class="table-responsive">
          <table id="datatable" class="table table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>Tahun IPKPS</th>
                <th>Nama</th>
                <th>Berkas Identitas</th>
                <th>Predikat Nilai</th>
                <th>Status</th>
                <th>Detail</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a href="" class="btn btn-outline-primary waves-effect waves-dark m-1">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <form id="delete-form" action="#" method="post" style="display:none">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" id="delete-id">
      </form>
    </div>
  </div>

  <!--End Dashboard Content-->
@endsection
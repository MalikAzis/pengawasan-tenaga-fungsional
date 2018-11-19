@extends('layouts.app') 
@section('beranda') active
@endsection
 
@section('content')

<div class="row pt-2 pb-2">
  <div class="col-sm-12">
    <h4 class="page-title">Rekap Penilaian</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javaScript:void();">Beranda</a></li>
      <li class="breadcrumb-item active" aria-current="page">Rekap Penilaian</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <i class="fa fa-file"></i> Rekap Penilaian
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table id="datatablerekap" class="table table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>Tahun IPKPS</th>
                <th>Nama</th>
                <th>Berkas Identitas Pengawas</th>
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
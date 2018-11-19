@extends('layouts.app') 
@section('beranda') active
@endsection
 
@section('content')

<div class="row pt-2 pb-2">
  <div class="col-sm-12">
    <h4 class="page-title">Rekap Penilaian</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javaScript:void();">Rekap</a></li>
      <li class="breadcrumb-item active"><a href="javaScript:void();">Rekap Penilaian</a></li>
      <li class="breadcrumb-item active" aria-current="page">Komponen 2</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <span><i class="fa fa-ribbon"></i> Komponen 2</span>
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
                          <th rowspan="2">Kriteria</th>
                          <th rowspan="2">Bukti</th>
                          <th colspan="2" class="text-center">Skor</th>
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
        </div>

      </div>
    </div>
  </div>
</div>



<!--End Dashboard Content-->
@endsection
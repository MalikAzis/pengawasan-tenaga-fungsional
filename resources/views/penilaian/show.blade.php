@extends('layouts.app') 
@section('beranda') active
@endsection
 
@section('content')

<div class="row pt-2 pb-2">
  <div class="col-sm-12">
    <h4 class="page-title">Detail Penilaian IPKPS</h4>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="javaScript:void();">IPKPS</a></li>
      <li class="breadcrumb-item active"><a href="javaScript:void();">Penilaian IPKPS</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Penilaian IPKPS</li>
    </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <span><i class="fa fa-ribbon"></i> Detail Penilaian IPKPS</span>


        <div class="pull-right">
          <h5>IPKPS (tahun)</h5>
        </div>
      </div>

      <div class="card-body">

        <div class="form-group">
          <div class="col-sm-12 row">
            <label class="col-sm-6">
              Nama :
            </label>
            <span></span>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12 row">
            <label class="col-sm-6">
              NIP :
            </label>
            <span></span>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12 row">
            <label class="col-sm-6">
              NUPTK :
            </label>
            <span></span>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12 row">
            <label class="col-sm-6">
              Pangkat/Gol :
            </label>
            <span></span>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12 row">
            <label class="col-sm-6">
              Jabatan :
            </label>
            <span></span>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12 row">
            <label class="col-sm-6">
              Penilai :
            </label>
            <span></span>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <form action="" method="post">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="datatable" class="table table-bordered">
                        <thead>
                          <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Komponen</th>
                            <th rowspan="2">Bobot</th>
                            <th colspan="2">Self Assessment</th>
                            <th colspan="2">Penilai</th>
                            <th rowspan="2">Detail</th>
                          </tr>
                          <tr>
                            <th>Skor</th>
                            <th>NK</th>
                            <th>Skor</th>
                            <th>NK</th>
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
                            <td></td>
                            <td></td>
                            <td>
                              <a href=""><button class="btn btn-primary waves-effect pull-right waves-dark m-1">
                              <i class="fa fa-eye"></i>
                            <span>Detail</span> </button></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <input type="submit" value="Submit" class="btn btn-outline-primary pull-right">
                </form>
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
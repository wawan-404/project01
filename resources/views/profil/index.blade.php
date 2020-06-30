@extends('master.layout')

@section('konten')

<div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">
          <h2>DATA DOSEN </h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Settings 1</a>
                  <a class="dropdown-item" href="#">Settings 2</a>
                </div>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
          <p class="text-muted font-13 m-b-30">
            Silahkan klik Detail untuk melihat data detail dari masing-masing dosen
          </p>
          <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>NAMA</th>
                <th>UNIT</th>
                <th>STATUS PEGAWAI</th>
                <th>AKSI</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($profil as $p)
                    <tr>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->status_peg }}</td>
                        <td>{{ $p->unit }}</td>
                        <td><a href="" class="btn btn-primary btn-sm">DETAIL</a></td>
                    </tr>
                @endforeach

            </tbody>
          </table>
        </div>
        </div>
    </div>
  </div>
      </div>
    </div>


{{-- <div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_title">
            <h2>PILIH DOSEN</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                    <div class="clearfix">

                    </div>
        </div>
        <div class="x_content">
            jhgkjgkg


        </div>
    </div>
</div> --}}




@stop

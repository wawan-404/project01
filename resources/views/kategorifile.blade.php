@extends('master.layout')

@section('konten')


<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>KATEGORI FILE</h2>
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
        <table class="table table-hover">
          <thead>
            <tr>
              <th>NO</th>
              <th>KATEGORI</th>
            </tr>
          </thead>
          <tbody>
              @php
                  $no = 1;
              @endphp
              @foreach ($kategorifile as $kf)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$kf->namakategori}}</td>
              </tr>
              @endforeach

          </tbody>
        </table>

      </div>
    </div>
  </div>


@endsection


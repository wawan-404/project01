@extends('master.layout')

@section('konten')

<form>

    <form action="" method="post">
        <div class="form-group">
          <label for="inputAddress">TAMBAH KATEGORI</label>
          <input name="name" type="text" class="form-control" id="inputAddress" placeholder="Tambah Kategori File">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>

@endsection

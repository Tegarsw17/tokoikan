@extends('dashboard')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Input Barang</h1>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Barang</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama Barang">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga Barang</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Harga Barang">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Deskripsi</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi">
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection

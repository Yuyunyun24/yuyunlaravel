@extends('mahasiswa.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Mahasiswa Page</div>
  <div class="card-body">
      
      <form action="{{ url('mahasiswa') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="nim" id="nim" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="alamat" id="alamat" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
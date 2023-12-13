@extends('mahasiswa.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Mahasiswa Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">nama : {{ $mhs->nama }}</h5>
        <p class="card-text">nim : {{ $mhs->nim }}</p>
        <p class="card-text">alamat : {{ $mhs->alamat }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
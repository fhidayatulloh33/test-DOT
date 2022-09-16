@extends('master')

@section('konten')
  <h4 class="text-center">Selamat Datang <b>{{Auth::user()->name}}</b></h4>
@endsection
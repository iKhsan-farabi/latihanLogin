@extends('master')

@section('konten')
<h4>Selamat datang <b>{{ Auth::user()->name }}</b> , Anda login sebagai <b>{{ Auth::user()->role}}</b></h4>

<p>lihat Data pegawai</p>
<a href="{{ route('indexPegawai') }}">Klik Disini!</a>
@endsection
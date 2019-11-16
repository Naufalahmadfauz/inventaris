@extends('template')
@section('main')
    <div id="pengguna">
        <h2>Tambah Pengguna</h2>
        <form method="POST" action="{{route('pengguna.store')}}">
            @csrf
            @include('user.form',['button'=>'Tambah Pengguna'])
        </form>
    </div>
@stop
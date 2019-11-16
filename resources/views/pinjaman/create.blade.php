@extends('template')
@section('main')
    <div id="pinjaman">
        <h2>Buat Pinjaman</h2>
        @include('_partial.flash_message')
        <form method="POST" action="{{route('pinjaman.store')}}">
            @csrf
            @include('pinjaman.form',['button'=>'Buat Pinjaman'])
        </form>
    </div>
@stop
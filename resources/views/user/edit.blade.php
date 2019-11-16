@extends('template')
@section('main')
    <div id="pengguna">
        <h2>Update Data Pengugna</h2>
        <form method="POST" action="{{route('pengguna.update',$data->id)}}">
            @method('PATCH')
            @csrf
            @include('user.form',['button'=>'Update Data'])
        </form>
    </div>
@stop
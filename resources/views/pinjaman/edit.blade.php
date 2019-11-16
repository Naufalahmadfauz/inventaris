@extends('template')
@section('main')
    <div id="pinjaman">
        <h2>Update Pinjaman</h2>
        <form method="POST" action="{{route('pinjaman.update',$bind->id)}}">
            @method('PATCH')
            @csrf
            @include('pinjaman.form',['button'=>'Update Pinjaman'])
        </form>
    </div>
@stop
@if(isset($data))
    <input type="hidden" value="{{$data->id}}" name="id">
@endif
<div class="form-group">
    <label class="d-block">Nama</label>
@if($errors->any())
        @if($errors->has('name'))
{{--            {!! Form::text('name',null,['class'=>'form-control is-invalid']) !!}--}}
{{--            <span class="help-block">{{$errors->first('name')}}</span>--}}
            <input type="text" class="form-control is-invalid" name="name" id="name"
                   value="{{!empty($data)?$data->name:null}}" required="">
            <div class="invalid-feedback">{{$errors->first('name')}}</div>
        @else
{{--            {!! Form::text('name',null,['class'=>'form-control is-valid']) !!}--}}
            <input type="text" class="form-control is-valid" name="name" id="name" value="{{!empty($data)?$data->name:null}}" required="">
            <div class="valid-feedback">
            </div>
        @endif
    @else
{{--        {!! Form::text('name',null,['class'=>'form-control']) !!}--}}
        <input type="text" class="form-control" value="{{!empty($data)?$data->name:null}}" required="" name="name" id="name">
    @endif
</div>

<div class="form-group">
    <label class="d-block">Email / Nama Pengguna</label>
@if($errors->any())
        @if($errors->has('email'))
{{--            {!! Form::text('email',null,['class'=>'form-control is-invalid']) !!}--}}
{{--            <span class="help-block">{{$errors->first('email')}}</span>--}}
            <input type="text" class="form-control is-invalid" name="email" id="email" value="{{!empty($data)?$data->email:null}}" required="">
            <div class="invalid-feedback"> {{$errors->first('email')}} </div>
        @else
{{--            {!! Form::text('email',null,['class'=>'form-control is-valid']) !!}--}}
            <input type="text" class="form-control is-valid" name="name" id="name" value="{{!empty($data)?$data->name:null}}" required="">
            <div class="valid-feedback">
        @endif
    @else
        {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
    @endif
</div>

<div class="form-group">
    <label class="d-block">level</label>
@if($errors->any())
        @if($errors->has('level'))
            {!! Form::select('level',['admin'=>'Admin','operator'=>'Operator','siswa'=>'Siswa'],null,['class'=>'form-control is-invalid','id'=>'level','placeholder'=>'Pilih Level']) !!}
            <span class="help-block">{{$errors->first('lokasi')}}</span>
        @else
            {!! Form::select('level',['admin'=>'Admin','operator'=>'Operator','siswa'=>'Siswa'],null,['class'=>'form-control is-valid','id'=>'level','placeholder'=>'Pilih Level']) !!}
        @endif
    @else
        {!! Form::select('level',['admin'=>'Admin','operator'=>'Operator','siswa'=>'Siswa'],null,['class'=>'form-control','id'=>'level','placeholder'=>'Pilih Level']) !!}
    @endif
</div>

<div class="form-group">
    {!! Form::label('password','Password',['class'=>'control-label']) !!}
    @if($errors->any())
        @if($errors->has('password'))
            {!! Form::password('password',null,['class'=>'form-control is-invalid']) !!}
            <span class="help-block">{{$errors->first('password')}}</span>
        @else
            {!! Form::password('password',null,['class'=>'form-control is-valid']) !!}
        @endif
    @else
        {!! Form::password('password',null,['class'=>'form-control']) !!}
    @endif
</div>

<div class="form-group">
    {!! Form::label('password_confirmation','Konfirmasi Password',['class'=>'control-label']) !!}
    @if($errors->any())
        @if($errors->has('password_confirmation'))
            {!! Form::password('password_confirmation',null,['class'=>'form-control is-invalid']) !!}
            <span class="help-block">{{$errors->first('password_confirmation')}}</span>
        @else
            {!! Form::password('password_confirmation',null,['class'=>'form-control is-valid']) !!}
        @endif
    @else
        {!! Form::password('password_confirmation',null,['class'=>'form-control']) !!}
    @endif
</div>

<div class="form-group">
    {!! Form::submit($button,['class'=>'btn btn-primary form-control']) !!}
</div>
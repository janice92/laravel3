@extends('layouts.app')
@section('content')
    <h1>Multiple Uploads</h1>
<div class="container">
        @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
            </div>
            <img src="/images/{{ Session::get('path') }}">
        @endif

     <div class="form-group">
        {!! Form::open(array('url' => 'upload/uploadFiles','method'=>'POST', 'files'=>true)) !!}
            {!! Form::file('image[]', array('multiple'=>true)) !!}
     <p>{!! $errors->first('image') !!}</p>
         @if(Session::has('error'))
             <p>{!! Session::get('error') !!}</p>
         @endif
         {!! Form::submit('Submit', array('class'=>'btn btn-lg btn-primary col-md-4')) !!}
     {!! Form::close() !!}
     </div>
</div>
@extends('layouts.app')
@section('content')

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops !</strong> There were some problems with your input. <br>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>

                    <img src="/images{{ Session::get('path') }}">
                @endif

                <form action="/store" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-8 col-lg-offset-5">
                                <input type="file" name="image"/>
                            </div>
                            <br>
                            <br>
                            <div class="col-md-8 col-lg-offset-5">
                                <button type="submit" value="Upload" class="btn btn-success">Envoyer</button>
                            </div>
                        </div>
                </form>

@stop
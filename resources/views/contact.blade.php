@extends('layouts.app')
@section('content')

<div class="container">
    <h2 id="formulaire">Formulaire de contact</h2>
    <hr>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-xs-6">
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" name="nom" placeholder="Nom">
                </div>
             </div>
            <div class="col-xs-6">
                <div class="input-group">
                    <span class="input-group-addon" id="email">@</span>
                    <input type="text" class="form-control" placeholder="Email" required aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <br>
        <input type="text" name="title" class="form-control" placeholder="Sujet" required>
        <br>
        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Message" required></textarea>
        <br>
        <button type="submit" class="btn btn-info">Envoyer</button>
    </form>
</div>
@stop
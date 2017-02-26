@extends('layouts.app')
@section('content')

<div class="container">
    <h3>Contact</h3>

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-xs-6">
                <input type="text" name="nom" class="form-control" placeholder="Nom" required>
            </div>
            <div class="col-xs-6">
                <div class="input-group">
                    <span class="input-group-addon" id="email">@</span>
                    <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
        <input type="text" name="title" class="form-control" placeholder="Sujet" required>
        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Message" required></textarea>
        <button type="submit" class="btn btn-warning">Envoyer</button>
    </form>
</div>
@stop
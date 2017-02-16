@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Création d'un article</h1>
        <form action="{{ route('articles.store') }}" method="post">
            {{ csrf_field() }}

            <input type="text" name="title" class="form-control" placeholder="Titre de l'article" required>

            <textarea name="content" class="form-control" cols="30" rows="10"
                      placeholder="Contenu de l'article" required></textarea>

            <select name="user" class="form-control" required>
                <option>Merci de sélectionner un utilisateur</option>
                @foreach($users AS $user)
                    <option value="{{ $user->id }}" {{ ( $user->id == \Auth::user()->id ) ? 'selected' : '' }}>{{ $user->name }}</option>
                @endforeach
            </select>

            <button type="submit" class="btn btn-warning">Gonzaguerie</button>
        </form>
    </div>
@stop
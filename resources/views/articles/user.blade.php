@extends('layouts.app')

@section('content')
    <div class="container">


        <a class="btn btn-success pull-right" href="{{ route('articles.create') }}">
            Créer un nouvel article
        </a>
        <h1>Liste des articles de {{ $user->name }}</h1>

        <table class="table table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>TITLE</td>
                <td>DESCRIPTION</td>
                <td>User</td>
                <td>ACTIONS</td>
            </tr>
            </thead>
            @foreach($articles AS $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>
                        {{ $article->title }}
                    </td>
                    <td>
                        {{ $article->content }}
                    </td>
                    <td>
                        {{ $art
                        icle->user->name }}
                    </td>
                    <td>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Afficher</a>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-success">Modifier</a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="post" style="display: inline-block;">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                    <a href="{{ route('articles.edit', $article->id) }}">
                    </a>
                </tr>
            @endforeach
        </table>
    </div>

@stop
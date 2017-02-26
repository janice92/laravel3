@extends('layouts.app')

@section('content')
    <div class="container">


        <a class="btn btn-success pull-right" href="{{ route('articles.create') }}">
            Créer un nouvel article
        </a>

        <h1>Liste de mes articles</h1>

        <table class="table table-bordered" style="text-align: center">
            <thead>
            <tr>
                <strong><td>ID</td></strong>
                <strong><td>TITLE</td></strong>
                <strong><td>DESCRIPTION</td></strong>
                <strong><td>User</td></strong>
                <strong><td>ACTIONS</td></strong>
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
                        {{ $article->user->name }}
                    </td>
                    <td>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary" ><span class="glyphicon glyphicon-eye-open"></span></a>
                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                        <form action="{{ route('articles.destroy', $article->id) }}" method="post" style="display: inline-block;">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>
                        </form>
                    </td>
                    <a href="{{ route('articles.edit', $article->id) }}">
                    </a>
                </tr>
            @endforeach
        </table>
    </div>

@stop
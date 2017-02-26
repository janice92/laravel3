@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->content }}</p>
        <a href="{{ url('/user/'.$article->user->id) }}">{{ $article->user->name }}</a>
<h4>Image</h4>
        <h2>Liste des commentaires</h2>
        @foreach($article->comments AS $comment)
            <div>
                @if($comment->user)
                    <h4>{{ $comment->user->name }}</h4>
                @endif
                <p>
                    {{ $comment->comment }}
                </p>
            </div>
            <hr>
        @endforeach

        <form action="{{ route('articles.comment', $article->id) }}" method="post">
            {{ csrf_field() }}
            <textarea name="comment" class="form-control" placeholder="Votre commentaire"></textarea>
            <button class="btn btn-primary">Envoyer</button>
        </form>
    </div>
@stop
@extends('layouts.app')

@section('content')
    <div class="container">
@if(session()->has('ok'))
    <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
@endif

        <a class="btn btn-success pull-right" href="{{ url('user/create') }}">
            Créer un nouvel user
        </a>
        <h1>Liste de mes users</h1>

        <table class="table table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Nom</td>
                <td>EMAIL</td>
                <td>Date de création</td>
                <td>ACTIONS</td>
            </tr>
            </thead>
            @foreach($users AS $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                    {{ $user->email }}
                    </td>
                    <td>
                       {{ $user->created_at }} 
                    </td>
                    <td>
                        <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary">Afficher</a>
                        <a href="{{ url('user.edit', $user->id)}}" class="btn btn-success">Modifier</a>
                        <form action="{{ url('users.destroy', $user->id) }}" method="post" style="display: inline-block;">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                    <a href="{{ url('users.edit', $user->id) }}">
                    </a>
                </tr>
            @endforeach
        </table>
    </div>

@stop
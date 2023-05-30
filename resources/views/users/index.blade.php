@extends('layouts.app')

@section('title', 'Listagem de Usuarios')
 
@section('content')
<h1>Listagem de usuarios <a href="{{route('users.create')}}">(+)</a></h1>

<ul>
    @foreach ($users as $user)
        <li>
            <p>Nome: {{$user->name}} - Email: {{$user->email}}
                - | - <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
                - | - <a href="{{ route('users.edit', $user->id) }}">Editar</a>
            </p>
        </li>
    @endforeach
</ul>

@endsection
@extends('layouts.app')

@section('title', 'Listagem de Usuarios')
 
@section('content')
<h1>Listagem de usuarios <a href="{{route('users.create')}}">(+)</a></h1>

<form action="{{route('users.index')}}" method="get">
    <input type="text" name="search" id="search" placeholder="Pesquisar"/>
    <button>Pesquisar</button>
</form>

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
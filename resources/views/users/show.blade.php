@extends('layouts.app')

@section('title', 'Listagem do usuário')
    
@section('content')
<h1>Listagem do usuario {{$user->name}}</h1>

<ul>
    <li>Nome: {{$user->name}}</li>
    <li>Email: {{ $user->email}}</li>
</ul>

<form action="{{route('users.destroy', $user->id)}}" method="post">
    @method('DELETE')
    @csrf
    <button type="submit">Deletar</button>
</form>

@endsection
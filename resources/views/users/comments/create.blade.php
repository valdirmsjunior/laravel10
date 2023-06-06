@extends('layouts.app')

@section('title','Cadastrando Comentário para o Usuário {{$user->username}}')

@section('content')
    <h1 class="text-2x1 font-semibold leading-tigh py-2">Cadastrando Comentário do usuário {{$user->username}}</h1>

    @include('users.includes.validations-form')

    <form action="{{ route('comments.store', $user->id)}}" class="py-5" method="post">
        @csrf

        @include('users.comments._partials.form')

    </form>

@endsection
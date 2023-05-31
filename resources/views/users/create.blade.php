@extends('layouts.app')

@section('title','Cadastro de Usuário')

@section('content')
    <h1>Novo Usuário</h1>

    @include('users.includes.validations-form')

    <form action="{{ route('users.store')}}" method="post">
        @csrf

        @include('users._partial.form')

    </form>

@endsection
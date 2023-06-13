@extends('layouts.app')

@section('title', 'Cadastro de Usuário')

@section('content')
    <h1 class="text-2x1 leading-tigh py-2 font-semibold">Novo Usuário</h1>

    @include('users.includes.validations-form')

    <form action="{{ route('users.store') }}" class="py-5" method="post" enctype="multipart/form-data">
        @csrf

        @include('users._partials.form')

    </form>

@endsection

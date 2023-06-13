@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')
    <h1 class="text-2x1 leading-tigh py-2 font-semibold">Editar o Usuário {{ $user->name }}</h1>

    @include('users.includes.validations-form')

    <form action="{{ route('users.update', $user->id) }}" class="py-5" method="post" enctype="multipart/form-data">
        @method('PUT')

        @include('users._partials.form')

    </form>

@endsection

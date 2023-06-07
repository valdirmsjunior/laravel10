@extends('layouts.app')

@section('title', 'Editar Comentário')

@section('content')
    <h1 class="text-2x1 leading-tigh py-2 font-semibold">Editar Comentário do usuário {{ $user->name }}</h1>

    @include('users.includes.validations-form')

    <form action="{{ route('comments.update', $comment->id) }}" class="py-5" method="post">
        @method('PUT')

        @include('users.comments._partials.form')

    </form>

@endsection

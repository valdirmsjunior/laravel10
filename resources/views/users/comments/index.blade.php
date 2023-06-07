@extends('layouts.app')

@section('title', 'Comentarios do Usuario')

@section('content')
    <h1 class="text-2x1 leading-tigh py-2 font-semibold">
        Comentários do usuario {{ $user->name }}
        <a href="{{ route('comments.create', $user->id) }}" class="rounded-full bg-blue-900 px-4 text-sm text-white">(+)</a>
    </h1>

    <form action="{{ route('users.index') }}" class="py-5" method="get">
        <input type="text" name="search" id="search" placeholder="Pesquisar"
            class="appearance-none rounded-md border-solid bg-gray-200 px-1 py-1 md:w-1/6" />
        <button
            class="focus:shadow-outline rounded-md bg-purple-500 px-1 py-1 text-white shadow hover:bg-purple-400 focus:outline-none">
            Pesquisar
        </button>
    </form>

    <table class="min-w-full overflow-hidden rounded-lg leading-normal shadow-md">
        <thead>
            <tr>
                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left">
                    Comentários ({{ $comments->count() }})
                </th>
                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left">
                    Visivel
                </th>
                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left">
                    EDITAR
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr class="hover:bg-gray-300">
                    <td class="border-white-200 bg-white-100 border-b px-5 py-5 text-left">
                        {{ $comment->body }}
                    </td>
                    <td class="border-white-200 bg-white-100 border-b px-5 py-5 text-left">
                        {{ $comment->visible ? 'SIM' : 'NÃO' }}
                    </td>
                    <td class="border-white-200 bg-white-100 border-b px-5 py-5 text-left">
                        <a class="rounded-full bg-cyan-500 px-3 py-3 ring-2 ring-blue-500/50 hover:bg-cyan-600"
                            href="{{ route('comments.edit', ['user' => $user->id, 'id' => $comment->id]) }}">Editar
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

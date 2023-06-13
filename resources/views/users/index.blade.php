@extends('layouts.app')

@section('title', 'Listagem de Usuarios')

@section('content')
    <h1 class="text-2x1 leading-tigh py-2 font-semibold">
        Listagem de usuarios
        <a href="{{ route('users.create') }}" class="rounded-full bg-blue-900 px-4 text-sm text-white">(+)</a>
    </h1>
    <form action="{{ route('users.index') }}" class="py-5" method="get">
        <input type="text" name="search" id="search" placeholder="Pesquisar"
            class="appearance-none rounded-md border-solid bg-gray-200 px-1 py-1 md:w-1/6" />
        <button
            class="focus:shadow-outline rounded-md bg-purple-500 px-1 py-1 text-white shadow hover:bg-purple-400 focus:outline-none">
            Pesquisar
        </button>
    </form>

    <table class="table-auto overflow-hidden rounded-lg leading-normal shadow-md">
        <thead>
            <tr>
                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left">
                    Foto
                </th>
                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left">
                    Nome
                </th>
                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left">
                    E-mail
                </th>
                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left">
                    Editar
                </th>
                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left">
                    Detalhes
                </th>
                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left">
                    Comentários
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="hover:bg-gray-300">
                    <td class="border-white-200 bg-white-100 border-b px-5 py-5 text-left">
                        @if ($user->image)
                            <img src="{{ url("storage/{$user->image}") }}" class="w-20 object-cover">
                        @else
                            <img src="{{ url('images/laravel.png') }}" alt="{{ $user->name }}" class="w-20 object-cover">
                        @endif
                    </td>
                    <td class="border-white-200 bg-white-100 border-b px-5 py-5 text-left">
                        {{ $user->name }}
                    </td>
                    <td class="border-white-200 bg-white-100 border-b px-5 py-5 text-left">
                        {{ $user->email }}
                    </td>
                    <td class="border-white-200 bg-white-100 border-b px-5 py-5 text-left">
                        <a class="rounded-full bg-cyan-500 px-3 py-3 ring-2 ring-blue-500/50 hover:bg-cyan-600"
                            href="{{ route('users.edit', $user->id) }}">Editar
                        </a>
                    </td>
                    <td class="border-white-200 bg-white-100 border-b px-5 py-5 text-left">
                        <a class="rounded-full bg-orange-300 px-3 py-3 ring-2 ring-blue-500/50 hover:bg-cyan-600"
                            href="{{ route('users.show', $user->id) }}">Detalhes
                        </a>
                    </td>
                    <td class="border-white-200 bg-white-100 border-b px-5 py-5 text-left">
                        <a class="rounded-full bg-orange-300 px-3 py-3 ring-2 ring-blue-500/50 hover:bg-cyan-600"
                            href="{{ route('comments.index', $user->id) }}">Comentários ({{ $user->comments->count() }})
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="py-4">
        {{ $users->appends([
                'search' => request()->get('search', ''),
            ])->links() }}
    </div>

@endsection

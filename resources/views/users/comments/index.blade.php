@extends('layouts.app')

@section('title', 'Comentarios do Usuario')
 
@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">
    Comentários do usuario {{$user->name}} 
    <a href="{{route('comments.create', $user->id)}}" class="bg-blue-900 rounded-full text-white px-4 text-sm">(+)</a></h1>

<form action="{{route('users.index')}}" class="py-5" method="get">
    <input type="text" name="search" id="search" placeholder="Pesquisar" class="px-1 py-1 rounded-md md:w-1/6 bg-gray-200 appearance-none border-solid"/>
    <button class="px-1 py-1 rounded-md shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white ">
        Pesquisar
    </button>
</form>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">
                Comentários (0)
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">
                Visivel
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">
                EDITAR
            </th>
        </tr>
    </thead>
    <tbody >
        @foreach ($comments as $comment)
            <tr class="hover:bg-gray-300">
                <td class="px-5 py-5 border-b border-white-200 bg-white-100 text-left">
                    {{$comment->body}}
                </td>
                <td class="px-5 py-5 border-b border-white-200 bg-white-100 text-left">
                    {{$comment->visible ? 'SIM': 'NÃO'}} 
                </td>
                <td class="px-5 py-5 border-b border-white-200 bg-white-100 text-left  ">
                    <a class="px-3 py-3 bg-cyan-500 hover:bg-cyan-600 rounded-full ring-2 ring-blue-500/50" 
                        href="{{ route('users.edit', $user->id) }}">Editar
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
@extends('layouts.app')

@section('title', 'Listagem do usuário')
    
@section('content')
<h1 class="text-2x1 font-semibold leading-tigh py-2">Listagem do usuario {{$user->name}}</h1>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">
                Nome
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">
                E-mail
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left">
                Deletar
            </th> 
        </tr>
    </thead>
    <tbody >
       
        <tr class="hover:bg-gray-300">
            <td class="px-5 py-5 border-b border-white-200 bg-white-100 text-left">
                {{$user->name}}
            </td>
            <td class="px-5 py-5 border-b border-white-200 bg-white-100 text-left">
                {{$user->email}}
            </td>
            <td class="px-5 py-5 border-b border-white-200 bg-white-100 text-left">
                <form action="{{route('users.destroy', $user->id)}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="px-3 py-3 bg-red-500 hover:bg-red-400 rounded-full ring-2 ring-blue-500/50 " type="submit">
                        Deletar
                    </button>
                </form>
            </td>
        </tr>
        
    </tbody>
</table>




@endsection
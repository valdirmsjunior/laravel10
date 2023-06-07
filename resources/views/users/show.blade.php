@extends('layouts.app')

@section('title', 'Listagem do usuário')

@section('content')
    <h1 class="text-2x1 leading-tigh py-2 font-semibold">Listagem do usuario {{ $user->name }}</h1>

    <table class="min-w-full overflow-hidden rounded-lg leading-normal shadow-md">
        <thead>
            <tr>
                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left">
                    Nome
                </th>
                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left">
                    E-mail
                </th>
                <th class="border-b-2 border-gray-200 bg-gray-100 px-5 py-3 text-left">
                    Deletar
                </th>
            </tr>
        </thead>
        <tbody>

            <tr class="hover:bg-gray-300">
                <td class="border-white-200 bg-white-100 border-b px-5 py-5 text-left">
                    {{ $user->name }}
                </td>
                <td class="border-white-200 bg-white-100 border-b px-5 py-5 text-left">
                    {{ $user->email }}
                </td>
                <td class="border-white-200 bg-white-100 border-b px-5 py-5 text-left">
                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="rounded-full bg-red-500 px-3 py-3 ring-2 ring-blue-500/50 hover:bg-red-400"
                            type="submit">
                            Deletar
                        </button>
                    </form>
                </td>
            </tr>

        </tbody>
    </table>




@endsection

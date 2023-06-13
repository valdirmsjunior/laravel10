@csrf
<div class="w-full rounded bg-white px-8 py-12 shadow-md">
    <input type="text" name="name" id="name"
        class="my-2 w-full appearance-none rounded border py-2 px-3 leading-tight text-gray-700 shadow focus:outline"
        placeholder="Nome: " value="{{ $user->name ?? old('name') }}" />
    <input type="email" name="email" id="email"
        class="my-2 w-full appearance-none rounded border py-2 px-3 leading-tight text-gray-700 shadow focus:outline"
        placeholder="Email: " value="{{ $user->email ?? old('email') }}" />
    <input type="password" name="password" id="password"
        class="my-2 w-full appearance-none rounded border py-2 px-3 leading-tight text-gray-700 shadow focus:outline"
        placeholder="Senha: " />
    <input type="file" name="image" id="image"
        class="focus:shadow-outline my-2 w-full rounded py-2 leading-tight focus:outline-none" />
    <button type="submit"
        class="focus:shadow-outline rounded-md bg-purple-500 px-1 py-1 text-white shadow hover:bg-purple-400 focus:outline-none">
        Enviar
    </button>
</div>

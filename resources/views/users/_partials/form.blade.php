@csrf

<input type="text" name="name" id="name" class="px-1 py-1 rounded-md md:w-1/6 bg-gray-200 appearance-none border-solid" placeholder="Nome: " value="{{$user->name ?? old('name')}}"/>
<input type="email" name="email" id="email" class="px-1 py-1 rounded-md md:w-1/6 bg-gray-200 appearance-none border-solid" placeholder="Email: " value="{{$user->email ?? old('email')}}"/>
<input type="password" name="password" id="password" class="px-1 py-1 rounded-md md:w-1/6 bg-gray-200 appearance-none border-solid" placeholder="Senha: "/>
<button type="submit" class="px-1 py-1 rounded-md shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white "> Enviar </button>
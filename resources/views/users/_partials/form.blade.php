@csrf

<input type="text" name="name" id="name" placeholder="Nome: " value="{{$user->name ?? old('name')}}"/>
<input type="email" name="email" id="email" placeholder="Email: " value="{{$user->email ?? old('email')}}"/>
<input type="password" name="password" id="password" placeholder="Senha: "/>
<button type="submit"> Enviar </button>
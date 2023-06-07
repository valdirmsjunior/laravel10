@if ($errors->any())
    <ul class="border-l-4 border-orange-500 bg-orange-100 p-4 text-orange-700" role="alert">
        @foreach ($errors->all() as $error)
            <li class="error">{{ $error }}</li>
        @endforeach
    </ul>
@endif

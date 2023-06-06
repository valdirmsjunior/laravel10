<div class="w-full bg-white shadow-md rounded px-8 py-12">
    @csrf

    <textarea type="text" name="body" id="body" 
    class="form-control block w-full px-3 py-1.5 text-base font-normal
     text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
     rounded transition ease-in-out m-0
     focus:text-gray-700 focus:bg-white focus:border-block " placeholder="Comentário: " value="{{$user->name ?? old('name')}}"></textarea>
    <label for="visible">
        <input type="checkbox" name="visible" id="visible"/>
        Visible?
    </label>
    <button type="submit" class="w-full px-1 py-1 rounded-md shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white "> Enviar </button>
</div>
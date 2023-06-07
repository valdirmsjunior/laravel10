<div class="w-full rounded bg-white px-8 py-12 shadow-md">
    @csrf

    <textarea type="text" name="body" id="body"
        class="form-control focus:border-block m-0 block w-full rounded border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 transition ease-in-out focus:bg-white focus:text-gray-700"
        placeholder="Comentário: ">{{ $comment->body ?? old('body') }}</textarea>
    <label for="visible">
        <input type="checkbox" name="visible" id="visible"
            @if (isset($comment) && $comment->visible) checked = 'checked'; @endif />
        Visible?
    </label>
    <button type="submit"
        class="focus:shadow-outline w-full rounded-md bg-purple-500 px-1 py-1 text-white shadow hover:bg-purple-400 focus:outline-none">
        Enviar </button>
</div>

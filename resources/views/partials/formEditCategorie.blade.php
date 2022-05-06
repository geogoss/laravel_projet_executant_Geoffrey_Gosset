<section class="max-w-xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Modifier une catégorie</h2>

    <h1>Bonjour Geoffrey Comment vas-tu ?</h1>
    <h2>Hello comment tu vas ?</h2>
    <h3>Yes i can</h3>
    

    <form action="/categorie/{{ $categorie->id }} " method="POST">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="username">name</label>
                <input id="username" value="{{ $categorie->name }} " name="name" type="text"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                {{-- <select name="categorie" type="text" class="form-select" id="addTreeInputLatin"
                    aria-describedby="addTreeInputLatinHelp">
                    @foreach ($categorie as $item)
                        <option value="{{ $item->id }}">{{ $item->name }} </option>
                    @endforeach
                </select> --}}
                {{-- <select name="categorie" type="text" class="form-select" id="addTreeInputLatin"
                    aria-describedby="addTreeInputLatinHelp">
                    @foreach ($categorie as $item)
                        <option value="{{ $item->id }} " @if ($item->image->item_id == $item->id) ? selected : null @endif>
                            {{ $item->name }} </option>
                    @endforeach
                </select> --}}
            </div>

        </div>

        <div class="flex justify-end mt-6">
            <button type="submit"
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Modifier</button>
        </div>
    </form>
</section>

<section class="mt-10 max-w-xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
    <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Upload une image</h2>

    <form action="/image" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
            <div>
                <label class="text-gray-700 dark:text-gray-200" for="username">name</label>
                <input id="username" name="name" type="text"
                    class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
            </div>

            <input id="emailAddress" name="src" type="file"
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">

            <div>
                <label class="text-gray-700 dark:text-gray-200" for="username">Categorie_id</label>
                <select name="categorie_id" type="text" class="form-select" id="addTreeInputLatin"
                    aria-describedby="addTreeInputLatinHelp">
                    @foreach ($categories as $categorie)
                        <option value="{{ $categorie->id }} ">{{ $categorie->name }} </option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="flex justify-end mt-6">
            <button type="submit"
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">upload</button>
        </div>
    </form>
</section>

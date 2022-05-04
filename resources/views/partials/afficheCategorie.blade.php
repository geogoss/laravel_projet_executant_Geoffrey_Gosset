<div class="py-12 w-full">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <section class="text-4xl text-center">

                        <div class="py-12">
                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                <h1 class="text-2xl font-bold text-center">All catégories</h1>
                                <!-- component -->
                                <div class="antialiased mt-10 bg-gray-100 text-gray-600 h-screen px-4">
                                    <div class="flex flex-col justify-center">
                                        <!-- Table -->
                                        <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                                            <header class="px-5 py-4 border-b border-gray-100">
                                                <td>
                                                    <a class="text-white bg-orange-400 mr-2 px-2 rounded" href="/categorie/create ">Créer une catégorie</a>
                                                </td>
                                            </header>
                                            <div class="p-3">
                                                <div class="overflow-x-auto">
                                                    <table class="table-auto w-full">
                                                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                                            <tr>
                                                                <th class="p-2 whitespace-nowrap">
                                                                    <div class="font-semibold text-left">Name</div>
                                                                </th>
                                                                
                                                                <th class="p-2 whitespace-nowrap">
                                                                    <div class="font-semibold text-left">Action</div>
                                                                </th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-sm divide-y divide-gray-100">
                                                            @foreach ($categories as $categorie)
                                                                <tr>
                                                                    <td class="p-2 whitespace-nowrap">
                                                                        <div class="flex items-center">
                                                                            <div class="font-medium text-gray-800">{{$categorie->name}}</div>
                                                                        </div>
                                                                    </td>
                                                                
                                                                    {{-- @can('admin', $item) --}}
                                                                    
                                                                    <td>
                                                                        <a class="text-white bg-yellow-400 mr-2 px-2 rounded" href="/categorie/{{$categorie->id}}/edit ">Modifier</a>
                                                                    </td>
                                                                    <td>
                                                                        <form action="/categorie/{{$categorie->id}}" method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button
                                                                            class="text-white bg-red-700 px-2 rounded">Supprimer</button>
                    
                                                                        </form>
                                                                    </td>
                                                                    {{-- @endcan --}}
                                                                </tr>
                                                                
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            </div>
        </div>
    </div>
</div>
</div>

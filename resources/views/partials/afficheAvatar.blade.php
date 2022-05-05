<div class="text-center mt-10">
    <a class="text-center bg-green-600 p-3 rounded-full" href="/avatar/create">Ajouter un avatar</a>
</div>
    <section class="flex mt-20">
        @foreach ($avatars as $avatar)
            <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <img class="object-cover w-full h-56" src={{ asset('/storage/' . $avatar->src) }} alt="avatar">
    
                <div class="py-5 text-center">
                    <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">{{ $avatar->name }}</a>
                </div>
                <div class="py-5 text-center">
                    <form action="/avatar/{{ $avatar->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-white bg-red-700 px-2 rounded">Supprimer</button>
    
                    </form>
                </div>
    
            </div>
        @endforeach
    
    </section>


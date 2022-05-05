
@include('partials.navBarGallerie')    
<section class="grid grid-rows-3 grid-flow-col gap-4 mt-20">
        @foreach ($images as $image)
            <div class=" max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <img class="object-cover w-full h-56" src={{ asset('/storage/' . $image->src) }} alt="image">

                <div class="py-5 text-center">
                    <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">{{ $image->name }}</a>
                </div>
                <div class="py-5 text-center">
                    <form action="image/{{ $image->id }} " method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-white bg-red-700 px-2 rounded">Supprimer</button>

                    </form>
                    <a href="/download/{{ $image->id }} "
                        class=" block font-bold text-red-600 dark:text-red">Download</a>
                </div>
            </div>
        @endforeach
    </section>

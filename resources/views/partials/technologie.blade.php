<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
@include('partials.navBarGallerie')    
<section class="grid grid-rows-1 grid-flow-col gap-4 mt-20">
        @foreach ($technologies as $technologie)
            <div class=" max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <img class="object-cover w-full h-56" src={{ asset('/storage/' . $technologie->src) }} alt="image">

                <div class="py-5 text-center">
                    <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">{{ $technologie->name }}</a>
                </div>
                <div class="py-5 text-center">
                    <form action="image/{{ $technologie->id }} " method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="text-white bg-red-700 px-2 rounded">Supprimer</button>

                    </form>
                    <a href="/download/{{ $technologie->id }} "
                        class=" block font-bold text-red-600 dark:text-red">Download</a>
                </div>
            </div>
        @endforeach
    </section>

</x-app-layout>

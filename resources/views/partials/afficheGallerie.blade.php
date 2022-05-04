<section class="grid grid-rows-3 grid-flow-col gap-4 mt-20">
    @foreach ($images as $image)
    <div class=" max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
        <img class="object-cover w-full h-56" src={{asset('/storage/'.$image->src)}} alt="image">
        
        <div class="py-5 text-center">
            <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">{{$image->name}}</a>
        </div>
    </div>
        
    @endforeach
</section>

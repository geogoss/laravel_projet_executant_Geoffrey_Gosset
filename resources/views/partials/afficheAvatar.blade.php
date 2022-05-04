
<section class="flex mt-20">
    @foreach ($avatars as $avatar)
    <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
        <img class="object-cover w-full h-56" src={{asset('/storage/'.$avatar->src)}} alt="avatar">
        
        <div class="py-5 text-center">
            <a href="#" class="block text-2xl font-bold text-gray-800 dark:text-white">{{$avatar->name}}</a>
        </div>
    </div>
        
    @endforeach

</section>
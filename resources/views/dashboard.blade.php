<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex ">
        <div class="flex flex-col w-64 h-screen py-8 bg-white border-r dark:bg-gray-800 dark:border-gray-600">
            <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">MolenGeek</h2>

            <div class="flex flex-col items-center mt-6 -mx-2">
                <img class="object-cover w-24 h-24 mx-2 rounded-full"
                {{-- @if ($avatar->id == null) src={{ asset('/storage/pokemon0.jpg') }} alt="avatar">
                @else
                src={{ asset('/storage/' . $avatar->src) }} alt="avatar"> 
                @endif --}}

                    src="{{ asset('storage/' . Auth::user()->avatar->src) }} " alt="avatar">
                <h4 class="mx-2 mt-2 font-medium text-gray-800 dark:text-gray-200 hover:underline">
                    {{ Auth::user()->name }} </h4>
                <p class="mx-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-400 hover:underline">
                    {{ Auth::user()->email }} </p>
            </div>

            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav>
                    @can('admin')
                        <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200"
                            href="/avatar">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <span class="mx-4 font-medium">Avatars</span>
                        </a>

                        <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                            href="/image">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <span class="mx-4 font-medium">Images</span>
                        </a>

                        <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                            href="/categorie">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <span class="mx-4 font-medium">Catégorie</span>
                        </a>
                    @endcan

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                        href="/gallerie">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Gallerie</span>
                    </a>
                    @can('admin')
                        <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                            href="/user">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <span class="mx-4 font-medium">Users</span>
                        </a>
                    @endcan
                </nav>
            </div>
        </div>
        <div class="py-12 w-full">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <section class="text-4xl text-center">

                            <div class="py-12">
                                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                    <h1 class="text-2xl font-bold text-center">Data user</h1>
                                    <!-- component -->
                                    <div class="antialiased mt-10 bg-gray-100 text-gray-600 h-screen px-4">
                                        <div class="flex flex-col justify-center">
                                            <!-- Table -->
                                            <div
                                                class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                                                <header class="px-5 py-4 border-b border-gray-100">
                                                    <h2 class="font-semibold text-gray-800">Customers</h2>
                                                </header>
                                                <div class="p-3">
                                                    <div class="overflow-x-auto">
                                                        <table class="table-auto w-full">
                                                            <thead
                                                                class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                                                <tr>
                                                                    <th class="p-2 whitespace-nowrap">
                                                                        <div class="font-semibold text-left">Name</div>
                                                                    </th>
                                                                    <th class="p-2 whitespace-nowrap">
                                                                        <div class="font-semibold text-left">firstname
                                                                        </div>
                                                                    </th>
                                                                    <th class="p-2 whitespace-nowrap">
                                                                        <div class="font-semibold text-left">email</div>
                                                                    </th>
                                                                    <th class="p-2 whitespace-nowrap">
                                                                        <div class="font-semibold text-left">age</div>
                                                                    </th>
                                                                    <th class="p-2 whitespace-nowrap">
                                                                        <div class="font-semibold text-left">Role</div>
                                                                    </th>
                                                                    <th class="p-2 whitespace-nowrap">
                                                                        <div class="font-semibold text-left">Avatar
                                                                        </div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-sm divide-y divide-gray-100">
                                                                <tr>
                                                                    <td class="p-2 whitespace-nowrap">
                                                                        <div class="flex items-center">
                                                                            <div class="font-medium text-gray-800">
                                                                                {{ Auth::user()->name }}</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="p-2 whitespace-nowrap">
                                                                        <div class="flex items-center">
                                                                            <div class="font-medium text-gray-800">
                                                                                {{ Auth::user()->firstname }}</div>
                                                                        </div>
                                                                    </td>
                                                                    <td class="p-2 whitespace-nowrap">
                                                                        <div class="text-left">
                                                                            {{ Auth::user()->email }}</div>
                                                                    </td>
                                                                    <td class="p-2 whitespace-nowrap">
                                                                        <div class="text-left">
                                                                            {{ Auth::user()->age }}</div>
                                                                    </td>
                                                                    <td class="p-2 whitespace-nowrap">
                                                                        <div
                                                                            class="text-left font-medium text-green-500">
                                                                            {{ Auth::user()->role->role }}</div>
                                                                    </td>
                                                                    <td class="p-2 whitespace-nowrap">
                                                                        <div
                                                                            class="text-left font-medium text-green-500">
                                                                            {{ Auth::user()->avatar->name }}</div>
                                                                    </td>
                                                                </tr>

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
</x-app-layout>

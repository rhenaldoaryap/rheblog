<navbar>
    <div x-data="{ open: false }" class="relative bg-gray-900 overflow-hidden">
        <div class="relative z-10 py-5 bg-gray-900 sm:py-10 lg:w-full lg:pb-5">
            <div class="px-4 sm:px-6 lg:px-8">
                <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start">
                    <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                        <div class="flex items-center justify-between w-full md:w-auto">
                            <a href="{{ url('/') }}">
                                <img class="h-8 w-auto sm:h-10" src="{{ asset('images/rhedev.png') }}" alt="logo">
                            </a>
                            <div class="-mr-2 flex items-center md:hidden">
                                <button @click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block md:ml-10 md:pr-4">
                        @foreach($categories as $category)
                        <a href="{{ route('articles', ['slug' => $category->slug]) }}" class="px-3 font-medium text-white hover:text-gray-600 hover:underline uppercase">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </nav>
            </div>

            <div x-show="open" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="fixed top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" style="display: none;">
                <div class="rounded-lg shadow-md">
                    <div class="rounded-lg bg-white shadow-xs overflow-hidden">
                        <div class="px-5 pt-4 flex items-center justify-between">
                            <div>
                                <img class="h-8 w-auto" src="{{ asset('images/rhedev.png') }}" alt="logo">
                            </div>
                            <div class="-mr-2">
                                <button @click="open = false" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="px-2 pt-2 pb-3">
                            @foreach($categories as $category)
                            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50 focus:bg-gray-50 transition duration-150 ease-in-out">{{ $category->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</navbar>
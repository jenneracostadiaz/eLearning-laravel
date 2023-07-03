<div>
    <div class="bg-gray-200 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow px-4 h-12 rounded-lg text-gray-700 mr-4" wire:click="resetFilters">
                <i class="fa-solid fa-hand-sparkles text-xs mr-2"></i>
                Todos los cursos
            </button>

            
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="bg-white shadow px-4 h-12 rounded-lg text-gray-700 mr-4">
                    <i class="fa-solid fa-tags text-xs mr-2"></i>
                    Categorias
                    <i class="fa-solid fa-chevron-down text-xs ml-2"></i>
                </button>

                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                    @foreach ($categories as $category)
                        <a class="cursor-pointer block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white" wire:click="$set('category_id', '{{ $category->id }}')" x-on:click="dropdownOpen = false" >
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
                
            </div>
            <div x-data="{ dropdownOpen: false }" class="relative">
                <button @click="dropdownOpen = !dropdownOpen" class="bg-white shadow px-4 h-12 rounded-lg text-gray-700 mr-4">
                    <i class="fa-solid fa-level-up text-xs mr-2"></i>
                    Niveles
                    <i class="fa-solid fa-chevron-down text-xs ml-2"></i>
                </button>

                <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                    @foreach ($levels as $level)
                        <a class="cursor-pointer block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white" wire:click="$set('level_id', '{{ $level->id }}')" x-on:click="dropdownOpen = false">
                            {{ $level->name }}
                        </a>
                    @endforeach
                </div>
                
            </div>

        </div>
    </div>

    <section class="my-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-x-6 gap-y-8">

            
            @foreach ($course as $cr)
                <x-course-card :cr="$cr" />
            @endforeach

        </div>
    </section>

    <div class="max-w-7xl mx-auto px-4 pb-4 sm:px-6 lg:px-8">
        {{ $course->links() }}
    </div>
</div>

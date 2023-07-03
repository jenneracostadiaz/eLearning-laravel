<x-app-layout>
    <section class="bg-gray-700 py-12 mb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
            <figure>
                <img class="h-20 object-cover" src="{{ Storage::url($course->image->url) }}" alt="">
            </figure>
            <div class="text-white">
                <h1 class="text-4xl">{{ $course->title }}</h1>
                <h2 class="text-xl mb-3">{{ $course->subtitle }}</h1>
                <p class="mb-2"><i class="fa-brands fa-freebsd"></i> Nivel: {{ $course->level->name }}</p>
                <p class="mb-2"><i class="fa-brands fa-freebsd"></i>Categoria: {{ $course->category->name }}</p>
                <p class="mb-2"><i class="fa-brands fa-freebsd"></i>Matriculados: {{ $course->students_count }}</p>
                <p><i class="fa-brands fa-freebsd"></i> Calificación: {{ $course->rating }}</p>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div class="col-span-2">
            <section>
                <h1 class="font-bold text-3xl mb-2">¿Qué aprenderás?</h1>
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-2">
                    @foreach ($course->goals as $goal)
                        <li class="text-gray-700 text-base"><i class="fa-solid fa-check"></i> {{ $goal->name }}</li>
                    @endforeach
                </ul>
            </section>

            <section class="mb-12 max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                <h1 class="font-bold text-3xl mb-2">Temario</h1>
        
                @foreach ($course->sections as $section)
        
                    <article class="mb-4 shadow" 
                    @if ($loop->first)
                        x-data="{ open: true }"
                    @else
                        x-data="{ open: false }"
                    @endif>
                        <header class="border border-gray-200 px-4 py-2 cursor-pointer bg-gray-200" x-on:click="open = !open">
                            <h1 class="font-bold text-lg text-gray-600">{{ $section->name }}</h1>
                        </header>
                        <div class="bg-white py-2 px-4" x-show="open">
                            <ul class="grid gap-4">
                                @foreach ($section->lessons as $lesson)
                                    <li class="text-gray-700 text-base"><i class="fa-solid fa-circle-play"></i> {{ $lesson->name }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </article>
                @endforeach
            </section>
        
            <section class="mb-12 max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                <h1 class="font-bold text-3xl mb-2">Requisitos</h1>
                <ul>
                    @foreach ($course->requirements as $requeriment)
                        <li class="text-gray-700 text-base"><i class="fa-solid fa-check"></i> {{ $requeriment->name }}</li>
                    @endforeach
                </ul>
            </section>
        
            <section class="mb-12 max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
                <h1 class="font-bold text-3xl mb-2">Descripción</h1>
                <div class="text-gray-600 text-base">
                    {!! $course->description !!}
                </div>
            </section>
        </div>

        <div class="col-span-1">
            <section class="card mb-4">
                <div class="card-body">
                    <div class="flex items-center mb-4">
                        <img class="h-12 w-12 object-cover rounded-full shadow-lg" src="{{ $course->teacher->profile_photo_url }}" alt="">
                        <div class="ml-4">
                            <h1 class="font-bold text-gray-500 text-xl">Prof. {{  $course->teacher->name }}</h1>
                            <a class="text-blue-400 text-sm font-bold" href="">{{ '@' . Str::slug($course->teacher->name, '') }}</a>
                        </div>
                    </div>

                    <div>
                        <a href="" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Llevar este curso</a>
                    </div>
                </div>
            </section>

            <aside>
                @foreach ($similares as $similar)
                    <article class="flex mb-6">
                        <img class="h-20 w-40 object-cover" src="{{ Storage::url($similar->image->url) }}" alt="">
                        <div class="ml-3">
                            <h1><a class="font-bold text-gray-500 mb-3" href="">{{ $similar->title }}</a></h1>
                            <div>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{ $similar->category->name }}</span>
                                <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{ $similar->rating }}</span>
                            </div>
                        </div>
                    </article>
                @endforeach
            </aside>
        </div>
    </section>

    
</x-app-layout>
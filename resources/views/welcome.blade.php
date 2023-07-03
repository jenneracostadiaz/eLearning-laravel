<x-app-layout>
    
    <section class="bg-cover" style="background-image: url({{ asset('img/home/people-2557399_1920.jpg') }})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-52">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Laravel</h1>
                <p class="text-white text-lg mt-2 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt facilis culpa nam fuga, et eum inventore vel modi! Molestias nemo sit dignissimos officia explicabo, illo laudantium illum qui voluptatem. Omnis.</p>
                <!-- component -->
                <!-- This is an example component -->
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                    type="search" name="search" placeholder="Search">
                    <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                        <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                            width="512px" height="512px">
                            <path
                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-24 max-w-7xl mx-auto">
        <h1 class="text-gray-600 text-center text-3xl mb-6">Contenido</h1>
        <div class="max-w7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl w-full h-48 object-cover" src="{{ asset('img/home/people-2557399_1920.jpg') }}" alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, deleniti nam nemo impedit illum inventore alias optio repudiandae ab culpa officiis est sit doloribus nihil sint facere, ut quasi totam.</p>
                    </header>
                </figure>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl w-full h-48 object-cover" src="{{ asset('img/home/people-2557399_1920.jpg') }}" alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Manual de Laravel</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, deleniti nam nemo impedit illum inventore alias optio repudiandae ab culpa officiis est sit doloribus nihil sint facere, ut quasi totam.</p>
                    </header>
                </figure>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl w-full h-48 object-cover" src="{{ asset('img/home/people-2557399_1920.jpg') }}" alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Blog</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, deleniti nam nemo impedit illum inventore alias optio repudiandae ab culpa officiis est sit doloribus nihil sint facere, ut quasi totam.</p>
                    </header>
                </figure>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl w-full h-48 object-cover" src="{{ asset('img/home/people-2557399_1920.jpg') }}" alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Desarrollo web</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, deleniti nam nemo impedit illum inventore alias optio repudiandae ab culpa officiis est sit doloribus nihil sint facere, ut quasi totam.</p>
                    </header>
                </figure>
            </article>
        </div>
    </section>

    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">No sabes que estuidar?</h1>
        <p class="text-center text-white" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique numquam quisquam ab, earum unde maiores corporis. Alias fugiat molestias unde, consectetur et quas enim omnis, neque quod illum magni in?</p>
        <div class="flex justify-center mt-4">
            <a href="{{ route('courses.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-blod py-2 px-4 rounded">Catálogo de cursos</a>
        </div>
    </section>

    <section class="my-24">
        <h1 class="text-center text-3xl text-gray-600">ULTIMOS CURSOS</h1>
        <p class="text-center text-gray-600 text-sm mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum sunt, fuga deleniti placeat necessitatibus deserunt totam facere ex? Facere, a consequatur! In sequi ullam error doloremque repudiandae eos deleniti fugit!</p>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-x-6 gap-y-8">

            
            @foreach ($course as $cr)
            
            <x-course-card :cr="$cr" />
                
            @endforeach

        </div>
    </section>

</x-app-layout>
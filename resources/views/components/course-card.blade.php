@props(['cr'])

<article class="card">
    <img class="h-36 w-full object-cover" src="{{ Storage::url($cr->image->url) }}" alt="">
    <div class="card-body">
        <h1 class="text xl text-gray-700 mb-2 leading-6">{{ Str::limit($cr->title, 40, '...') }}</h1>
        <p class="text-gray-500 mb-2 text-sm" >Prof: {{ $cr->teacher->name; }}</p>

        <div class="flex">
            <ul class="flex text-sm">
                <li class="mr-1">
                    <i class="fa-solid fa-star text-{{ $cr->rating >= 1 ? 'yellow' : 'gray' }}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fa-solid fa-star text-{{ $cr->rating >= 2 ? 'yellow' : 'gray' }}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fa-solid fa-star text-{{ $cr->rating >= 3 ? 'yellow' : 'gray' }}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fa-solid fa-star text-{{ $cr->rating >= 4 ? 'yellow' : 'gray' }}-400"></i>
                </li>
                <li class="mr-1">
                    <i class="fa-solid fa-star text-{{ $cr->rating >= 5 ? 'yellow' : 'gray' }}-400"></i>
                </li>
            </ul>
            <p>{{ $cr->studens_count }}</p>
        </div>

        <a href="{{ route('courses.show', $cr) }}" class="block text-center w-full mt-4 bg-blue-500 hover:bg-blue-700 text-white font-blod py-2 px-4 rounded">Más información</a>
    </div>
</article>
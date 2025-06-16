<nav class="container mx-auto px-4 py-4 mt-20 md:mt-24 text-gray-700" aria-label="Breadcrumb">
    <ol class="list-none p-0 inline-flex">
        <li class="flex items-center">
            <a href="{{ route('home') }}" class="text-blue-500 hover:text-blue-700">Home</a>
            <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path
                    d="M96 480c-3.797 0-7.557-1.125-10.74-3.375c-6.594-4.5-8.875-13.56-4.375-20.16L246.3 256L80.89 55.54c-4.5-6.594-2.219-15.66 4.375-20.16c6.594-4.5 15.66-2.219 20.16 4.375L276.5 245.9c4.5 6.594 4.5 14.81 0 21.41L105.8 476.6C102.7 478.9 99.4 480 96 480z" />
            </svg>
        </li>
        @foreach($breadcrumbs as $link)
            <li class="flex items-center">
                @if(isset($link['url']))
                    <a href="{{ $link['url'] }}" class="text-blue-500 hover:text-blue-700">{{ $link['title'] }}</a>
                @else
                    <span class="text-gray-900">{{ $link['title'] }}</span>
                @endif
                @if(!$loop->last)
                    <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512"><!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M96 480c-3.797 0-7.557-1.125-10.74-3.375c-6.594-4.5-8.875-13.56-4.375-20.16L246.3 256L80.89 55.54c-4.5-6.594-2.219-15.66 4.375-20.16c6.594-4.5 15.66-2.219 20.16 4.375L276.5 245.9c4.5 6.594 4.5 14.81 0 21.41L105.8 476.6C102.7 478.9 99.4 480 96 480z" />
                    </svg>
                @endif
            </li>
        @endforeach
    </ol>
</nav>

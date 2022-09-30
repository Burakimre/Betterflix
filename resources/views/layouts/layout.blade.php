<!DOCTYPE html>
<html class="text-[1.5vw] sm:text-[.75vw] 2xl:text-[14px]" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        
        <title>@yield('title')
            @hasSection('title') - @endif Betterflix
        </title>
    </head>
    <body class="text-[1.5vw] sm:text-[.75vw] 2xl:text-[14px]">
        <nav class="relative h-[41px] md:h-[70px] w-full top-0 z-50">
            <div class="h-full w-full bg-transparent">
                <div class="flex h-full items-center px-[4%] xl:px-[60px] bg-gradient-to-b from-black/[30%] to-transparent">
                    <a aria-label="Netflix" class="mr-[25px] font-['nf-icon'] text-[#e50914] text-[1.8em] md:text-[25px] before:content-['\e5d0']" href="/browse"></a>
                    <ul class="flex [&>*]:text-neutral-200 [&>*]:ml-[20px] [&>*]:hidden md:[&>*]:block text-xl xl:text-[14px] text-white">
                        <li class="md:first:hidden first:block">
                            <a class="flex items-center h-full after:content-[''] after:border-transparent after:border-t-white after:border-solid after:border-[5px] after:border-b-0 after:ml-[5px]" href="">Browse</a>
                        </li>
                        <li class="font-bold"><a href="/browse">Home</a></li>
                        <li><a href="/browse">Series</a></li>
                        <li><a href="/browse">Films</a></li>
                        <li><a href="/browse">New & Popular</a></li>
                        <li><a href="/browse">My List</a></li>
                        <li><a href="/browse">Browse by Languages</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="overflow-x-hidden z-0 mt-[-41px] md:mt-[-70px] bg-neutral-900">
            @yield('content')
        </main>
    </body>
</html>

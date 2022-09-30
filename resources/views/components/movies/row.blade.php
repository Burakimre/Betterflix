<div class="relative my-[3vw]">
    <h2 class="leading-snug">
        <a class="inline-block min-w-[6em] mt-0 mb-[0.5em] mx-[4%] text-[1.4vw] text-neutral-200 font-bold" href="#">
            <div class="table-cell align-bottom text-[1.4vw] leading-[1.25vw]">{{ $title }}</div>
        </a>
    </h2>
    <div class="relative group">
        <div class="px-[4%]">
            <div class="flex overflow-visible scroll-smooth">
                @foreach (json_decode($media) as $item)
                    <div class="flex-none w-1/2 md:w-1/4 lg:w-1/5 xl:w-1/6 px-[0.2vw] first:pl-0">
                        <a href="#">
                            <div class="relative overflow-hidden rounded-[0.2vw]">
                                <img class="w-full" src="https://image.tmdb.org/t/p/w300/{{ $item->backdrop_path }}">
                            </div>
                        </a>
                    </div>
                @endforeach

                {{-- @for ($i = 0; $i < 24; $i++)
                    <div class="flex-none w-1/2 md:w-1/4 lg:w-1/5 xl:w-1/6 px-[0.2vw] first:pl-0">
                        <a href="#">
                            <div class="relative overflow-hidden rounded-[0.2vw]">
                                <img class="w-full" src="https://image.tmdb.org/t/p/w300/{{ $data->backdrop_path }}">
                            </div>
                            @if ($i % 2 == 0)
                                <div class="relative overflow-hidden rounded-[0.2vw]">
                                    <img class="w-full" src="{{ url('/images/sandman.jpg') }}">
                                </div>
                            @else
                                <div class="relative overflow-hidden rounded-[0.2vw]">
                                    <img class="w-full" src="{{ url('/images/jojo.jpg') }}">
                                </div>
                            @endif
                        </a>
                    </div>
                @endfor --}}
            </div>
            <span class="flex justify-center absolute top-0 right-0 bottom-0 w-[4%] bg-neutral-900/50 hover:bg-neutral-900/[70%] text-white rounded-l-[4px] cursor-pointer [&>*]:hover:scale-125">
                <b class="hidden group-hover:flex font-['nf-icon'] font-normal text-[2.5vw] self-center transition ease-out delay-[0ms] hover:font-bold before:content-['\e867']"></b>
            </span>
        </div>
    </div>
</div>
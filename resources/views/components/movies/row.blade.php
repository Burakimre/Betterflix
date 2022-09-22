<div class="relative my-[3vw]">
    <h2 class="leading-snug">
        <a class="inline-block min-w-[6em] mt-0 mb-[0.5em] mx-[4%] text-neutral-200 font-bold" href="#">
            <div class="table-cell align-bottom text-[1.4vw] leading-[1.25vw]">Series</div>
        </a>
    </h2>
    <div>
        <div class="px-[4%]">
            <div class="flex overflow-visible">
                @for ($i = 0; $i < 20; $i++)
                    <div class="flex-none w-1/6 px-[0.2vw] first:pl-0">
                        <a href="#">
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
                @endfor
            </div>
            <span class="">
                <b class="indicator-icon icon-rightCaret"></b>
            </span>
        </div>
    </div>
</div>
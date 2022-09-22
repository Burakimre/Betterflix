<div class="relative block">
    <div class="pb-[40%] mb-[20px]">
        <div class="absolute h-[56.25vw] w-full">
            <div class="absolute inset-0">
                <img class="w-full" src="{{ url('/images/formula1.webp') }}" alt="billboard"/>
                <div class="absolute inset-0 bg-gradient-to-r from-black/[60%] to-transparent"></div>
                <div class="hero-vignette"></div>
            </div>
            <div class="absolute inset-0">
                <div class="flex flex-col justify-end absolute top-0 bottom-[35%] left-[4%] 2xl:left-[60px] w-[36%]">
                    <div class="w-full">
                        <div>
                            <img src="{{ url('/images/formula1text.webp') }}" alt="billboard"/>
                        </div>
                        <div class="text-white text-[1.2vw] text-shadow leading-[normal] mt-[1.5vw]">
                            Coureurs, managers en teameigenaars leven in een snelle wereld – zowel op als buiten de racebaan – tijdens elk moordend seizoen vol Formule 1-races.
                        </div>
                        <div class="flex mt-[1.5vw]">
                            <x-common.button class="bg-white text-black hover:bg-white/75 transition ease-in-out">
                                <x-slot:icon>
                                    <x-common.icon class="h-10 w-10">
                                        <svg class="w-full h-full" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M4 2.69127C4 1.93067 4.81547 1.44851 5.48192 1.81506L22.4069 11.1238C23.0977 11.5037 23.0977 12.4963 22.4069 12.8762L5.48192 22.1849C4.81546 22.5515 4 22.0693 4 21.3087V2.69127Z"></path></svg>
                                    </x-common-icon>
                                </x-slot:icon>
                                <x-slot:label>
                                    Play
                                </x-slot:label>
                            </x-common.button>
                            
                            <x-common.button class="bg-neutral-500/[70%] text-white hover:bg-neutral-500/[40%] transition ease-in-out">
                                <x-slot:icon>
                                    <x-common.icon class="h-10 w-10">
                                        <svg class="h-full w-full fill-white" width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3ZM1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12ZM13 10V18H11V10H13ZM12 8.5C12.8284 8.5 13.5 7.82843 13.5 7C13.5 6.17157 12.8284 5.5 12 5.5C11.1716 5.5 10.5 6.17157 10.5 7C10.5 7.82843 11.1716 8.5 12 8.5Z"></path></svg>
                                    </x-common-icon>
                                </x-slot:icon>
                                <x-slot:label>
                                    More Info
                                </x-slot:label>
                            </x-common.button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
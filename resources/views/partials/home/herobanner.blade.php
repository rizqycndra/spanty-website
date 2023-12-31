{{-- CONTAINER --}}
<div class="bg-mc overflow-hidden">

    {{-- WRAPPER --}}
    <div class="max-w-screen-xl mx-auto px-5 pt-5 md:pt-10 pb-16 flex gap-16 items-stretch">

        {{-- CONTENT --}}
        <div class="text-sc max-w-[500px] w-full flex flex-col gap-[30px] shrink-0">

            <h1 class="text-[3.3rem] md:text-[4.375rem] font-[InterBold] leading-[100%] text-cc">{{ $heroBanner['mainheading'] }}</h1>
            <p>{{ $heroBanner['description'] }}</p>

            <div class="flex overflow-x-auto gap-[30px] w-full">

                @include('partials.home.minisearchform')

                {{-- SERVICES --}}
                <div class="flex flex-col gap-[30px] min-w-[200px]">

                    <h2 class="font-bold text-[20px]">Our Services</h2>

                    @foreach ($heroBanner['service'] as $s)
                        <div>
                            <span class="iconify text-[30px] mb-[10px]" data-icon="{{ $s['icon'] }}"></span>
                            <h3>{{ $s['text'] }}</h3>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    
        {{-- IMAGE --}}
        <div class="relative w-full">
            <div class="absolute top-10 left-0 z-10 w-[calc(100%_+_15rem)] h-full">
                <img class="w-full" src="/img/hero-banner1.jpg"/>
            </div>
        </div>

    </div>

</div>
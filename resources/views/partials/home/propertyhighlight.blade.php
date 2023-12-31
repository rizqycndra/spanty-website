<div class="max-w-screen-xl px-[20px] mx-auto md:px-5 py-16 grid md:grid-cols-2 lg:grid-cols-3 gap-6">

    <div>
        <h4 class="text-[3rem] lg:text-[5rem] leading-[100%] font-[InterBold]">Featured Listing</h4>
        <a href="/properties" class="mt-[15px] flex items-center gap-[10px] [&_svg:last-child]:hover:translate-x-1">
            <span class="font-semibold">More</span>
            <span class="iconify text-[1.5rem] transition-transform" data-icon="ep:right"></span>
        </a>
    </div>

    @foreach ($properties ?? [] as $property)
        <x-property-card :$property/>
    @endforeach

</div>
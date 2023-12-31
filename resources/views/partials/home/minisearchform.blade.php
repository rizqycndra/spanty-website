{{-- CONTAINER --}}
<div class="bg-sc min-w-[240px] p-[22px] w-full flex flex-col gap-[35px] hover:bg-bc3 hover:shadow-2xl transition-all cursor-pointer">

    <div class="text-bc flex flex-col gap-[29px]">
        @foreach ($mSearchForm as $ms)
            
            <div class="flex gap-[12px]">
                <div class="p-[10px] bg-bc3 w-fit h-fit">
                    <span class="iconify text-[22px] text-bc2" data-icon="{{ $ms['icon'] }}"></span>
                </div>
                <div>
                    <h3 class="text-bc2 text-sm">{{ $ms['title'] }}</h3>
                    <p class="font-bold">{{ $ms['value'] }}</p>
                </div>
            </div>

        @endforeach
    </div>

    <button class="px-10 py-4 bg-bc font-bold transition-colors hover:bg-bc2">
        Search
    </button>

</div>
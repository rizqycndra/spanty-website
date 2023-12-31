{{-- <?php dd($property->feature)?> --}}

<a href="#" class="[&>div]:hover:bg-bc3/30 max-w-[400px] border border-bc3">
    
    <img src="{{ $property->img ?? '/img/property/dummy.png' }}"/>

    {{-- DESCRIPTION --}}
    <div class="p-[1.5rem]">

        <p>
            <span class="text-[1.5rem] font-semibold">Rp {{ number_format($property->price ?? 0, 0, '.', '.') ?? 0}}</span>
            <span class="text-bc2">/month</span>
        </p>
        <h3 class="text-[1.5rem] font-semibold mt-[0.2rem]">{{ $property->name ?? "Property Name" }}</h3>
        <span class="text-bc2 inline-block mt-[0.8rem]">{{ $property->location ?? "Location" }}</span>

        {{-- FEATURE --}}
        @if ($property->feature ?? false && is_array($property->feature))
            <div class="flex justify-between items-center gap-4 mt-[1rem]">
                @foreach ($property->feature ?? [] as $fe)
                    <div class="flex gap-2 items-center">
                        <span class="iconify text-[1.5rem]" data-icon="{{ $fe->icon ?? 'material-symbols:bed-outline' }}"></span>
                        <span class="text-bc2 text-[0.75rem]">{{ $fe->value ?? '0 Beds' }}</span>
                    </div>
                @endforeach
            </div>
        @endif

    </div>

</a>
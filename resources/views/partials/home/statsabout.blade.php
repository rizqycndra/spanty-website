<?php

$statsData = [
    [
        "top"   => "9",
        "text"  => "Years experience in real estate"
    ],
    [
        "top"   => "$23K",
        "text"  => "Total Net Profit Every Month"
    ],
    [
        "top"   => "17",
        "text"  => "Every month a new happy customer"
    ],
    [
        "top"   => "$4K-7K",
        "text"  => "Approximate Profit In 20 Business Days"
    ]
];

?>

{{-- CONTAINER --}}
<div class="max-w-screen-xl mx-auto my-5 md:my-10 px-[20px] lg:items-center md:px-20 flex flex-col lg:flex-row gap-10 md:gap-16 [&>*]:w-full">

    {{-- STATISTIC --}}
    <div class="grid grid-cols-2 gap-10">
        @foreach ($statsData as $sd)
            <h4 class="flex flex-col gap-[0]">
                <span class="text-mc text-[40px] md:text-[50px] font-bold">{{ $sd['top'] }}</span>
                <span class="text-bc2">{{ $sd['text'] }}</span>
            </h4>
        @endforeach
    </div>

    {{-- ABOUT --}}
    <div>
        <h3 class="text-mc text-[30px] md:text-[40px] leading-[120%] font-[InterBold] -tracking-2">We use Real Estate to show our appreciation of the world.</h3>
        <p class="text-bc2 mt-[10px]">We provide equity and debt capital globally to back projects that make an impact.</p>
        <a href="#" class="px-8 py-4 text-sm bg-bc hover:bg-mc transition-colors block w-fit text-sc font-semibold mt-[20px]">Know More</a>
    </div>

</div>
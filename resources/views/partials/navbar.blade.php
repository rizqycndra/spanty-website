<?php

$navProps = [
    "link" => [
        
        [
            "name"      => "Home",
            "redirect"  => "/"
        ],
        [
            "name"      => "Properties",
            "redirect"  => "/property"
        ],
        [
            "name"      => "Agents",
            "redirect"  => "/agent"
        ],
        [
            "name"      => "Pages",
            "redirect"  => "#",
            "more"      => [
                [
                    "name"      => "Blog",
                    "redirect"  => "/blog"
                ],
                [
                    "name"      => "FAQ",
                    "redirect"  => "/faq"
                ],
                [
                    "name"      => "Term & Condition",
                    "redirect"  => "/termcondition"
                ],
            ]
        ],
    ],
    "CTA" => [
        "text"      => "Contact Us",
        "redirect"  => '/contact'
    ]
];

?>

{{-- CONTAINER --}}
<nav class="w-full bg-mc py-4">

    {{-- WRAPPER + MAIN COMPONENT --}}
    <div id="navComponent" class="px-5 py-4 bg-mc mx-auto text-sc flex items-center justify-between max-w-screen-xl">

        {{-- BRAND --}}
        <span class="font-[InterBold] text-[27px] relative">
            Spanty
            <span class="font-light absolute -right-4 text-[20px]">&reg;</span>
        </span>

        {{-- LINK --}}
        <div class="hidden md:flex items-center gap-[60px] font-medium">
            @foreach ($navProps['link'] as $np)

                <div class="relative [&_.moretab]:hover:flex inline-block flex items-center gap-1 [&>a]:hover:opacity-75 [&_svg]:hover:opacity-75 transition-opacity cursor-pointer">

                    <a href="{{ $np['redirect'] }}">{{ $np['name'] }}</a>

                    @if ($np['more'] ?? false)
                        <span class="iconify" data-icon="icon-park-outline:down"></span>
                        <div class="top-full absolute pt-3">
                            <div class="moretab hidden bg-sc text-bc flex flex-col gap-4 px-5 py-4 shadow-md">
                                @foreach ($np['more'] as $npi)
                                    <a class="whitespace-nowrap hover:opacity-75 transition-opacity" href="{{ $npi['redirect'] }}">{{ $npi['name'] }}</a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>

            @endforeach
        </div>

        {{-- CTA --}}
        @if ($navProps['CTA'] ?? false)
            <a class="hidden md:block whitespace-nowrap px-8 py-4 bg-sc text-bc font-semibold text-sm hover:bg-bc hover:text-sc transition-colors" href="{{ $navProps['CTA']['redirect'] }}">{{ $navProps['CTA']['text'] }}</a>
        @endif

        <div class="md:hidden">
            <button>
                <span class="iconify text-[32px]" data-icon="ion:menu"></span>
            </button>
        </div>

    </div>

</nav>

<div id="navFixed" class="fixed bg-mc shadow-lg -translate-y-full top-0 left-0 w-full z-50 transition-transform duration-300"></div>

{{-- SCRIPT for Clone NavComponent to Fixed Container && add scroll event --}}
<script>
var navComponent = document.getElementById("navComponent");
var navFixed = document.getElementById("navFixed");
var clonedNavComponent = navComponent.cloneNode(true)
navFixed.appendChild(clonedNavComponent)
window.addEventListener('scroll', () => {
    if (window.scrollY > 80) {
        navFixed.classList.replace('-translate-y-full', 'translate-y-0')
    } else {
        navFixed.classList.replace('translate-y-0', '-translate-y-full')
    }
})
</script>
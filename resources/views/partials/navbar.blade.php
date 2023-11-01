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

<nav class="fixed w-full top-0 left-0 bg-mc text-sc">

    <div class="px-5 py-8 mx-auto flex items-center justify-between max-w-screen-xl">

        <span class="font-[InterBold] text-[27px] relative">
            Spanty
            <span class="font-light absolute -right-4 text-[20px]">&reg;</span>
        </span>

        <div class="flex items-center gap-[60px] font-medium">
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

        @if ($navProps['CTA'] ?? false)
            <a class="px-8 py-4 bg-sc text-bc font-semibold text-sm hover:bg-bc hover:text-sc transition-colors" href="{{ $navProps['CTA']['redirect'] }}">{{ $navProps['CTA']['text'] }}</a>
        @endif

    </div>

</nav>
<?php

$footerProps = [
    "socialmedia" => [
        [
            "text"      => "Instagram",
            "redirect"  => "https://instagram.com/"
        ],
        [
            "text"      => "Facebook",
            "redirect"  => "https://facebook.com/"
        ],
        [
            "text"      => "Twitter",
            "redirect"  => "https://twitter.com/"
        ],
    ],
    "pagelink" => [
        [
            "text"      => "Home",
            "redirect"  => "/"
        ],
        [
            "text"      => "About Us",
            "redirect"  => "/about"
        ],
        [
            "text"      => "Career",
            "redirect"  => "/career"
        ],
        [
            "text"      => "Blog",
            "redirect"  => "/blog"
        ],
        [
            "text"      => "Contact us",
            "redirect"  => "/contact"
        ],
    ]
]

?>

{{-- CONTAINER --}}
<footer class="max-w-screen-xl mx-auto md:px-5 flex flex-col md:flex-row w-full">

    {{-- INFO --}}
    <div class="bg-mc text-sc px-8 py-10 w-full md:w-fit md:px-14 md:py-12 max-w-[500px] relative before:content-[''] before:bg-mc before:absolute before:top-0 before:right-[calc(100%_-_10px)] before:w-[100vw] before:h-[100%]">

        {{-- CONTACT --}}
        <h4 class="text-[40px] md:text-[50px] font-[InterBold] leading-[110%]">We'd love to hear you from</h4>
        <p class="mt-[20px] max-w-[75%]">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <h4 class="mt-[40px] uppercase">Get In Touch</h4>
        <p class="text-sc2 mt-[20px]">2118 Thornbridge Cir.<br/>Syracuse,<br/>Connecticut 35624</p>
        <a href="tel:2085550112" class="text-sc2 hover:text-sc mt-[20px] inline-block">(208) 555-0112</a>

        {{-- SOCIAL MEDIA --}}
        <div class="mt-[40px] flex gap-[20px] items-center">
            @foreach ($footerProps['socialmedia'] as $sm)
                <a href="{{ $sm['redirect'] }}" class="uppercase underline hover:opacity-50" target="_blank">{{ $sm['text'] }}</a>
            @endforeach
        </div>

    </div>

    {{-- CONTACT FORM --}}
    <div class="px-8 py-8 w-full md:w-fit md:px-14 py-12">

        {{-- FORM --}}
        <h4 class="text-mc font-[InterBold] text-[40px] md:text-[50px] mb-[20px]">Contact Us</h4>
        <form action="#" class="[&_input]:w-full [&_input]:bg-[#F8F8F8] [&_input]:p-[10px_16px] flex flex-col gap-[20px]">
            @csrf

            {{-- ROW --}}
            <div class="flex flex-col md:flex-row items-center gap-[20px]">
                <input type="text" name="firstname" placeholder="First Name">
                <input type="text" name="firstname" placeholder="Last Name">
            </div>

            {{-- ROW --}}
            <div class="flex flex-col md:flex-row items-center gap-[20px]">
                <input type="email" name="email" placeholder="Email">
                <input type="tel" name="phonenumber" placeholder="Phone Number">
            </div>

            <textarea name="message" placeholder="Message" rows="4" class="w-full bg-[#F8F8F8] p-[10px_16px]"></textarea>

            <button type="submit" class="bg-bc text-sc p-[14px_40px] w-fit hover:bg-mc transition-colors">Submit</button>

        </form>

        {{-- PAGE LINK --}}
        <div class="mt-[50px] flex items-center gap-[30px_50px] whitespace-nowrap flex-wrap">
            @foreach ($footerProps['pagelink'] as $pl)
                <a href="{{ $pl['redirect'] }}" class="text-bc2 hover:text-bc" target="_blank">{{ $pl['text'] }}</a>
            @endforeach
        </div>
        
    </div>

</footer>
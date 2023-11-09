<div>

    <div class="px-5 py-10 overflow-y-auto flex gap-[30px] items-center justify-between max-w-screen-xl mx-auto">
        @foreach ($partnerListData as $pl)
            
            <div>
                <img class="min-w-[150px]" src="/img/partner/{{ $pl }}.png"/>
            </div>

        @endforeach
    </div>

</div>
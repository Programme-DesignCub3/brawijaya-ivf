@component('layouts.app', ['white_nav' => true])
    <section class="bg-g-dark-blue" id="service">
        <div class="container flex flex-col items-center justify-center gap-8 py-20 pt-44 text-lg text-white">
            <h2 class="text-4xl font-black">{{ $why->title }}</h2>
            <img class="mx-auto mb-2 w-1/2 object-contain object-top max-md:order-first" src="{{ asset('assets/why.webp') }}"
                alt="">
            <div class="flex flex-col items-center gap-6">


                <div>{!! $why->content !!}</div>

                <div>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit dolorem earum vitae accusantium
                    velit quia
                    totam ducimus perferendis animi, cumque qui? Similique corrupti nemo ab, magni eos quis voluptate quae?
                    Blanditiis tempora dolor voluptatum atque saepe consectetur veniam repudiandae nemo similique placeat
                    sequi autem,
                    porro corporis sunt animi, asperiores beatae quasi illo ullam. Unde eos, expedita sunt nulla eligendi
                    ipsam!
                    Consequuntur est aliquid mollitia ipsam voluptas dolorum, a officia iure accusamus tenetur delectus
                    molestiae
                    praesentium distinctio dolorem vero enim aut aliquam sit corrupti eos nostrum. Ex doloremque possimus
                    alias esse.
                </div>
            </div>
        </div>
    </section>
@endcomponent

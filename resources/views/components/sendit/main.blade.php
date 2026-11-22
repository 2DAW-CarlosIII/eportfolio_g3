
@props(['titulo' => null])

@php
    $herramientas = [
        ['nombre' => 'Our best Places', 'color' => false],
        ['nombre' => 'See more', 'color' => false],
        ['nombre' => 'Lorem ipsum', 'color' => true],
        ['nombre' => 'Best tools', 'color' => false],
        ['nombre' => 'Lost paper', 'color' => false],
        ['nombre' => 'Our best Places', 'color' => false],
        ['nombre' => 'Our best Places', 'color' => false],
        ['nombre' => 'Our best Places', 'color' => false],
    ];

    $planes = [
        [
            'nombre' => 'SendIt Monthly License',
            'precio' => '$10',
            'periodo' => '/month',
            'color' => false,
            'caracteristicas' => [
                'Boost your productivity with SendIt',
                'Available for Google Chrome and Chromium',
                'License for 3 devices',
                'Permanent access to the SendIt community',
            ],
        ],
        [
            'nombre' => 'SendIt Yearly License',
            'precio' => '$80',
            'periodo' => '/year',
            'color' => true,
            'caracteristicas' => [
                'Save 50% - 6 months free',
                'Boost your productivity with SendIt',
                'Available for Google Chrome and Chromium',
                'License for 3 devices',
                'Permanent access to theSendIt community',
                'Get all updates and new features for one year',
            ],
        ],
        [
            'nombre' => 'SendIt Perpetual License',
            'precio' => '$199',
            'periodo' => '/one-time',
            'color' => false,
            'caracteristicas' => [
                'Pay once, use forever',
                'Boost your productivity with SendIt',
                'Available for Google Chrome and Chromium',
                'License for 3 devices',
                'Permanent access to theSendIt community',
                'Get all updates and new features',
            ],
        ],
    ];

    $preguntas = [
        'What does SendIt?',
        'What coding languages ?',
        'How fast will I get my coded website?',
        'How can I check the progress of my website?',
        'If I have a blog, do you count each post as a separate page?',
    ];

    $respuesta = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Omnis quae distinctio nemo natus, accusantium magni, nam eveniet sint iusto odio assumenda laborum. Nobis vero quas consequatur aspernatur blanditiis maiores expedita?';
@endphp

<main>

    {{-- Hero --}}
    <section class="px-8 py-20 bg-[#0d0e11] relative items-center overflow-hidden max-h-[900px]">
        <div class="flex flex-col gap-6 items-center text-white mx-auto w-full max-w-5xl">

            <div class="flex gap-4 items-center">
                <div class="flex gap-1">
                    @for ($i = 0; $i < 5; $i++)
                        <i class="bi bi-star-fill text-yellow-400"></i>
                    @endfor
                </div>

                <span class="text-xs text-gray-400">
                    4.8/5 (45k reviews)
                </span>
            </div>

            <h1 class="text-5xl font-semibold tracking-tighter text-center">
                adipisicing elit<br> quia eius ratione natus.
            </h1>

            <strong class="font-normal text-xl text-center">
                Lorem ipsum, dolor sit amet consectetur<br> adipisicing elit quia eius ratione natus.
            </strong>

            <form action="#" method="post" class="flex gap-4 items-center">
                <input name="email" type="email" placeholder="Enter your email"
                    class="border border-gray-700 focus:outline-hidden px-4 py-1 bg-[#ebebeb]/5 rounded-xl">

                <input type="submit"
                    class="cursor-pointer bg-[#cff245] text-black px-4 py-1 rounded-xl"
                    value="Join Waitlist">
            </form>

            <small class="text-xs px-2 text-center">
                By clicking Join Waitlist you're confirming that you agree with our
                <a href="#" class="underline">Terms and Conditions</a>.
            </small>

            <div class="mt-20">
                <img src="{{ asset('sendit/imgs/hero-black.png') }}"
                    class="mx-auto w-full max-w-[1000px] rounded shadow-sm" alt="">
            </div>
        </div>
    </section>

    {{-- Contenido propio de cada vista --}}
    {{ $slot }}

    {{-- Data / Features --}}
    <section id="features" class="px-8 py-20 bg-[#f6f7fa] rounded-3xl">
        <div class="flex flex-col gap-16 items-center mx-auto w-full max-w-5xl">

            <h2 class="text-5xl font-semibold tracking-tighter text-center">
                Securize your<br>data with us
            </h2>

            <div class="flex flex-col md:grid grid-cols-2 gap-4">

                <div class="col-span-1 flex flex-col gap-4 items-start bg-white rounded-3xl px-8 pb-8">
                    <img src="{{ asset('sendit/imgs/ihpone-mocup3.png') }}"
                        class="max-w-[300px] mx-auto mb-6" alt="">

                    <h3 class="text-xl font-bold">User data</h3>

                    <p class="text-sm text-gray-600">
                        Quo laboriosam quas saepe sunt alias delectus ducimus quidem natus, suscipit id aliquid consectetur.
                        Voluptate officiis iusto rem.
                    </p>

                    <a href="#" class="bg-[#cff245] px-4 py-2 text-black rounded-xl mr-auto">
                        Get Started
                    </a>
                </div>

                <div class="col-span-1 min-h-[500px] flex flex-col gap-4 items-start bg-white rounded-3xl p-8 relative overflow-hidden">
                    <h3 class="text-xl font-bold">Data Collection</h3>

                    <p class="text-sm text-gray-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro magni laudantium maxime, quo laboriosam quas
                        saepe sunt alias delectus ducimus quidem natus.
                    </p>

                    <a href="#" class="bg-[#cff245] px-4 py-2 text-black rounded-xl mr-auto">
                        Get Started
                    </a>

                    <div class="absolute w-full left-0 bottom-0 flex">
                        <img src="{{ asset('sendit/imgs/hero.png') }}"
                            class="max-w-[80%] ml-auto" alt="">
                    </div>
                </div>

                <div class="col-span-2 flex flex-col gap-4 items-center bg-white rounded-3xl p-10 md:p-20">
                    <h3 class="text-xl font-bold">Your data</h3>

                    <p class="text-md text-gray-600 text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi rem et inventore doloribus laborum, quae
                        obcaecati maiores consectetur quam. Dolores exercitationem repellat !
                    </p>

                    <a href="#" class="bg-[#cff245] px-4 py-2 text-black rounded-xl">
                        Get Started
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- Tools --}}
    <section class="px-8 py-20 bg-[#0d0e11]">
        <div class="flex flex-col gap-16 items-center mx-auto w-full max-w-3xl">

            <h2 class="text-5xl font-semibold tracking-tighter text-center text-white">
                And More<br>Tools to use
            </h2>

            <div class="flex flex-wrap justify-center gap-2 w-full">

                @foreach ($herramientas as $herramienta)
                    <div class="flex w-full max-w-[100px] flex-col gap-2 p-8 rounded-xl border {{ $herramienta['color'] ? 'border-gray-700 bg-[#cff245]' : 'border-gray-200 bg-white' }} items-center box-content">

                        <i class="bi bi-{{ $loop->iteration }}-circle-fill text-4xl"></i>

                        <span class="text-center font-bold">
                            {{ $herramienta['nombre'] }}
                        </span>

                    </div>
                @endforeach

            </div>
        </div>
    </section>

    {{-- Logos --}}
    <section class="px-8 py-20 bg-[#f6f7fa] rounded-3xl">
        <div class="h-full mx-auto max-w-5xl">
            <div class="mx-auto max-w-5xl flex flex-col lg:flex-row gap-10 justify-between w-full">

                <div class="max-w-[200px] text-sm text-gray-400 mx-auto lg:ms-0">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </div>

                <ul class="flex flex-row gap-5 justify-center flex-wrap items-center">
                    <li>
                        <img class="grayscale max-w-[100px]"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1200px-Google_2015_logo.svg.png"
                            alt="">
                    </li>

                    <li>
                        <img class="grayscale max-w-[100px]"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Coinbase.svg/2560px-Coinbase.svg.png"
                            alt="">
                    </li>

                    <li>
                        <img class="grayscale max-w-[100px]"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Stripe_Logo%2C_revised_2016.svg/2560px-Stripe_Logo%2C_revised_2016.svg.png"
                            alt="">
                    </li>
                </ul>

            </div>
        </div>
    </section>

    {{-- Pricing --}}
    <section id="pricing" class="px-8 py-20 bg-[#0d0e11]">
        <div class="h-full mx-auto max-w-5xl">

            <div class="mx-auto max-w-7xl px-4 lg:text-center sm:px-6 lg:px-8 pb-10">
                <div class="max-w-3xl mx-auto lg:max-w-none">
                    <h2 class="text-5xl font-semibold tracking-tighter text-white text-center">
                        Level up your <span class="lg:block">development experience</span>
                    </h2>
                </div>
            </div>

            <div class="items-start gap-2 mx-auto items-center mt-12 flex flex-col lg:grid lg:grid-cols-3">

                @foreach ($planes as $plan)

                    <x-sendit.box
                        :titulo="$plan['nombre']"
                        :precio="$plan['precio']"
                        :periodo="$plan['periodo']"
                        :color="$plan['color']"
                    >

                        <ul class="flex flex-col gap-2 mt-12 text-sm {{ $plan['color'] ? '' : 'text-gray-600' }}">

                            @foreach ($plan['caracteristicas'] as $caracteristica)
                                <li class="flex items-start gap-3">
                                    <div class="shrink-0">
                                        <i class="bi bi-check-circle-fill"></i>
                                    </div>

                                    <p>{{ $caracteristica }}</p>
                                </li>
                            @endforeach

                        </ul>

                        <x-slot:footer>
                            <button class="flex items-center justify-center w-full h-10 px-4 py-2 text-sm font-semibold transition-all bg-white border border-gray-300 rounded-lg text-gray-600">
                                Get started
                            </button>
                        </x-slot:footer>

                    </x-sendit.box>

                @endforeach

            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section id="faq" class="py-20 bg-[#f6f7fa] rounded-3xl">
        <div class="h-full max-w-5xl mx-auto">
            <div class="flex flex-col gap-12">

                <div>
                    <h2 class="font-semibold tracking-tighter text-5xl text-center">
                        FAQ
                    </h2>

                    <p class="mx-auto mt-4 text-sm text-gray-600 text-center">
                        Frequent questions &amp; answers
                    </p>
                </div>

                <div class="flex flex-col mx-auto max-w-2xl gap-6 text-base text-gray-400 w-full px-4">

                    @foreach ($preguntas as $pregunta)
                        <details>
                            <summary class="cursor-pointer text-base font-medium tracking-tight text-gray-900">
                                {{ $pregunta }}
                            </summary>

                            <p class="pt-4 text-sm text-gray-500">
                                {{ $respuesta }}
                            </p>
                        </details>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

</main>

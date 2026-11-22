
@props(['titulo', 'precio', 'periodo', 'color' => false])

<div class="flex flex-col justify-between h-full p-8 rounded-3xl {{ $color ? 'text-black bg-[#cff245]' : 'bg-gray-50' }}">

    <div class="flex flex-col">

        <h3 class="mt-4 font-medium">
            {{ $titulo }}
        </h3>

        <div class="order-first text-2xl font-medium">
            {{ $precio }} <span>{{ $periodo }}</span>
        </div>

        <p class="mt-2 text-xs italic {{ $color ? 'text-gray-700' : 'text-gray-600' }}">
            Excluding local taxes or VAT if applicable.
        </p>

        {{ $slot }}

    </div>

    @isset($footer)
        <footer class="mt-8">
            {{ $footer }}
        </footer>
    @endisset

</div>

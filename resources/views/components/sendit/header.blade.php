
<header class="px-8 py-4 bg-[#0d0e11] border-b border-gray-800">
    <div class="flex items-center text-white justify-between mx-auto w-full max-w-7xl">

        {{-- Logo --}}
        <a href="{{ url('/') }}" class="flex items-center gap-2">
            <i class="bi bi-send-fill text-xl text-[#cff245]"></i>
            <span>SendIt</span>
        </a>

        <x-navbar />

        {{-- Contacto --}}
        <a href="#contact" class="text-sm py-1 px-4 border border-gray-300 rounded-xl">
            Contact
        </a>

    </div>
</header>

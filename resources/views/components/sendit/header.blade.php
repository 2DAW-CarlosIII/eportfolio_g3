@props([
    'titulo' => null,
    'titulo0' => 'incio 2',
    'titulo1' => 'pagina2',
    'titulo2' => 'pagina3',
    'titulo3' => 'pagina4',
])
    <header class="px-8 py-4 bg-[#0d0e11] border-b border-gray-800">
        <div class="flex items-center text-white justify-between mx-auto w-full max-w-7xl">
            <a href="/" class="flex items-center gap-2">
                <i class="bi bi-send-fill text-xl text-[#cff245]"></i> <span>ePortfolio</span>
            </a>
            <nav class="hidden md:flex text-sm gap-8">
                <a href="#" class="underline">{{ $titulo0 }}</a>
                <a href="#" class="hover:underline">{{ $titulo1 }}</a>
                <a href="#" class="hover:underline">{{ $titulo2 }}</a>
                <a href="#" class="hover:underline">{{ $titulo3 }}</a>
            </nav>
            <a href="" class="text-sm py-1 px-4 border rounded-xl">
                Contact
            </a>
        </div>
    </header>

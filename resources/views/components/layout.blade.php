@props(['titulo' => null])

<x-sendit.layout :titulo="$titulo">
    {{ $slot }}
</x-sendit.layout>
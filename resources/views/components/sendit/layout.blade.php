@props([
    'titulo' => null,
    'titulo0' => 'Home',
    'titulo1' => 'Features',
    'titulo2' => 'Pricing',
    'titulo3' => 'Blog',
])
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $titulo ?? 'ePortfolio' }}</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('sendit/imgs/favico.png') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet">
  <style>
    .inter {
      font-family: "Inter", serif;
      font-weight: 400;
      font-style: normal;
    }
  </style>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-sendit.header :titulo0="$titulo0" :titulo1="$titulo1" :titulo2="$titulo2" :titulo3="$titulo3"/>
    <x-sendit.main>
       @session('mensaje')
      <div class="mb-6 p-4 rounded-lg border border-green-400 bg-green-50 text-green-800 flex items-center justify-between" role="alert">
      <div class="flex items-center">
      <i class="bi bi-check-circle-fill text-green-500 text-xl mr-3"></i>
      <span class="font-medium">{{ $value }}</span>
      </div>
      </div>
    @endsession
        {{ $slot }}
    </x-sendit.main>
    <x-sendit.footer />
</body>
</html>

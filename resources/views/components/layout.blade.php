<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> 

    <title>test</title>
</head>
  <body class="h-full bg-linear-to-t from-sky-100 to-indigo-200">
  
    <div class="min-h-full">

      <x-navbar></x-navbar>


      <main>
        {{ $slot }}
      </main>
    </div>
  </body>
</html>
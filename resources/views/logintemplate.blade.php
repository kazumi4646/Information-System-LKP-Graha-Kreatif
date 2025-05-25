<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> 
</head>
<body class="h-full">

    <div class="flex justify-center items-center h-screen bg-gray-200 px-6">
        <div class="p-6 max-w-sm w-full bg-white shadow-md rounded-md">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <button onclick="window.location.href='/'" class="absolute top-4 left-4 p-2 bg-indigo-600 rounded-full text-white hover:bg-indigo-500">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                <img class="mx-auto h-10 w-auto" src="img/logo.png" alt="LKP">
                <h2 class="mt-3 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Log in to your account</h2>
            </div>

            <form class="mt-4" action="/" method="GET">
                <label class="block">
                    <span class="text-gray-700 text-sm">Email</span>
                    <input type="email" class="form-input mt-1 block w-full rounded-md border border-indigo-600 focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2 text-md">
                </label>

                <label class="block mt-3">
                    <span class="text-gray-700 text-sm">Password</span>
                    <input type="password" class="mt-1 block w-full rounded-md border border-indigo-600 focus:ring-indigo-500 focus:border-indigo-500 px-3 py-2 text-md">
                </label>

                <div class="flex justify-between items-center mt-4">
                    <div>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-indigo-600">
                            <span class="mx-2 text-gray-600 text-sm">Remember me</span>
                        </label>
                    </div>
                    
                    <div>
                        <a class="block text-sm fontme text-indigo-700 hover:underline" href="#">Forgot your password?</a>
                    </div>
                </div>

                <div class="mt-6">
                    <button class="py-2 px-4 text-center bg-indigo-600 rounded-md w-full text-white text-sm hover:bg-indigo-500">
                        Sign in
                    </button>
                    <div class="mt-4 text-center">
                        <a class=" block text-sm fontme text-indigo-700 hover:underline" href="#">Dont Have an account? Sign in</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
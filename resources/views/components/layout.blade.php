<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PIXEL</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hanken+Grotex:width@400;500;600">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white font-hanken-grotest">
    <div class="px-10">
        <nav class="flex justify-between items-center  py-4 border-b border-white/20" >
            <div>
                <a href="" >
                    <img src="{{ Vite::asset('resources/images/logo.png') }} " alt="">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Career</a>
                <a href="#">Salaries</a>
                <a href="#">Company</a> 
            </div>
            <div>Posts</div>
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">{{ $slot }}</main>
    </div>
</body>
</html>
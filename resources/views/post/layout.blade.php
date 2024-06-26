<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIRS | Sistem Informasi Rumah Sakit</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="shadow-md">
        <section class="bg-green-600 flex flex-row justify-between py-2 px-36">
            <div class="flex flex-row gap-2">
                <p class="text-white hover:text-gray-300 hover:cursor-pointer">Hubungi Kami</p>
                <p class="text-white">|</p>
                <a href="https://www.instagram.com/rsdayakuraja/" class="text-white hover:text-gray-300 hover:cursor-pointer">Instagram : @rsdayakuraja </a>
            </div>
            <div class="flex flex-row gap-2">
                <p class="text-white">Selamat Datang</p>
            </div>
        </section>
        <section class="flex flex-row justify-between py-5 px-36 sticky">
            <a href="{{route('index')}}">
                <div class="flex flex-row gap-3 hover:cursor-pointer">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuevIu-lhPjikkOgjYtjZ-_Z77HihNAcOjQQ&s" alt="logo RS" class="w-16 h-16">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdDyWy4IXjgU3AF0zI0EqCkp8MCxlcnXRunQ&s" alt="logo RS" class="w-16 h-16">
                    <h1 class='font-extrabold text-2xl font-pacifito italic pt-4'>RSUD DAYAKU RAJA</h1>
                </div>
            </a>
            <div class="flex flex-row gap-3 pt-4">
                <a href="{{route('index')}}" class="text-sm font-medium font-sans text-gray-600 hover:cursor-pointer hover:underline hover:text-green-600 hover:decoration-green-600">Home</a>
                <a href="#profil" class="text-sm font-medium font-sans text-gray-600 hover:cursor-pointer hover:underline hover:text-green-600  hover:decoration-green-600">Profil</a>
                <a href="#layanan" class="text-sm font-medium font-sans text-gray-600 hover:cursor-pointer hover:underline hover:text-green-600  hover:decoration-green-600">Layanan</a>
                <p class="text-sm font-medium font-sans text-gray-600 hover:cursor-pointer hover:underline hover:text-green-600  hover:decoration-green-600">Jadwal Dokter</p>
            </div>
        </section>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <section class="flex justify-center">
            <p>Copyright &copy 2024 </p>
        </section>
    </footer>
</body>
</html>
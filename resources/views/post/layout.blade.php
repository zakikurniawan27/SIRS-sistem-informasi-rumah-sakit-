<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIRS | Sistem Informasi Rumah Sakit</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <header class="shadow-md">
        <section class="bg-green-600 flex flex-row justify-between py-2 md:px-36">
            <div class="flex flex-row gap-2">
                <p class="text-white sm:text-base hover:text-gray-300 hover:cursor-pointer" style="font-size: 10px">Hubungi Kami</p>
                <p class="text-white" style="font-size: 10px">|</p>
                <a href="https://www.instagram.com/rsdayakuraja/" class="sm:text-base text-white hover:text-gray-300 hover:cursor-pointer">
                    <p style="font-size: 10px">
                        Instagram : @rsdayakuraja 
                    </p> 
                </a>
            </div>
            <div class="flex flex-row sm:gap-2">
                <p class="text-white sm:text-base" style="font-size: 10px">Selamat Datang</p>
            </div>
        </section>
        <section class="flex flex-row justify-between py-5 md:px-36 sticky">
            <a href="/">
                <div class="flex flex-row gap-3 hover:cursor-pointer">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuevIu-lhPjikkOgjYtjZ-_Z77HihNAcOjQQ&s" alt="logo RS" class="w-10 h-10 md:w-16 md:h-16">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdDyWy4IXjgU3AF0zI0EqCkp8MCxlcnXRunQ&s" alt="logo RS" class="w-10 h-10 md:w-16 md:h-16">
                    <h1 class='font-extrabold text-sm md:text-2xl font-pacifito italic pt-4'>RSUD DAYAKU RAJA</h1>
                </div>
            </a>
            <div class="md:flex md:flex-row gap-3 pt-4 hidden">
                <a href="/" class="text-sm font-medium font-sans text-gray-600 hover:cursor-pointer hover:underline hover:text-green-600 hover:decoration-green-600">Home</a>
                <a href="#profil" class="text-sm font-medium font-sans text-gray-600 hover:cursor-pointer hover:underline hover:text-green-600  hover:decoration-green-600">Profil</a>
                <a href="/layanan" class="text-sm font-medium font-sans text-gray-600 hover:cursor-pointer hover:underline hover:text-green-600  hover:decoration-green-600">Layanan</a>
                <a href="/jadwal" class="text-sm font-medium font-sans text-gray-600 hover:cursor-pointer hover:underline hover:text-green-600  hover:decoration-green-600">Jadwal Dokter</a>
            </div>
            <div id="buttonNav">
                <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" data-dropdown-placement="bottom-start" class=" md:hidden inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-800 dark:focus:ring-gray-600" type="button">
                    <svg class=" w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                    </svg>
                </button>
                <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="p-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton">
                        <li>
                            <a href="/" class="text-sm font-medium font-sans text-gray-600 hover:cursor-pointer hover:underline hover:text-green-600 hover:decoration-green-600">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#profil" class="text-sm font-medium font-sans text-gray-600 hover:cursor-pointer hover:underline hover:text-green-600  hover:decoration-green-600">
                                Profil
                            </a>
                        </li>
                        <li>
                            <a href="#layanan" class="text-sm font-medium font-sans text-gray-600 hover:cursor-pointer hover:underline hover:text-green-600  hover:decoration-green-600">
                                Layanan
                            </a>
                        </li>
                        <li>
                            <a href="/jadwal" class="text-sm font-medium font-sans text-gray-600 hover:cursor-pointer hover:underline hover:text-green-600  hover:decoration-green-600">
                                Jadwal Dokter
                            </a>
                        </li>
                    </ul>
                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.4.1/flowbite.min.js"></script>
</body>
</html>
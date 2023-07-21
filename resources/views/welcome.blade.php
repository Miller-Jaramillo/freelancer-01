<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="visibility: hidden;">

<head>

    <link rel="icon" type="image/png" href="/favicon_alien.ico">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>🇲.🇯 🇩🇪🇻☄️</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>


{{-- --> primera parte - estilo principal - background rincipal  --}}

<body class="antialiased">
    <div
        class="bg-gradient-to-r from-blue-50 to-fuchsia-100   dark:from-gray-950 dark:to-fuchsia-950
        relative sm:flex sm:justify-center sm:items-center min-h-screen
         selection:bg-red-500 selection:text-white" >
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 hidden">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log In</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                    @endif
                @endauth
            </div>
        @endif




        <div class="max-w-7xl mx-auto p-6 lg:p-8">

            {{-- --> btn - cambiar tema --}}
            <div class="flex justify-center">
                <button id="toggleThemeButton"
                    class=" flex items-center justify-center p-2 rounded-xl transition duration-300 ease-in-out focus:outline-none
                              " style=" color: rgb(0, 153, 255);" >
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z"/></svg>
                </button>
            </div>


            {{-- -> div-1  --}}
            <div class="mt-5">
                <div
                    class=" scale-100 p-6 bg-gray-100 bg-gradient-to-bl from-fuchsia-100 via-transparen
                    dark:bg-gray-950/50 dark:bg-gradient-to-bl dark:from-fuchsia-950/50 dark:via-transparent
                    dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none
                    flex motion-safe:hover:scale-[1.04] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">

                        {{-- --> logo del gato --}}
                        <div class="col-span-1 sm:block hidden">

                            {{-- !! logo Ligth --}}
                            <div class="flex justify-center">
                                <img src="/img/devel-3.png" class="dark:hidden" alt="Imagen" sm:width="400"
                                    sm:height="350">
                            </div>

                            {{-- !! logo dark --}}
                            <div class="flex justify-center">
                                <img src="/img/devel-4.png" class="hidden dark:block" alt="Imagen" width="400"
                                    height="350">
                            </div>
                        </div>

                        {{-- --> texto - presentasion --}}
                        <div class="col-span-2 ">
                            <div class="grid cols-1 flex justify-center">
                                <div
                                    class="h-40 w-40 bg-gray-500 dark:bg-gray-500 flex items-center justify-center rounded-full">
                                    <div
                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-38 w-38 rounded-full object-cover" src="/img/yo.png" />
                                    </div>

                                </div>

                            </div>

                            <div class="mt-5 text-2xl font-extrabold ...">
                                <span
                                    class="bg-clip-text text-transparent bg-gradient-to-r dark:from-gray-50 dark:to-fuchsia-900
                                from-gray-950 to-fuchsia-900">
                                    MILLER JARAMILLO
                                </span>
                            </div>


                            <p class="text-gray-900 dark:text-gray-500">Systems engineer | Developer ! </p>

                            <p class=" mt-4  text-gray-900 dark:text-white text-lg">
                                Welcome to the world of custom software development! </p>

                            <p class="text-gray-500 dark:text-gray-400 text-sm leading-relaxed text-justify">
                                Do you need innovative and tailored technological solutions that meet your specific
                                needs?
                                I am a passionate freelance software developer dedicated to creating customized
                                applications
                                and systems that drive the growth of your business.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            {{-- -> div-2 --}}
            <div class="mt-7">
                <div
                    class=" scale-100 p-6 bg-gray-100 bg-gradient-to-bl from-fuchsia-300/50 via-transparen
                    dark:bg-gray-950/50 dark:bg-gradient-to-bl dark:from-fuchsia-700/50 via-transparent
                    dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none
                    flex motion-safe:hover:scale-[1.04] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">

                    <div class="grid grid-cols-1 sm:grid-cols-1 flex justify-center">

                        <div class="col-span-1  flex justify-center">
                            <div class=" mt-2 text-2xl font-extrabold ...">
                                <span
                                    class="bg-clip-text text-transparent bg-gradient-to-r dark:from-gray-50 dark:to-blue-400
                                from-gray-950 to-blue-800">
                                    My Expertise
                                </span>
                            </div>
                        </div>

                        {{-- --> Iconos logos de exeriencia --}}

                        <div class="mt-1 grid grid-cols-3 sm:grid-cols-12 gap-3">

                            {{-- !! logo php --}}
                            <div class="sm:col-span-1 flex items-center justify-center ">
                                <img src="/icons/icon-phpc.png" alt="Imagen" width="100" height="auto"
                                    class="flex motion-safe:hover:scale-[1.05]">
                            </div>

                            {{-- !! logo JavaScript --}}
                            <div class="col-span-1 flex items-center justify-center ">
                                <img src="/icons/icon-js.png" alt="Imagen" width="100" height="auto"
                                    class="flex motion-safe:hover:scale-[1.05]">
                            </div>

                            {{-- !! logo java --}}
                            <div class="col-span-1 flex items-center justify-center ">
                                <img src="/icons/icon-java.png" alt="Imagen" width="90" height="auto"
                                    class="flex motion-safe:hover:scale-[1.05]">
                            </div>

                            {{-- !! logo nodejs --}}
                            <div class="col-span-1 flex items-center justify-center ">
                                <img src="/icons/icon-node.png" alt="Imagen" width="80" height="auto"
                                    class="flex motion-safe:hover:scale-[1.05]">
                            </div>

                            {{-- !! logo React --}}
                            <div class="col-span-1 flex items-center justify-center ">
                                <img src="/icons/icon-react.png" alt="Imagen" width="80" height="auto"
                                    class="flex motion-safe:hover:scale-[1.05]">
                            </div>

                            {{-- !! logo Viu.js --}}
                            <div class="col-span-1 flex items-center justify-center ">
                                <img src="/icons/icon-viujs.png" alt="Imagen" width="80" height="auto"
                                    class="flex motion-safe:hover:scale-[1.05]">
                            </div>

                            {{-- !! logo Angular --}}
                            <div class="col-span-1 flex items-center justify-center ">
                                <img src="/icons/icon-angular.png" alt="Imagen" width="70" height="auto"
                                    class="flex motion-safe:hover:scale-[1.05]">
                            </div>

                            {{-- !! logo tailwind --}}
                            <div class="col-span-1 flex items-center justify-center ">
                                <img src="/icons/icon-tailwiin-scc.png" alt="Imagen" width="80" height="auto"
                                    class="flex motion-safe:hover:scale-[1.05]">
                            </div>

                            {{-- !! logo MySql --}}
                            <div class="col-span-1 flex items-center justify-center ">
                                <img src="/icons/icon-mysql.png" alt="Imagen" width="140" height="auto"
                                    class="flex motion-safe:hover:scale-[1.05]">
                            </div>

                            {{-- !! logo FireBase--}}
                            <div class="col-span-1 flex items-center justify-center ">
                                <img src="/icons/icon-firebase.png" alt="Imagen" width="100" height="auto"
                                    class="flex motion-safe:hover:scale-[1.05]">
                            </div>

                            {{-- !! logo AWS --}}
                            <div class="col-span-1 flex items-center justify-center ">
                                <img src="/icons/icon-aws.png" alt="Imagen" width="120" height="auto"
                                    class="flex motion-safe:hover:scale-[1.05]">
                            </div>

                            {{-- !! logo Laravel --}}
                            <div class="col-span-1 flex items-center justify-center">
                                <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    class="h-16 w-auto flex motion-safe:hover:scale-[1.05]">
                                    <path
                                        d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                                        fill="#FF2D20" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="mt-7">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8  flex items-center justify-center">

                    {{-- -> div-3 --}}
                    <div
                        class="scale-100 p-6 bg-gray-100 bg-gradient-to-bl from-fuchsia-100 via-transparen
                        dark:bg-gray-950/50 dark:bg-gradient-to-bl dark:from-fuchsia-950/50 via-transparent
                        dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20
                        dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline f
                        ocus:outline-2 focus:outline-red-500">
                        <div>
                            <img src="/img/imagen_7.jpg" class="rounded-lg" alt="Imagen" width="600"
                                height="auto">
                        </div>
                    </div>

                    {{-- -> div-4 --}}
                    <div
                        class="scale-100 p-6 bg-gray-100 bg-gradient-to-bl from-fuchsia-100 via-transparen
                        dark:bg-gray-950/50 dark:bg-gradient-to-bl dark:from-fuchsia-950/50 dark:via-transparent dark:ring-1 dark:ring-inset
                        dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01]
                        transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div>

                            {{-- --> iconos de contacto --}}
                            <div class="grid grid-cols-6">

                                {{-- !! icono git-hub --}}
                                <div class="col-span-2  flex justify-center">
                                    <div
                                        class=" h-16 w-16 bg-blue-200 hover:bg-blue-300  dark:bg-blue-400 dark:hover:bg-blue-300 flex items-center justify-center rounded-full flex motion-safe:hover:scale-[1.05]">
                                        <a href="https://github.com/Miller-Jaramillo">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                fill="color-red" class="bi bi-github " viewBox="0 0 16 16">
                                                <path
                                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                {{-- !! icono correo electronico--}}
                                <div class="col-span-2  flex justify-center">
                                    <div
                                        class=" h-16 w-16 bg-orange-200 hover:bg-orange-300 dark:bg-orange-400 dark:hover:bg-orange-300 flex items-center justify-center rounded-full flex motion-safe:hover:scale-[1.05]">
                                        <a href="mailto:millerjaramillo.mj@gmail.com">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                                <path
                                                    d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                {{-- !! icono WhatsAp --}}
                                <div class="col-span-2  flex justify-center">
                                    <div
                                        class=" h-16 w-16 bg-green-200 hover:bg-green-300  dark:bg-green-400 dark:hover:bg-green-300 flex items-center justify-center rounded-full flex motion-safe:hover:scale-[1.05]">
                                        <a href="https://api.whatsapp.com/send?phone=573216656606">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                <path
                                                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <p class="mt-10 text-gray-500 dark:text-gray-400 text-md leading-relaxed text-justify">
                                If you are seeking a dedicated, flexible, and skilled software developer, you have come
                                to the right place.
                                Allow me to exceed your expectations and create technological solutions that set you
                                apart in the competitive digital world
                            </p>

                            <p class="mt-2 text-gray-500 dark:text-gray-400 text-md leading-relaxed text-justify">
                                Feel free to reach out to discuss your projects and explore how I can help you achieve
                                the digital success you desire!

                            </p>

                            {{-- !! Datos de Contacto --}}
                            <h2 class="mt-6 text-md font-semibold text-gray-800 dark:text-gray-100">Email :
                                millerjaramillo.mj@gmail.com</h2>
                            <h2 class="mt-1 text-md font-semibold text-gray-800 dark:text-gray-100">Phone : + (57)
                                321-6655506</h2>
                            <h2 class="mt-1 text-md font-semibold text-gray-800 dark:text-gray-100">Address : Colombia.
                            </h2>
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4">
                        <div
                            class="group inline-flex items-center hover:text-fuchsia-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5"
                                class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            Developer Freelance 👽 : Miller Jaramillo 👨‍💻 / 2023
                        </div>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
        @livewireScripts
</body>
</html>


<style>

    .theme-dark {
  color: #00ccff; /* Color para el tema dark */
}

.theme-light {
  color: #00a2ff; /* Color para el tema light */
}
</style>
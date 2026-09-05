
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Ramel Dumosdos | Portfolio')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="bg-[#070b14] text-white antialiased">


    <!-- =========================================================
         NAVBAR
    ========================================================== -->

    <header class="sticky top-0 z-50 border-b border-white/[0.06] bg-[#070b14]/90 backdrop-blur-xl">

        <div class="mx-auto flex h-[72px] max-w-[1280px] items-center justify-between px-6 lg:px-8">


            <!-- LOGO -->

            <a href="{{ url('/landing') }}"
               class="group flex items-center gap-3">

                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-blue-600 to-blue-500 shadow-lg shadow-blue-900/30">

                    <span class="text-sm font-black">
                        RD
                    </span>

                </div>


                <div>

                    <div class="text-[14px] font-bold uppercase tracking-[0.16em] text-white">
                        Ramel Dumosdos
                    </div>

                    <div class="text-[9px] uppercase tracking-[0.25em] text-slate-600">
                        Developer Portfolio
                    </div>

                </div>

            </a>



            <!-- NAVIGATION -->

            <nav class="hidden items-center gap-1 md:flex">

                <a href="{{ url('/landing') }}"
                   class="rounded-lg px-4 py-2 text-[12px] font-medium text-slate-400 transition hover:bg-white/[0.04] hover:text-white">

                    Home

                </a>


                <a href="#about"
                   class="rounded-lg px-4 py-2 text-[12px] font-medium text-slate-400 transition hover:bg-white/[0.04] hover:text-white">

                    About

                </a>


                <a href="#projects"
                   class="rounded-lg px-4 py-2 text-[12px] font-medium text-slate-400 transition hover:bg-white/[0.04] hover:text-white">

                    Projects

                </a>


                <a href="#skills"
                   class="rounded-lg px-4 py-2 text-[12px] font-medium text-slate-400 transition hover:bg-white/[0.04] hover:text-white">

                    Skills

                </a>


                <a href="#contact"
                   class="ml-2 rounded-lg border border-blue-500/20 bg-blue-600/10 px-5 py-2.5 text-[12px] font-semibold text-blue-300 transition hover:border-blue-400/30 hover:bg-blue-600/20 hover:text-blue-200">

                    Contact Me

                </a>

            </nav>


        </div>

    </header>



    <!-- =========================================================
         PAGE CONTENT
    ========================================================== -->

    <main>

        @yield('content')

    </main>



    <!-- =========================================================
         FOOTER
    ========================================================== -->

    <footer class="border-t border-white/[0.06] bg-[#060910]">

        <div class="mx-auto flex max-w-[1280px] flex-col items-center justify-between gap-4 px-6 py-8 sm:flex-row lg:px-8">


            <div>

                <div class="text-[11px] font-semibold uppercase tracking-[0.18em] text-slate-500">

                    Ramel Dumosdos

                </div>

                <div class="mt-1 text-[10px] text-slate-700">

                    Developer Portfolio

                </div>

            </div>


            <div class="text-[10px] uppercase tracking-[0.18em] text-slate-700">

                © {{ date('Y') }} All Rights Reserved.

            </div>


        </div>

    </footer>


</body>

</html>

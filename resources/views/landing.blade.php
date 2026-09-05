
@extends('layouts.app')

@section('title', 'Ramel Dumosdos | Portfolio')

@section('content')

    <!-- =========================================================
         PORTFOLIO
    ========================================================== -->

    <div class="min-h-screen overflow-hidden bg-[#070b14] text-white">


        <!-- =====================================================
             BACKGROUND GLOW
        ====================================================== -->

        <div class="pointer-events-none fixed inset-0 overflow-hidden">

            <div class="absolute -left-40 -top-40 h-[500px] w-[500px] rounded-full bg-blue-600/10 blur-[120px]"></div>

            <div class="absolute right-[-150px] top-[15%] h-[500px] w-[500px] rounded-full bg-blue-500/10 blur-[130px]"></div>

            <div class="absolute bottom-[-200px] left-[30%] h-[500px] w-[500px] rounded-full bg-indigo-600/10 blur-[140px]"></div>

        </div>


        <main class="relative z-10">


            <!-- =================================================
                 HERO
            ================================================== -->

            <section id="home" class="relative">

                <div class="mx-auto max-w-[1280px] px-6 lg:px-8">

                    <div class="grid min-h-[680px] items-center gap-16 py-24 lg:grid-cols-[1.1fr_0.9fr]">


                        <!-- HERO CONTENT -->

                        <div>


                            <div class="mb-7 inline-flex items-center gap-2 rounded-full border border-blue-400/15 bg-blue-500/[0.07] px-4 py-2">

                                <span class="relative flex h-2 w-2">

                                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-blue-400 opacity-60"></span>

                                    <span class="relative inline-flex h-2 w-2 rounded-full bg-blue-400"></span>

                                </span>

                                <span class="text-[10px] font-semibold uppercase tracking-[0.22em] text-blue-300">

                                    Available for Opportunities

                                </span>

                            </div>


                            <p class="mb-4 text-[11px] font-bold uppercase tracking-[0.3em] text-slate-500">

                                Hello, I'm

                            </p>


                            <h1 class="max-w-4xl text-5xl font-extrabold leading-[1.05] tracking-[-0.03em] text-white sm:text-6xl lg:text-7xl">

                                Ramel

                                <span class="bg-gradient-to-r from-blue-400 via-blue-500 to-indigo-400 bg-clip-text text-transparent">

                                    Dumosdos.

                                </span>

                            </h1>


                            <h2 class="mt-5 text-xl font-semibold text-slate-300 sm:text-2xl">

                                Full-Stack Web Developer

                            </h2>


                            <p class="mt-6 max-w-2xl text-[16px] leading-8 text-slate-400">

                                I design and develop modern web applications, business
                                systems, dashboards, and digital platforms using
                                PHP, Laravel, MySQL, JavaScript, and modern frontend technologies.

                            </p>


                            <div class="mt-10 flex flex-wrap items-center gap-4">

                                <a href="#projects"
                                   class="group inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-blue-600 to-blue-500 px-6 py-3.5 text-[13px] font-semibold text-white shadow-xl shadow-blue-900/30 transition duration-200 hover:-translate-y-0.5 hover:from-blue-500 hover:to-blue-400">

                                    View My Work

                                    <span class="transition-transform duration-200 group-hover:translate-x-1">

                                        →

                                    </span>

                                </a>


                                <a href="#contact"
                                   class="inline-flex items-center rounded-xl border border-white/[0.10] bg-white/[0.025] px-6 py-3.5 text-[13px] font-semibold text-slate-300 transition duration-200 hover:border-white/[0.18] hover:bg-white/[0.05] hover:text-white">

                                    Contact Me

                                </a>

                            </div>


                            <div class="mt-9 flex flex-wrap items-center gap-x-6 gap-y-3 text-[10px] uppercase tracking-[0.18em] text-slate-600">

                                <span>PHP</span>

                                <span class="h-1 w-1 rounded-full bg-slate-700"></span>

                                <span>Laravel</span>

                                <span class="h-1 w-1 rounded-full bg-slate-700"></span>

                                <span>MySQL</span>

                                <span class="h-1 w-1 rounded-full bg-slate-700"></span>

                                <span>JavaScript</span>

                            </div>


                        </div>



                        <!-- DEVELOPER CARD -->

                        <div class="relative hidden lg:block">

                            <div class="absolute inset-0 rounded-[28px] bg-blue-500/10 blur-3xl"></div>


                            <div class="relative overflow-hidden rounded-[22px] border border-white/[0.08] bg-[#0b101b]/95 shadow-[0_30px_100px_rgba(0,0,0,0.45)]">


                                <div class="h-[3px] w-full bg-gradient-to-r from-blue-600 via-blue-400 to-indigo-500"></div>


                                <div class="p-7">


                                    <div class="flex items-center gap-4 border-b border-white/[0.06] pb-6">


                                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-600 to-blue-500 text-xl font-black shadow-lg shadow-blue-900/30">

                                            RD

                                        </div>


                                        <div>

                                            <div class="text-lg font-bold text-white">

                                                Ramel Dumosdos

                                            </div>

                                            <div class="mt-1 text-[10px] uppercase tracking-[0.2em] text-blue-400">

                                                Web Developer

                                            </div>

                                        </div>

                                    </div>


                                    <div class="mt-6 space-y-4">


                                        <div class="rounded-xl border border-white/[0.05] bg-[#080c14] p-4">

                                            <div class="flex items-center justify-between">

                                                <span class="text-[10px] uppercase tracking-[0.18em] text-slate-600">

                                                    Primary Stack

                                                </span>

                                                <span class="text-[10px] text-blue-400">

                                                    ACTIVE

                                                </span>

                                            </div>

                                            <div class="mt-3 text-sm font-semibold text-slate-200">

                                                PHP · Laravel · MySQL

                                            </div>

                                        </div>


                                        <div class="rounded-xl border border-white/[0.05] bg-[#080c14] p-4">

                                            <div class="text-[10px] uppercase tracking-[0.18em] text-slate-600">

                                                Frontend

                                            </div>

                                            <div class="mt-3 text-sm font-semibold text-slate-200">

                                                HTML · CSS · JavaScript · Tailwind CSS

                                            </div>

                                        </div>


                                        <div class="rounded-xl border border-white/[0.05] bg-[#080c14] p-4">

                                            <div class="text-[10px] uppercase tracking-[0.18em] text-slate-600">

                                                Focus

                                            </div>

                                            <div class="mt-3 text-sm font-semibold text-slate-200">

                                                Business Systems & Web Applications

                                            </div>

                                        </div>


                                    </div>


                                    <div class="mt-6 flex items-center justify-between border-t border-white/[0.06] pt-5">

                                        <span class="text-[10px] uppercase tracking-[0.18em] text-slate-600">

                                            Portfolio

                                        </span>

                                        <span class="text-xs font-semibold text-blue-400">

                                            2026

                                        </span>

                                    </div>


                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </section>



            <!-- =================================================
                 ABOUT
            ================================================== -->

            <section id="about" class="border-t border-white/[0.06] bg-[#080c14]/70">

                <div class="mx-auto max-w-[1280px] px-6 py-24 lg:px-8">

                    <div class="grid gap-14 lg:grid-cols-[0.8fr_1.2fr]">


                        <div>

                            <p class="mb-3 text-[10px] font-bold uppercase tracking-[0.3em] text-blue-400">

                                About Me

                            </p>

                            <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">

                                Building systems that solve real problems.

                            </h2>

                        </div>


                        <div>

                            <p class="text-sm leading-8 text-slate-400">

                                I'm a web developer focused on building practical,
                                reliable, and user-friendly applications. My work
                                combines backend development, database design,
                                frontend interfaces, and business logic.

                            </p>

                            <p class="mt-5 text-sm leading-8 text-slate-500">

                                I enjoy turning ideas and workflows into complete
                                digital systems—from authentication and dashboards
                                to reporting, quotations, file management,
                                and business operations.

                            </p>

                        </div>


                    </div>

                </div>

            </section>



            <!-- =================================================
                 EXPERIENCE
            ================================================== -->

            <section id="experience" class="border-t border-white/[0.06] bg-[#080c14]/70">

                <div class="mx-auto max-w-[1280px] px-6 py-24 lg:px-8">

                    <div class="mb-14">

                        <p class="mb-3 text-[10px] font-bold uppercase tracking-[0.3em] text-blue-400">
                            Experience
                        </p>

                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">
                            My professional journey.
                        </h2>

                        <p class="mt-4 max-w-2xl text-sm leading-7 text-slate-500">
                            From freelance development during college to teaching, university
                            system development, and leading full-stack development at Audisa.
                        </p>

                    </div>

                    <div class="relative">

                        <div class="absolute left-[19px] top-0 hidden h-full w-px bg-gradient-to-b from-blue-500/40 via-blue-500/10 to-transparent md:block"></div>

                        <div class="space-y-6">

                            <!-- FREELANCE DEVELOPER -->

                            <div class="relative md:pl-16">

                                <div class="absolute left-0 top-7 hidden h-10 w-10 items-center justify-center rounded-xl border border-blue-400/20 bg-[#0b1019] text-blue-400 shadow-lg shadow-blue-900/10 md:flex">
                                    01
                                </div>

                                <div class="rounded-2xl border border-white/[0.07] bg-[#0b1019] p-7 shadow-[0_15px_40px_rgba(0,0,0,0.22)] transition duration-300 hover:border-blue-500/20">

                                    <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">

                                        <div>
                                            <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-blue-400">
                                                2022 – 2023
                                            </p>

                                            <h3 class="mt-2 text-xl font-semibold text-white">
                                                Freelance Developer
                                            </h3>

                                            <p class="mt-1 text-xs text-slate-500">
                                                While in College
                                            </p>
                                        </div>

                                        <span class="w-fit rounded-md border border-white/[0.06] bg-white/[0.025] px-3 py-1.5 text-[9px] uppercase tracking-[0.18em] text-slate-500">
                                            Freelance
                                        </span>

                                    </div>

                                    <p class="mt-5 max-w-3xl text-sm leading-7 text-slate-500">
                                        I started my professional development journey as a freelance
                                        developer while pursuing my college degree. This gave me
                                        practical experience in building web applications, working
                                        with databases, solving development problems, and delivering
                                        solutions based on real-world requirements.
                                    </p>

                                </div>

                            </div>


                            <!-- COLLEGE INSTRUCTOR -->

                            <div class="relative md:pl-16">

                                <div class="absolute left-0 top-7 hidden h-10 w-10 items-center justify-center rounded-xl border border-blue-400/20 bg-[#0b1019] text-blue-400 shadow-lg shadow-blue-900/10 md:flex">
                                    02
                                </div>

                                <div class="rounded-2xl border border-white/[0.07] bg-[#0b1019] p-7 shadow-[0_15px_40px_rgba(0,0,0,0.22)] transition duration-300 hover:border-blue-500/20">

                                    <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">

                                        <div>
                                            <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-blue-400">
                                                2 Years
                                            </p>

                                            <h3 class="mt-2 text-xl font-semibold text-white">
                                                College Instructor
                                            </h3>

                                            <p class="mt-1 text-xs text-slate-500">
                                                Technological University of the Philippines – Manila Campus
                                            </p>
                                        </div>

                                        <span class="w-fit rounded-md border border-white/[0.06] bg-white/[0.025] px-3 py-1.5 text-[9px] uppercase tracking-[0.18em] text-slate-500">
                                            Education
                                        </span>

                                    </div>

                                    <p class="mt-5 max-w-3xl text-sm leading-7 text-slate-500">
                                        After graduating with a BTTE-Cp degree from the Technological
                                        University of the Philippines – Manila Campus, I worked as a
                                        college instructor for approximately two years. I handled
                                        courses focused on Web Application Development and Mobile
                                        Application Development, while mentoring students through
                                        software development concepts and practical projects.
                                    </p>

                                    <div class="mt-6 flex flex-wrap gap-2">
                                        <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                            Web Application
                                        </span>

                                        <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                            Mobile Application
                                        </span>

                                        <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                            Teaching
                                        </span>
                                    </div>

                                </div>

                            </div>


                            <!-- CONTRACTUAL PROGRAMMER -->

                            <div class="relative md:pl-16">

                                <div class="absolute left-0 top-7 hidden h-10 w-10 items-center justify-center rounded-xl border border-blue-400/20 bg-[#0b1019] text-blue-400 shadow-lg shadow-blue-900/10 md:flex">
                                    03
                                </div>

                                <div class="rounded-2xl border border-white/[0.07] bg-[#0b1019] p-7 shadow-[0_15px_40px_rgba(0,0,0,0.22)] transition duration-300 hover:border-blue-500/20">

                                    <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">

                                        <div>
                                            <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-blue-400">
                                                1 year and 6 months Contractual Programmer
                                            </p>

                                            <h3 class="mt-2 text-xl font-semibold text-white">
                                                University Systems Developer
                                            </h3>

                                            <p class="mt-1 text-xs text-slate-500">
                                                Technological University of the Philippines – Manila Campus
                                            </p>
                                        </div>

                                        <span class="w-fit rounded-md border border-white/[0.06] bg-white/[0.025] px-3 py-1.5 text-[9px] uppercase tracking-[0.18em] text-slate-500">
                                            Software Development
                                        </span>

                                    </div>

                                    <p class="mt-5 max-w-3xl text-sm leading-7 text-slate-500">
                                        Alongside my experience at the university, I worked as a
                                        contractual programmer, developing systems for actual
                                        institutional use. This experience allowed me to work with
                                        real organizational requirements and build applications
                                        designed to support university operations.
                                    </p>

                                    <div class="mt-6 grid gap-3 sm:grid-cols-2">

                                        <div class="rounded-xl border border-white/[0.05] bg-[#080c14] p-4">
                                            <div class="text-[9px] font-bold uppercase tracking-[0.18em] text-blue-400">
                                                Project
                                            </div>

                                            <div class="mt-2 text-sm font-semibold text-slate-200">
                                                TUP-SDRMS
                                            </div>

                                            <div class="mt-1 text-[11px] leading-5 text-slate-600">
                                                University digital records and management system.
                                            </div>
                                        </div>

                                        <div class="rounded-xl border border-white/[0.05] bg-[#080c14] p-4">
                                            <div class="text-[9px] font-bold uppercase tracking-[0.18em] text-blue-400">
                                                Project
                                            </div>

                                            <div class="mt-2 text-sm font-semibold text-slate-200">
                                                TUP-SWIFT
                                            </div>

                                            <div class="mt-1 text-[11px] leading-5 text-slate-600">
                                                University web application and digital workflow system.
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <!-- AUDISA -->

                            <div class="relative md:pl-16">

                                <div class="absolute left-0 top-7 hidden h-10 w-10 items-center justify-center rounded-xl border border-blue-400/30 bg-blue-600/10 text-blue-400 shadow-lg shadow-blue-900/20 md:flex">
                                    04
                                </div>

                                <div class="relative overflow-hidden rounded-2xl border border-blue-500/20 bg-[#0b101b] p-7 shadow-[0_20px_60px_rgba(0,0,0,0.30)]">

                                    <div class="absolute right-0 top-0 h-40 w-40 rounded-full bg-blue-600/[0.08] blur-3xl"></div>

                                    <div class="relative">

                                        <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">

                                            <div>
                                                <div class="flex flex-wrap items-center gap-3">
                                                    <p class="text-[10px] font-bold uppercase tracking-[0.2em] text-blue-400">
                                                        2 Years · Current
                                                    </p>

                                                    <span class="rounded-full border border-blue-400/20 bg-blue-500/10 px-2.5 py-1 text-[8px] font-semibold uppercase tracking-[0.18em] text-blue-300">
                                                        Current Role
                                                    </span>
                                                </div>

                                                <h3 class="mt-3 text-xl font-semibold text-white">
                                                    Audisa
                                                </h3>

                                                <p class="mt-1 text-xs text-slate-500">
                                                    Australian-Based Company
                                                </p>
                                            </div>

                                            <span class="w-fit rounded-md border border-blue-400/15 bg-blue-500/[0.07] px-3 py-1.5 text-[9px] uppercase tracking-[0.18em] text-blue-300">
                                                Full-Stack Engineering
                                            </span>

                                        </div>

                                        <p class="mt-5 max-w-3xl text-sm leading-7 text-slate-400">
                                            I have been actively working at Audisa for two years,
                                            developing and maintaining business applications and
                                            digital platforms. My work covers both frontend and
                                            backend development, database integration, business
                                            logic, system maintenance, and continuous improvements.
                                        </p>


                                        <div class="mt-7 grid gap-4 md:grid-cols-2">

                                            <!-- LEAD FULLSTACK -->

                                            <div class="rounded-xl border border-blue-500/15 bg-[#080c14] p-5">

                                                <div class="flex items-center justify-between gap-3">
                                                    <div class="text-[9px] font-bold uppercase tracking-[0.18em] text-blue-400">
                                                        1.5 Years
                                                    </div>

                                                    <span class="text-[9px] uppercase tracking-[0.15em] text-slate-600">
                                                        Current
                                                    </span>
                                                </div>

                                                <h4 class="mt-3 text-base font-semibold text-white">
                                                    Lead Full-Stack Engineer
                                                </h4>

                                                <p class="mt-3 text-[12px] leading-6 text-slate-500">
                                                    Leading and maintaining full-stack development
                                                    across business applications, system logic,
                                                    databases, dashboards, and operational workflows.
                                                </p>

                                            </div>


                                            <!-- FRONTEND -->

                                            <div class="rounded-xl border border-white/[0.06] bg-[#080c14] p-5">

                                                <div class="text-[9px] font-bold uppercase tracking-[0.18em] text-slate-600">
                                                    0.5 Years
                                                </div>

                                                <h4 class="mt-3 text-base font-semibold text-white">
                                                    Front-End Developer
                                                </h4>

                                                <p class="mt-3 text-[12px] leading-6 text-slate-500">
                                                    Started at Audisa focusing on responsive interfaces,
                                                    user experience, frontend development, and turning
                                                    business requirements into functional web interfaces.
                                                </p>

                                            </div>

                                        </div>


                                        <div class="mt-5 rounded-xl border border-white/[0.05] bg-[#080c14] p-5">

                                            <div class="text-[9px] font-bold uppercase tracking-[0.18em] text-slate-600">
                                                Maintained & Developed
                                            </div>

                                            <div class="mt-4 flex flex-wrap gap-2">

                                                <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-3 py-2 text-[9px] uppercase tracking-wider text-slate-500">
                                                    Audisa Admin Portal
                                                </span>

                                                <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-3 py-2 text-[9px] uppercase tracking-wider text-slate-500">
                                                    Audisa User Portal
                                                </span>

                                                <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-3 py-2 text-[9px] uppercase tracking-wider text-slate-500">
                                                    Audisa Landing Page
                                                </span>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


            <!-- =================================================
                 PROJECTS
            ================================================== -->

            <section id="projects" class="border-t border-white/[0.06]">

                <div class="mx-auto max-w-[1280px] px-6 py-24 lg:px-8">


                    <div class="mb-14">

                        <p class="mb-3 text-[10px] font-bold uppercase tracking-[0.3em] text-blue-400">

                            Selected Work

                        </p>

                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">

                            Projects I've built.

                        </h2>

                        <p class="mt-4 max-w-2xl text-sm leading-7 text-slate-500">

                            A selection of systems and platforms I've worked on
                            across education, business operations, and web development.

                        </p>

                    </div>


                    <div class="grid gap-5 md:grid-cols-2">


                        <!-- TUP SWIFT -->

                        <div class="group relative overflow-hidden rounded-2xl border border-white/[0.07] bg-[#0b1019] p-7 shadow-[0_15px_40px_rgba(0,0,0,0.25)] transition duration-300 hover:-translate-y-1 hover:border-blue-500/20">

                            <div class="absolute right-0 top-0 h-40 w-40 rounded-full bg-blue-600/[0.06] blur-3xl transition group-hover:bg-blue-500/[0.12]"></div>

                            <div class="relative">

                                <div class="mb-6 flex items-center justify-between">

                                    <div class="flex h-11 w-11 items-center justify-center rounded-xl border border-blue-400/15 bg-blue-500/[0.08] text-sm font-bold text-blue-400">

                                        01

                                    </div>

                                    <span class="text-[9px] uppercase tracking-[0.2em] text-slate-600">

                                        Education System

                                    </span>

                                </div>


                                <h3 class="text-xl font-semibold text-white">

                                    TUP-SWIFT

                                </h3>


                                <p class="mt-3 text-sm leading-7 text-slate-500">

                                    A university-focused web system designed to
                                    support academic workflows and digital processes.

                                </p>


                                <div class="mt-6 flex flex-wrap gap-2">

                                    <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                        PHP
                                    </span>

                                    <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                        MySQL
                                    </span>

                                    <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                        JavaScript
                                    </span>

                                </div>

                            </div>

                        </div>



                        <!-- TUP SDRMS -->

                        <div class="group relative overflow-hidden rounded-2xl border border-white/[0.07] bg-[#0b1019] p-7 shadow-[0_15px_40px_rgba(0,0,0,0.25)] transition duration-300 hover:-translate-y-1 hover:border-blue-500/20">

                            <div class="absolute right-0 top-0 h-40 w-40 rounded-full bg-blue-600/[0.06] blur-3xl transition group-hover:bg-blue-500/[0.12]"></div>

                            <div class="relative">

                                <div class="mb-6 flex items-center justify-between">

                                    <div class="flex h-11 w-11 items-center justify-center rounded-xl border border-blue-400/15 bg-blue-500/[0.08] text-sm font-bold text-blue-400">

                                        02

                                    </div>

                                    <span class="text-[9px] uppercase tracking-[0.2em] text-slate-600">

                                        Management System

                                    </span>

                                </div>


                                <h3 class="text-xl font-semibold text-white">

                                    TUP-SDRMS

                                </h3>


                                <p class="mt-3 text-sm leading-7 text-slate-500">

                                    A digital records and management system developed
                                    to organize and streamline institutional workflows.

                                </p>


                                <div class="mt-6 flex flex-wrap gap-2">

                                    <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                        PHP
                                    </span>

                                    <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                        MySQL
                                    </span>

                                    <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                        JavaScript
                                    </span>

                                </div>

                            </div>

                        </div>



                        <!-- AUDISA ADMIN -->

                        <div class="group relative overflow-hidden rounded-2xl border border-white/[0.07] bg-[#0b1019] p-7 shadow-[0_15px_40px_rgba(0,0,0,0.25)] transition duration-300 hover:-translate-y-1 hover:border-blue-500/20">

                            <div class="absolute right-0 top-0 h-40 w-40 rounded-full bg-blue-600/[0.06] blur-3xl transition group-hover:bg-blue-500/[0.12]"></div>

                            <div class="relative">

                                <div class="mb-6 flex items-center justify-between">

                                    <div class="flex h-11 w-11 items-center justify-center rounded-xl border border-blue-400/15 bg-blue-500/[0.08] text-sm font-bold text-blue-400">

                                        03

                                    </div>

                                    <span class="text-[9px] uppercase tracking-[0.2em] text-slate-600">

                                        Business Platform

                                    </span>

                                </div>


                                <h3 class="text-xl font-semibold text-white">

                                    Audisa Admin & User Portal

                                </h3>


                                <p class="mt-3 text-sm leading-7 text-slate-500">

                                    A business management platform with administration,
                                    user accounts, quotations, contacts, file management,
                                    reporting, and operational workflows.

                                </p>


                                <div class="mt-6 flex flex-wrap gap-2">

                                    <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                        PHP
                                    </span>

                                    <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                        MySQL
                                    </span>

                                    <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                        JavaScript
                                    </span>

                                    <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                        Chart.js
                                    </span>

                                </div>

                            </div>

                        </div>



                        <!-- AUDISA LANDING -->

                        <div class="group relative overflow-hidden rounded-2xl border border-white/[0.07] bg-[#0b1019] p-7 shadow-[0_15px_40px_rgba(0,0,0,0.25)] transition duration-300 hover:-translate-y-1 hover:border-blue-500/20">

                            <div class="absolute right-0 top-0 h-40 w-40 rounded-full bg-blue-600/[0.06] blur-3xl transition group-hover:bg-blue-500/[0.12]"></div>

                            <div class="relative">

                                <div class="mb-6 flex items-center justify-between">

                                    <div class="flex h-11 w-11 items-center justify-center rounded-xl border border-blue-400/15 bg-blue-500/[0.08] text-sm font-bold text-blue-400">

                                        04

                                    </div>

                                    <span class="text-[9px] uppercase tracking-[0.2em] text-slate-600">

                                        Web Platform

                                    </span>

                                </div>


                                <h3 class="text-xl font-semibold text-white">

                                    Audisa Landing Page

                                </h3>


                                <p class="mt-3 text-sm leading-7 text-slate-500">

                                    A professional company landing page focused on
                                    presenting services, products, and the Audisa brand.

                                </p>


                                <div class="mt-6 flex flex-wrap gap-2">

                                    <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                        HTML
                                    </span>

                                    <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                        CSS
                                    </span>

                                    <span class="rounded-md border border-white/[0.06] bg-white/[0.025] px-2.5 py-1.5 text-[9px] uppercase tracking-wider text-slate-500">
                                        JavaScript
                                    </span>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </section>



            <!-- =================================================
                 TECHNOLOGIES
            ================================================== -->

            <section id="skills" class="border-t border-white/[0.06] bg-[#080c14]/70">

                <div class="mx-auto max-w-[1280px] px-6 py-24 lg:px-8">


                    <div class="mb-14">

                        <p class="mb-3 text-[10px] font-bold uppercase tracking-[0.3em] text-blue-400">

                            Technologies

                        </p>

                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">

                            Languages & Frameworks

                        </h2>

                        <p class="mt-4 max-w-2xl text-sm leading-7 text-slate-500">

                            Technologies I use to design, develop, and maintain
                            web applications and business systems.

                        </p>

                    </div>


                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">


                        <!-- PHP -->

                        <div class="rounded-xl border border-white/[0.07] bg-[#0b1019] p-5 transition hover:border-blue-500/20">

                            <div class="text-lg font-bold text-white">
                                PHP
                            </div>

                            <div class="mt-1 text-[10px] uppercase tracking-[0.18em] text-blue-400">
                                Backend
                            </div>

                        </div>


                        <!-- Laravel -->

                        <div class="rounded-xl border border-white/[0.07] bg-[#0b1019] p-5 transition hover:border-blue-500/20">

                            <div class="text-lg font-bold text-white">
                                Laravel
                            </div>

                            <div class="mt-1 text-[10px] uppercase tracking-[0.18em] text-blue-400">
                                Framework
                            </div>

                        </div>


                        <!-- MySQL -->

                        <div class="rounded-xl border border-white/[0.07] bg-[#0b1019] p-5 transition hover:border-blue-500/20">

                            <div class="text-lg font-bold text-white">
                                MySQL
                            </div>

                            <div class="mt-1 text-[10px] uppercase tracking-[0.18em] text-blue-400">
                                Database
                            </div>

                        </div>


                        <!-- JavaScript -->

                        <div class="rounded-xl border border-white/[0.07] bg-[#0b1019] p-5 transition hover:border-blue-500/20">

                            <div class="text-lg font-bold text-white">
                                JavaScript
                            </div>

                            <div class="mt-1 text-[10px] uppercase tracking-[0.18em] text-blue-400">
                                Frontend
                            </div>

                        </div>


                        <!-- HTML -->

                        <div class="rounded-xl border border-white/[0.07] bg-[#0b1019] p-5 transition hover:border-blue-500/20">

                            <div class="text-lg font-bold text-white">
                                HTML
                            </div>

                            <div class="mt-1 text-[10px] uppercase tracking-[0.18em] text-blue-400">
                                Markup
                            </div>

                        </div>


                        <!-- CSS -->

                        <div class="rounded-xl border border-white/[0.07] bg-[#0b1019] p-5 transition hover:border-blue-500/20">

                            <div class="text-lg font-bold text-white">
                                CSS
                            </div>

                            <div class="mt-1 text-[10px] uppercase tracking-[0.18em] text-blue-400">
                                Styling
                            </div>

                        </div>


                        <!-- Tailwind -->

                        <div class="rounded-xl border border-white/[0.07] bg-[#0b1019] p-5 transition hover:border-blue-500/20">

                            <div class="text-lg font-bold text-white">
                                Tailwind CSS
                            </div>

                            <div class="mt-1 text-[10px] uppercase tracking-[0.18em] text-blue-400">
                                UI Framework
                            </div>

                        </div>


                        <!-- Chart.js -->

                        <div class="rounded-xl border border-white/[0.07] bg-[#0b1019] p-5 transition hover:border-blue-500/20">

                            <div class="text-lg font-bold text-white">
                                Chart.js
                            </div>

                            <div class="mt-1 text-[10px] uppercase tracking-[0.18em] text-blue-400">
                                Data Visualization
                            </div>

                        </div>


                    </div>

                </div>

            </section>



            <!-- =================================================
                 WHAT I DO
            ================================================== -->

            <section class="border-t border-white/[0.06]">

                <div class="mx-auto max-w-[1280px] px-6 py-24 lg:px-8">


                    <div class="mb-14">

                        <p class="mb-3 text-[10px] font-bold uppercase tracking-[0.3em] text-blue-400">

                            Expertise

                        </p>

                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">

                            What I build.

                        </h2>

                    </div>


                    <div class="grid gap-5 md:grid-cols-3">


                        <div class="rounded-2xl border border-white/[0.07] bg-[#0b1019] p-7">

                            <div class="mb-5 text-2xl text-blue-400">
                                01
                            </div>

                            <h3 class="text-lg font-semibold">
                                Web Applications
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-slate-500">

                                Complete web applications with authentication,
                                dashboards, forms, databases, and business logic.

                            </p>

                        </div>


                        <div class="rounded-2xl border border-white/[0.07] bg-[#0b1019] p-7">

                            <div class="mb-5 text-2xl text-blue-400">
                                02
                            </div>

                            <h3 class="text-lg font-semibold">
                                Business Systems
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-slate-500">

                                Custom systems that transform manual business
                                processes into organized digital workflows.

                            </p>

                        </div>


                        <div class="rounded-2xl border border-white/[0.07] bg-[#0b1019] p-7">

                            <div class="mb-5 text-2xl text-blue-400">
                                03
                            </div>

                            <h3 class="text-lg font-semibold">
                                Admin Dashboards
                            </h3>

                            <p class="mt-3 text-sm leading-7 text-slate-500">

                                Professional dashboards with tables, reports,
                                analytics, management tools, and responsive UI.

                            </p>

                        </div>


                    </div>

                </div>

            </section>



            <!-- =================================================
                 CONTACT
            ================================================== -->

            <section id="contact" class="border-t border-white/[0.06]">

                <div class="mx-auto max-w-[1280px] px-6 py-24 lg:px-8">


                    <div class="relative overflow-hidden rounded-3xl border border-blue-500/15 bg-[#0b101b] px-8 py-16 text-center shadow-[0_25px_80px_rgba(0,0,0,0.35)] sm:px-16">


                        <div class="absolute left-1/2 top-0 h-48 w-96 -translate-x-1/2 rounded-full bg-blue-600/10 blur-[100px]"></div>


                        <div class="relative">


                            <p class="text-[10px] font-bold uppercase tracking-[0.3em] text-blue-400">

                                Let's Connect

                            </p>


                            <h2 class="mt-4 text-3xl font-bold tracking-tight text-white sm:text-4xl">

                                Have a project in mind?

                            </h2>


                            <p class="mx-auto mt-4 max-w-xl text-sm leading-7 text-slate-500">

                                I'm always interested in discussing new projects,
                                ideas, and opportunities to build useful digital solutions.

                            </p>


                            <div class="mt-8 flex flex-wrap justify-center gap-4">

                                <a href="mailto:your-email@example.com"
                                   class="inline-flex rounded-xl bg-gradient-to-r from-blue-600 to-blue-500 px-7 py-3.5 text-[13px] font-semibold text-white shadow-xl shadow-blue-900/30 transition hover:from-blue-500 hover:to-blue-400">

                                    Email Me

                                </a>


                                <a href="#home"
                                   class="inline-flex rounded-xl border border-white/[0.10] bg-white/[0.025] px-7 py-3.5 text-[13px] font-semibold text-slate-300 transition hover:bg-white/[0.05] hover:text-white">

                                    Back to Top

                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </section>


        </main>


    </div>

@endsection

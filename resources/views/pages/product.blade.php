@extends('layouts.master')

@push('seo')
    <x-seo title="Products" description="We not just only provide tools but we provide technical to solve every problem"/>
@endpush

@section('title', 'Products')

@section('styles')
    <style>
        .title-pages {
            background-image: url('{{ asset('assets/img/hero-banner/about-us-min.jpg') }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
@endsection

@section('content')
    <section>
        <div class="w-screen h-[400px] title-pages">
            <div class="w-full h-full bg-black/75 flex justify-center items-center pt-28 pb-20">
                <h1 class="text-4xl lg:text-7xl font-extrabold text-white">PRODUCTS</h1>
            </div>
        </div>

        <div class="px-4 sm:px-6 lg:px-44 py-20">
            <div class="text-center pb-10">
                <h2 class="font-bold text-xl">“We not just only provide tools but we provide technical to solve every
                    problem”</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 auto-rows-fr">
                <div class="w-full h-full p-5 flex flex-col">
                    <img src="{{ asset('assets/img/project/project01.webp') }}" alt="BOP & Spare Parts"
                        class="w-full aspect-square object-contain bg-white">

                    <div class="mt-5 flex flex-col flex-1">
                        <h2 class="font-bold text-xl mb-3">BOP & Spare Parts</h2>

                        <p>
                            Packing element, Annular preventer, Ram Blocks, top seal bonnet & Front Packer.
                        </p>

                        <div class="mt-auto pt-10">
                            <a href="https://wa.me/6281382087708" target="_blank" rel="noopener noreferrer" class="bg-amber-500 inline-flex items-center hover:bg-amber-600 cursor-pointer gap-2 font-semibold self-start px-12 py-3">
                                CONTACT US <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>baseline-whatsapp</title><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="w-full h-full p-5 flex flex-col">
                    <img src="{{ asset('assets/img/project/drill.webp') }}" alt="drill"
                        class="w-full aspect-square object-contain bg-white">

                    <div class="mt-5 flex flex-col flex-1">
                        <h2 class="font-bold text-xl mb-3">Drill string</h2>

                        <p>
                            Casing, Drill Pipe, Drill Collar (API 5 CT) and NMDC.
                        </p>

                        <div class="mt-auto pt-10">
                            <a href="https://wa.me/6281382087708" target="_blank" rel="noopener noreferrer" class="bg-amber-500 inline-flex items-center hover:bg-amber-600 cursor-pointer gap-2 font-semibold self-start px-12 py-3">
                                CONTACT US <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>baseline-whatsapp</title><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full p-5 flex flex-col">
                    <img src="{{ asset('assets/img/project/solid-control.webp') }}" alt="Solid Control Eq"
                        class="w-full aspect-square object-contain bg-white">

                    <div class="mt-5 flex flex-col flex-1">
                        <h2 class="font-bold text-xl mb-3">Solid Control Equipment</h2>

                        <p>
                            Shale shaker, screen and mud cooler.
                        </p>

                        <div class="mt-auto pt-10">
                            <a href="https://wa.me/6281382087708" target="_blank" rel="noopener noreferrer" class="bg-amber-500 inline-flex items-center hover:bg-amber-600 cursor-pointer gap-2 font-semibold self-start px-12 py-3">
                                CONTACT US <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>baseline-whatsapp</title><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full p-5 flex flex-col">
                    <img src="{{ asset('assets/img/project/project04.webp') }}" alt="4mud Pump & acc"
                        class="w-full aspect-square object-contain bg-white">

                    <div class="mt-5 flex flex-col flex-1">
                        <h2 class="font-bold text-xl mb-3">4Mud Pump & accessories</h2>

                        <p>
                            Valve Assy, Liner, pulsation dampener and another spare parts OEM or NON OEM (aftermarket).
                        </p>

                        <div class="mt-auto pt-10">
                            <a href="https://wa.me/6281382087708" target="_blank" rel="noopener noreferrer" class="bg-amber-500 inline-flex items-center hover:bg-amber-600 cursor-pointer gap-2 font-semibold self-start px-12 py-3">
                                CONTACT US <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>baseline-whatsapp</title><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full p-5 flex flex-col">
                    <img src="{{ asset('assets/img/project/Drill-Bit-.webp') }}" alt="Drill bit"
                        class="w-full aspect-square object-contain bg-white">

                    <div class="mt-5 flex flex-col flex-1">
                        <h2 class="font-bold text-xl mb-3">Drill bit</h2>

                        <p>
                            Drag bit, Tricone bit & PDC bit.
                        </p>

                        <div class="mt-auto pt-10">
                            <a href="https://wa.me/6281382087708" target="_blank" rel="noopener noreferrer" class="bg-amber-500 inline-flex items-center hover:bg-amber-600 cursor-pointer gap-2 font-semibold self-start px-12 py-3">
                                CONTACT US <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>baseline-whatsapp</title><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full p-5 flex flex-col">
                    <img src="{{ asset('assets/img/project/project03.webp') }}" alt="Hose"
                        class="w-full aspect-square object-contain bg-white">

                    <div class="mt-5 flex flex-col flex-1">
                        <h2 class="font-bold text-xl mb-3">Drill bit</h2>

                        <p>
                            Rotary Hose, Hammer Union, BOP Hose & Rubber hose.
                        </p>

                        <div class="mt-auto pt-10">
                            <a href="https://wa.me/6281382087708" target="_blank" rel="noopener noreferrer" class="bg-amber-500 inline-flex items-center hover:bg-amber-600 cursor-pointer gap-2 font-semibold self-start px-12 py-3">
                                CONTACT US <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>baseline-whatsapp</title><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full p-5 flex flex-col">
                    <img src="{{ asset('assets/img/project/BHA.webp') }}" alt="BHA"
                        class="w-full aspect-square object-contain bg-white">

                    <div class="mt-5 flex flex-col flex-1">
                        <h2 class="font-bold text-xl mb-3">BHA (Bottom Hole Assembly )</h2>

                        <p>
                            Jar, Stabilizer, NMDC, Hole Opener & Mud Motor.
                        </p>

                        <div class="mt-auto pt-10">
                            <a href="https://wa.me/6281382087708" target="_blank" rel="noopener noreferrer" class="bg-amber-500 inline-flex items-center hover:bg-amber-600 cursor-pointer gap-2 font-semibold self-start px-12 py-3">
                                CONTACT US <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>baseline-whatsapp</title><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full p-5 flex flex-col">
                    <img src="{{ asset('assets/img/project/instrument-sensor.webp') }}" alt="instrument sensor"
                        class="w-full aspect-square object-contain bg-white">

                    <div class="mt-5 flex flex-col flex-1">
                        <h2 class="font-bold text-xl mb-3">Instrument & Sensor</h2>

                        <p>
                            Pressure Instruments, Level Instruments, Valve Instruments
                        </p>

                        <div class="mt-auto pt-10">
                            <a href="https://wa.me/6281382087708" target="_blank" rel="noopener noreferrer" class="bg-amber-500 inline-flex items-center hover:bg-amber-600 cursor-pointer gap-2 font-semibold self-start px-12 py-3">
                                CONTACT US <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>baseline-whatsapp</title><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full p-5 flex flex-col">
                    <img src="{{ asset('assets/img/project/fitting.webp') }}" alt="Fitting"
                        class="w-full aspect-square object-contain bg-white">

                    <div class="mt-5 flex flex-col flex-1">
                        <h2 class="font-bold text-xl mb-3">Fitting</h2>

                        <p>
                            Blind flange, weld neck, slip-on, threaded flange and pipe fittings in various sizes and ratings.
                        </p>

                        <div class="mt-auto pt-10">
                            <a href="https://wa.me/6281382087708" target="_blank" rel="noopener noreferrer" class="bg-amber-500 inline-flex items-center hover:bg-amber-600 cursor-pointer gap-2 font-semibold self-start px-12 py-3">
                                CONTACT US <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>baseline-whatsapp</title><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full p-5 flex flex-col">
                    <img src="{{ asset('assets/img/project/point-gas.webp') }}" alt="Point Gas"
                        class="w-full aspect-square object-contain bg-white">

                    <div class="mt-5 flex flex-col flex-1">
                        <h2 class="font-bold text-xl mb-3">Point Gas Detector</h1>

                        <p>
                            Fixed gas detector for combustible and toxic gas monitoring, with explosion-proof housing and alarm output.
                        </p>

                        <div class="mt-auto pt-10">
                            <a href="https://wa.me/6281382087708" target="_blank" rel="noopener noreferrer" class="bg-amber-500 inline-flex items-center hover:bg-amber-600 cursor-pointer gap-2 font-semibold self-start px-12 py-3">
                                CONTACT US <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>baseline-whatsapp</title><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full p-5 flex flex-col">
                    <img src="{{ asset('assets/img/project/fire-pump.webp') }}" alt="Fire Pump"
                        class="w-full aspect-square object-contain bg-white">

                    <div class="mt-5 flex flex-col flex-1">
                        <h2 class="font-bold text-xl mb-3">Fire Fighting Pump & Fire Alarm.</h2>

                        <p>
                            Portable fire fighting pump, fire alarm system and accessories for industrial and oil & gas facilities.
                        </p>

                        <div class="mt-auto pt-10">
                            <a href="https://wa.me/6281382087708" target="_blank" rel="noopener noreferrer" class="bg-amber-500 inline-flex items-center hover:bg-amber-600 cursor-pointer gap-2 font-semibold self-start px-12 py-3">
                                CONTACT US <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>baseline-whatsapp</title><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full p-5 flex flex-col">
                    <img src="{{ asset('assets/img/project/valve.webp') }}" alt="valve"
                        class="w-full aspect-square object-contain bg-white">

                    <div class="mt-5 flex flex-col flex-1">
                        <h2 class="font-bold text-xl mb-3">Valve</h2>

                        <p>
                            Valve Gate Valve, Ball Valve, Check Valve, Butterfly Valve, Knife Gate Valve and Actuator.
                        </p>

                        <div class="mt-auto pt-10">
                            <a href="https://wa.me/6281382087708" target="_blank" rel="noopener noreferrer" class="bg-amber-500 inline-flex items-center hover:bg-amber-600 cursor-pointer gap-2 font-semibold self-start px-12 py-3">
                                CONTACT US <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>baseline-whatsapp</title><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-full p-5 flex flex-col">
                    <img src="{{ asset('assets/img/project/project02.webp') }}" alt="Hand Sanitizer Multigrain GOJO"
                        class="w-full aspect-square object-contain bg-white">

                    <div class="mt-5 flex flex-col flex-1">
                        <h2 class="font-bold text-xl mb-3">Hand Sanitizer Multigrain GOJO.</h2>

                        <p>
                            Hand sanitizer and hand hygiene products for industrial and workplace use.
                        </p>

                        <div class="mt-auto pt-10">
                            <a href="https://wa.me/6281382087708" target="_blank" rel="noopener noreferrer" class="bg-amber-500 inline-flex items-center hover:bg-amber-600 cursor-pointer gap-2 font-semibold self-start px-12 py-3">
                                CONTACT US <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>baseline-whatsapp</title><path fill="currentColor" d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('layouts.master')

@push('seo')
    <x-seo title="Business Scope" description="Committed To Keep Business Straight & Safe"/>
@endpush

@section('title', 'Business Scope')

@section('styles')
    <style>
        .title-pages {
            background-image: url('{{ asset('assets/img/hero-banner/business-scope.webp') }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .bg-content-1 {
            background-image: url('{{ asset('assets/img/hero-banner/img01.webp') }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .bg-content-2 {
            background-image: url('{{ asset('assets/img/hero-banner/img02.webp') }}');
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
                <h1 class="text-4xl lg:text-7xl font-extrabold text-white">BUSINESS SCOPE</h1>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="bg-content-1">
                <div class="h-full flex justify-center items-center px-4 sm:px-6 lg:px-32 py-32 bg-black/75">
                    <div>
                        <h5 class="text-xl font-medium text-amber-600 mb-3">Sustainability</h5>
                        <h2 class="text-4xl text-white font-bold mb-20">
                            Committed To Keep Business Straight & Safe
                        </h2>

                        <a href="#" class="bg-amber-600 hover:bg-amber-700 px-10 py-3 font-medium">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="bg-content-2">
                <div class="bg-amber-700/75 px-4 sm:px-6 lg:px-20 py-32">
                    <h5 class="text-2xl font-bold mb-4">Strategic Business</h5>
                    <p class="leading-6 mb-5">
                        We deliver integrated engineering and industrial solutions across multiple sectors, focusing on
                        operational excellence, safety, and sustainable development. Our expertise supports complex projects
                        through reliable execution, innovative approaches, and high-quality standards.
                    </p>

                    <ul class="uppercase font-bold flex flex-col gap-5 text-base md:text-lg lg:text-xl">
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 640 512"><title>oil-can</title><path fill="currentColor" d="M629.8 160.31L416 224l-50.49-25.24a64.1 64.1 0 0 0-28.62-6.76H280v-48h56c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16h56v48h-56L37.72 166.86a32 32 0 0 0-5.79-.53C14.67 166.33 0 180.36 0 198.34v94.95c0 15.46 11.06 28.72 26.28 31.48L96 337.46V384c0 17.67 14.33 32 32 32h274.63c8.55 0 16.75-3.42 22.76-9.51l212.26-214.75c1.5-1.5 2.34-3.54 2.34-5.66V168c.01-5.31-5.08-9.15-10.19-7.69M96 288.67l-48-8.73v-62.43l48 8.73zm453.33 84.66c0 23.56 19.1 42.67 42.67 42.67s42.67-19.1 42.67-42.67S592 288 592 288s-42.67 61.77-42.67 85.33"/></svg>
                            Oil and gas industries (upstream & midstream)
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 1792 1792"><title>industry</title><path fill="currentColor" d="M448 0q26 0 45 19t19 45v891l536-429q17-14 40-14q26 0 45 19t19 45v379l536-429q17-14 40-14q26 0 45 19t19 45v1152q0 26-19 45t-45 19H64q-26 0-45-19t-19-45V64q0-26 19-45T64 0z"/></svg>
                            Fabrication OCTG & drift accessories
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>mountain-filled</title><path fill="currentColor" d="M12.88 2.53c-.35-.66-1.42-.66-1.77 0l-8.99 17c-.16.31-.15.68.03.98s.51.48.86.48h18c.35 0 .68-.18.86-.48s.19-.67.03-.98zM12 5.13l3.07 5.81l-1.07.81l-1.4-1.05a.99.99 0 0 0-1.2 0L10 11.75l-1.07-.81z"/></svg>
                            Geothermal energy
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>lightbulb-solid</title><path fill="currentColor" fill-rule="evenodd" d="M7.05 4.05A7 7 0 0 1 19 9c0 2.407-1.197 3.874-2.186 5.084l-.04.048C15.77 15.362 15 16.34 15 18a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1c0-1.612-.77-2.613-1.78-3.875l-.045-.056C6.193 12.842 5 11.352 5 9a7 7 0 0 1 2.05-4.95M9 21a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2h-4a1 1 0 0 1-1-1m1.586-13.414A2 2 0 0 1 12 7a1 1 0 1 0 0-2a4 4 0 0 0-4 4a1 1 0 0 0 2 0a2 2 0 0 1 .586-1.414" clip-rule="evenodd"/></svg>
                            Power & industry activities
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 8 8"><title>shield</title><path fill="currentColor" d="m4 0l-.19.09l-3.5 1.47l-.31.13V2c0 1.66.67 3.12 1.47 4.19c.4.53.83.97 1.25 1.28S3.55 8 4 8c.46 0 .86-.22 1.28-.53s.85-.75 1.25-1.28C7.33 5.12 8 3.66 8 2v-.31l-.31-.13L4.19.09zm0 1.09V7c-.04 0-.33-.07-.66-.31s-.71-.63-1.06-1.09a6.26 6.26 0 0 1-1.22-3.28L4 1.1z"/></svg>
                            Operation Maintenance
                        </li>
                        <li class="flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24"><title>water</title><path fill="currentColor" d="M2 18v-2q.95 0 1.413-.5T5.35 15t1.938.5t1.362.5q.95 0 1.413-.5T12 15q1.425 0 1.938.5t1.412.5q.95 0 1.388-.5t1.912-.5t1.938.5T22 16v2q-1.425 0-1.937-.5T18.65 17t-1.362.5t-1.938.5q-1.425 0-1.937-.5T12 17q-.95 0-1.412.5T8.65 18t-1.912-.5T5.35 17t-1.412.5T2 18m0-4v-2q.95 0 1.413-.5T5.35 11q1.425 0 1.913.5t1.387.5q.95 0 1.412-.5T12 11q1.425 0 1.925.5t1.375.5q.95 0 1.412-.5t1.938-.5q1.425 0 1.938.5T22 12v2q-1.475 0-1.963-.5T18.65 13t-1.362.5t-1.938.5q-1.425 0-1.937-.5T12 13q-.95 0-1.388.5T8.7 14t-1.962-.5T5.35 13t-1.412.5T2 14m0-4V8q.95 0 1.413-.5T5.35 7q1.425 0 1.913.5T8.65 8q.95 0 1.412-.5T12 7q1.425 0 1.925.5T15.3 8q.95 0 1.412-.5T18.65 7q1.425 0 1.938.5T22 8v2q-1.475 0-1.963-.5T18.65 9t-1.362.5t-1.938.5q-1.425 0-1.937-.5T12 9q-.95 0-1.388.5T8.7 10t-1.962-.5T5.35 9t-1.412.5T2 10"/></svg>
                            Water treatment plant
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="h-[27rem] relative">
                <img class="w-full h-full z-10 object-cover" src="{{ asset('assets/img/hero-banner/img01.webp') }}">
                <div
                    class="absolute bottom-0 left-0 w-full h-48 flex items-start flex-col px-10 py-16 text-white bg-gradient-to-t from-black/70 to-transparent">
                    <h2 class="text-lg uppercase font-bold">Oil and gas industries (upstream & midstream)</h2>
                    <p>Deskripsi Teks...</p>
                </div>
            </div>
            <div class="h-[27rem] relative">
                <img class="w-full h-full z-10 object-cover" src="{{ asset('assets/img/project/project04.webp') }}">
                <div
                    class="absolute bottom-0 left-0 w-full h-48 flex items-start flex-col px-10 py-16 text-white bg-gradient-to-t from-black/70 to-transparent">
                    <h2 class="text-lg uppercase font-bold">Fabrication OCTG & drift accessories</h2>
                    <p>Deskripsi Teks...</p>
                </div>
            </div>
            <div class="h-[27rem] relative">
                <img class="w-full h-full z-10 object-cover" src="{{ asset('assets/img/hero-banner/img3-min.jpg') }}">
                <div
                    class="absolute bottom-0 left-0 w-full h-48 flex items-start flex-col px-10 py-16 text-white bg-gradient-to-t from-black/70 to-transparent">
                    <h2 class="text-lg uppercase font-bold">Geothermal energy</h2>
                    <p>Deskripsi Teks...</p>
                </div>
            </div>
            <div class="h-[27rem] relative">
                <img class="w-full h-full z-10 object-cover" src="{{ asset('assets/img/hero-banner/img02.webp') }}">
                <div
                    class="absolute bottom-0 left-0 w-full h-48 flex items-start flex-col px-10 py-16 text-white bg-gradient-to-t from-black/70 to-transparent">
                    <h2 class="text-lg uppercase font-bold">Power & industry activities</h2>
                    <p>Deskripsi Teks...</p>
                </div>
            </div>
            <div class="h-[27rem] relative">
                <img class="w-full h-full z-10 object-cover"
                    src="{{ asset('assets/img/hero-banner/OPERATION-MAINTENANCE-.webp') }}">
                <div
                    class="absolute bottom-0 left-0 w-full h-48 flex items-start flex-col px-10 py-16 text-white bg-gradient-to-t from-black/70 to-transparent">
                    <h2 class="text-lg uppercase font-bold">Operation Maintenance</h2>
                    <p>Deskripsi Teks...</p>
                </div>
            </div>
            <div class="h-[27rem] relative">
                <img class="w-full h-full z-10 object-cover"
                    src="{{ asset('assets/img/hero-banner/MARINE-INDUSTRY-1-1.webp') }}">
                <div
                    class="absolute bottom-0 left-0 w-full h-48 flex items-start flex-col px-10 py-16 text-white bg-gradient-to-t from-black/70 to-transparent">
                    <h2 class="text-lg uppercase font-bold">Water treatment plant</h2>
                    <p>Deskripsi Teks...</p>
                </div>
            </div>
        </div>
    </section>
@endsection

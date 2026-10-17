@extends('layouts.master')

@push('seo')
    <x-seo title="About Us" description="Starting from our awareness to support the operations of the oil and gas, geothermal, power energy and development industries. We are very confident in our experience and ability to resolve issues, problems both upstream and midstream in the oil and gas industry."/>
@endpush

@section('title', 'About Us')

@section('styles')
    <style>
        .title-pages {
            background-image: url('{{ asset('assets/img/hero-banner/about-us-min.jpg') }}');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .vision-content {
            background-image: url('{{ asset('assets/img/hero-banner/about-us-2-min.jpg') }}');
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
                <h1 class="text-4xl lg:text-7xl font-extrabold text-white">ABOUT US</h1>
            </div>
        </div>

        <div class="px-4 sm:px-6 lg:px-44 py-20">
            <h4 class="text-2xl text-amber-500 mb-2">About Us</h4>
            <h2 class="text-4xl font-bold mb-2">
                PT. Alifya Muda Karya was started at the year 2020.
            </h2>
            <p>
                Starting from our awareness to support the operations of the oil and gas, geothermal, power energy and
                development industries. We are very confident in our experience and ability to resolve issues, problems both
                upstream and midstream in the oil and gas industry.
                <br>
                <br>
                Our focus in the future is not only to succeed in procuring goods but to provide the best value from our
                services. We are proud to provide the best service until the success of your company’s industrial
                activities.
            </p>
        </div>

        <div class="vision-content">
            <div class="px-4 sm:px-6 lg:px-44 py-20 lg:py-40 bg-black/75 text-white">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <h2 class="text-4xl font-bold mb-3">Visi</h2>
                        <p>
                            Our vision is to be recognize as a value company to offering solutions supply chain demand and
                            services in your company activities.
                        </p>
                    </div>

                    <div>
                        <h2 class="text-4xl font-bold mb-3">Misi</h2>
                        <p>
                            Our mission is to focus on serve and support technical solutions and solving problem issues your
                            company needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-4 sm:px-6 lg:px-44 py-24 text-base/8">
            <p>
                We consider integrity to be of vital importance and representing the fundamental value that underlies the company’s relationship with all parties, focus to solve our customer issue.
                <br>
                <br>
                Integrity is never to be sacrificed for the sake of results. Therefore, we consider that the end may not necessarily justify the means.
                <br>
                <br>
                We believe there to be no more important an issue than lawful and ethical conduct of employees in their relationship with customers, government officials and business partners.
            </p>
        </div>

    </section>
@endsection

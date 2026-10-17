@extends('layouts.master')

@push('seo')
    <x-seo
        description="Starting from our awareness to support the operations of the oil and gas, geothermal, power energy and development industries." />
@endpush

@section('title', 'Home')

@section('styles')
    <style>
        .swiper {
            width: 100%;
        }

        .swiper .swiper-button-next,
        .swiper .swiper-button-prev {
            color: white;
            width: 30px;
            height: 30px;
        }

        .swiper-slide {
            position: relative;
            text-align: center;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide .img-banner {
            position: absolute;
            z-index: 1;
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }


        .swiper-slide .swiper-text {
            width: 100% !important;
            height: 100% !important;
            z-index: 2;
            font-size: 50px;
            color: white;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .swiper-text h1 {
            color: white;
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            margin-bottom: 20px;
        }
    </style>
@endsection

@section('content')
    {{-- Hero Banner --}}
    <div class="swiper mySwiper h-[300px] sm:h-[500px] lg:h-dvh">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img class="img-banner" src="{{ asset('assets/img/hero-banner/img01.webp') }}" />
                <div class="swiper-text">
                    <h2 class="text-[1.5rem] md:text-[2.5rem] lg:text-[3rem]">We bring value to our customer</h2>

                    <a href="{{ url('/') }}"
                        class="border-2 hover:bg-white hover:text-black py-4 px-5 text-[16px] font-bold border-white rounded-full">
                        Read more
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <img class="img-banner" src="{{ asset('assets/img/hero-banner/img02.webp') }}" />
                <div class="swiper-text">
                    <h2 class="text-[1.5rem] md:text-[2.5rem] lg:text-[3rem]">We bring value to our customer</h2>

                    <a href="{{ url('/') }}"
                        class="border-2 hover:bg-white hover:text-black py-4 px-5 text-[16px] font-bold border-white rounded-full">
                        Read more
                    </a>
                </div>
            </div>
            <div class="swiper-slide">
                <img class="img-banner" src="{{ asset('assets/img/hero-banner/img03.webp') }}" />
                <div class="swiper-text">
                    <h2 class="text-[1.5rem] md:text-[2.5rem] lg:text-[3rem]">We bring value to our customer</h2>

                    <a href="{{ url('/') }}"
                        class="border-2 hover:bg-white hover:text-black py-4 px-5 text-[16px] font-bold border-white rounded-full">
                        Read more
                    </a>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>

    {{-- Client Content --}}
    <div class="mx-auto py-20">

        <div class="px-4 sm:px-10 lg:px-35">
            <h5 class="text-[1.25rem] font-medium">Sustainability</h5>
            <h2 class="text-[2.5rem] font-bold">Our Clients</h2>
        </div>

        <div class="px-4 sm:px-10 lg:px-35">
            <div class="swiper mySwiper2 mt-15 mb-30">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex h-32 items-center justify-center p-3">
                            <img class="max-h-full max-w-full object-contain"
                                src="{{ asset('assets/img/client/ANTAM.webp') }}" alt="antam" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex h-32 items-center justify-center p-3">
                            <img class="max-h-full max-w-full object-contain"
                                src="{{ asset('assets/img/client/CV-MANDALA-PUTRA.webp') }}" alt="mandala" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex h-32 w-full items-center justify-center p-3">
                            <img class="max-h-full max-w-full object-contain"
                                src="{{ asset('assets/img/client/CV-WIDIA-JAYA-MANDIRI.webp') }}" alt="widia" />

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex h-32 w-full items-center justify-center p-3">
                            <img class="max-h-full max-w-full object-contain"
                                src="{{ asset('assets/img/client/GAWI-PLANTATION.webp') }}" alt="gawi" />

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex h-32 w-full items-center justify-center p-3">
                            <img class="max-h-full max-w-full object-contain"
                                src="{{ asset('assets/img/client/KS-DRILLING.webp') }}" alt="drilling" />

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex h-32 w-full items-center justify-center p-3">
                            <img class="max-h-full max-w-full object-contain"
                                src="{{ asset('assets/img/client/PBS.webp') }}" alt="drilling" />

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex h-32 w-full items-center justify-center p-3">
                            <img class="max-h-full max-w-full object-contain"
                                src="{{ asset('assets/img/client/PT-Freeport-Indonesia.png') }}" alt="drilling" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex h-32 w-full items-center justify-center p-3">
                            <img class="max-h-full max-w-full object-contain"
                                src="{{ asset('assets/img/client/intertek.webp') }}" alt="drilling" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex h-32 w-full items-center justify-center p-3">
                            <img class="max-h-full max-w-full object-contain"
                                src="{{ asset('assets/img/client/PT-BUKAKA-TEKNIK-UTAMA.webp') }}" alt="drilling" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex h-32 w-full items-center justify-center p-3">
                            <img class="max-h-full max-w-full object-contain"
                                src="{{ asset('assets/img/client/PT-GREENTEK-ELEKTRIKAL-INDONESIA.webp') }}"
                                alt="drilling" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex h-32 w-full items-center justify-center p-3">
                            <img class="max-h-full max-w-full object-contain"
                                src="{{ asset('assets/img/client/PT-MEPROFARM.webp') }}" alt="drilling" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex h-32 w-full items-center justify-center p-3">
                            <img class="max-h-full max-w-full object-contain"
                                src="{{ asset('assets/img/client/PT-MOLEX-AYUS.webp') }}" alt="drilling" />
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex h-32 w-full items-center justify-center p-3">
                            <img class="max-h-full max-w-full object-contain"
                                src="{{ asset('assets/img/client/SOECHI-LINES.webp') }}" alt="drilling" />
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination2 text-center mt-10"></div>
            </div>
        </div>



        <div class="lg:px-35">
            {{-- About Us Content --}}

            <div class="bg-[#FF7A3D] p-3 md:p-10">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                    <div>
                        <h4 class="font-bold text-lg mb-2">About Us</h4>
                        <h1 class="font-bold text-3xl md:text-4xl mb-2">
                            PT. Alifya Muda Karya
                            <br>
                            was started at the year 2020
                        </h1>
                        <p class="text-justify text-base/7 text-balance">
                            Starting from our awareness to support the operations of the oil and gas, geothermal, power
                            energy
                            and development industries. We are very confident in our experience and ability to resolve
                            issues,
                            problems both upstream and midstream in the oil and gas industry. Our focus in the future is not
                            only to succeed in procuring goods but to provide the best value from our services. We are proud
                            to
                            provide the best service until the success of your company’s industrial activities.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 gap-2 md:grid-cols-2">
                        <div class="p-3">
                            <h2 class="text-4xl font-bold mb-3">512+</h2>
                            <h2 class="text-base text-wrap">Successfully Project Finished</h2>
                        </div>
                        <div class="p-3">
                            <h2 class="text-4xl font-bold mb-3">25+</h2>
                            <h2 class="text-base text-wrap">Years of experience with proud</h2>
                        </div>
                        <div class="p-3">
                            <h2 class="text-4xl font-bold mb-3">1120+</h2>
                            <h2 class="text-base text-wrap">Revenue in 2017 investmen</h2>
                        </div>
                        <div class="p-3">
                            <h2 class="text-4xl font-bold mb-3">1520+</h2>
                            <h2 class="text-base text-wrap">Colleagues & counting more daily</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-4 sm:px-10 lg:px-35 mt-20">
            <h5 class="text-[1.25rem] font-medium">Projects Scope</h5>

            <div class="flex justify-between items-center flex-wrap">
                <h2 class="text-[2.5rem] font-bold">Our Latest Works</h2>
                <a href="{{ url('/products') }}" class="px-5 font-medium py-2 bg-amber-500">VIEW PROJECTS</a>
            </div>

            <div class="swiper mySwiper3 mt-15 mb-30">
                <div class="swiper-wrapper">
                    @for ($i = 1; $i <= 8; $i++)
                        <div class="swiper-slide">
                            <div class="max-w-[224px] h-auto flex items-center justify-center">
                                <img class="max-h-full max-w-full object-contain"
                                    src="{{ asset('assets/img/project/project0' . $i . '.webp') }}">
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="swiper-pagination3 text-center mt-10"></div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        var swiper = new Swiper('.mySwiper', {
            spaceBetween: 0,
            centeredSlides: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.mySwiper .swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        var swiper2 = new Swiper('.mySwiper2', {
            spaceBetween: 0,
            centeredSlides: false,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.mySwiper2 .swiper-pagination2',
                clickable: true
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 6,
                },
            },
        });

        var swiper3 = new Swiper('.mySwiper3', {
            loop: true,
            spaceBetween: 25,
            centeredSlides: false,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.mySwiper3 .swiper-pagination3',
                clickable: true
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 6,
                },
            },
        });
    </script>
@endsection

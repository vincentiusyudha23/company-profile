@extends('layouts.master')

@push('seo')
    <x-seo title="Contact Us" description="Get in touch with us for any inquiries or support you may need."/>
@endpush

@section('title', 'Contact Us')

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
                <h1 class="text-4xl lg:text-7xl font-extrabold text-white">CONTACT US</h1>
            </div>
        </div>

        <div class="px-4 sm:px-6 lg:px-44 py-20">
            <h2 class="text-4xl font-bold text-center mb-15">Contact Details</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 md:gap-5 mb-10">
                <div class="lg:col-span-7">
                    <h5 class="text-2xl font-bold mb-4">Our Main Office</h5>

                    <h5 class="text-xl font-bold mb-4">
                        Address:
                    </h5>

                    <p class="text-lg font-semibold mb-6">
                        Jl. Raya Pasar Kecapi No. 36 B, Kel. Jatirahayu, Kec. Pd. Melati, Kota Bekasi, Jawa Barat 17414
                    </p>

                    <p class="mb-6">
                        Thank you for visiting our website, please contact us if you have any questions about our services
                    </p>

                    <a href="https://wa.me/6281382087708" target="_blank" rel="noopener noreferrer"
                        class="bg-amber-500 inline-flex items-center hover:bg-amber-600 cursor-pointer gap-2 font-semibold self-start px-12 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24">
                            <title>baseline-whatsapp</title>
                            <path fill="currentColor"
                                d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28" />
                        </svg>
                        CONTACT US NOW
                    </a>
                </div>

                <div class="lg:col-span-5 space-y-6">
                    <div class="mb-4">
                        <div class="flex items-center gap-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 640 640"
                                fill="#fe9a00">
                                <title fill="#fe9a00">phone-square</title>
                                <path fill="#fe9a00"
                                    d="M160 96c-35.3 0-64 28.7-64 64v320c0 35.3 28.7 64 64 64h320c35.3 0 64-28.7 64-64V160c0-35.3-28.7-64-64-64zm88 96.7c9.8-2.7 20.1 2.4 24 11.8l20.3 48.7c3.4 8.3 1.1 17.8-5.9 23.5l-22.1 18c16.2 35.8 44.5 65 79.6 82.4l19.3-23.6c5.7-6.9 15.2-9.3 23.5-5.9l48.7 20.3c9.4 3.9 14.4 14.2 11.8 24l-.8 2.8c-8.8 32.3-40.1 59.9-78.2 51.8c-87.5-18.5-156.3-87.4-174.9-174.9c-8.1-38.1 19.5-69.4 51.8-78.2l2.8-.8z" />
                            </svg>
                            <h5 class="text-2xl font-bold">Phone</h5>
                        </div>

                        <p class="pl-11 font-medium">HP : +62 81382087708</p>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center gap-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 24 24"
                                fill="#fe9a00">
                                <title fill="#fe9a00">baseline-email</title>
                                <path fill="#fe9a00"
                                    d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2m0 4l-8 5l-8-5V6l8 5l8-5z" />
                            </svg>
                            <h5 class="text-2xl font-bold">Email</h5>
                        </div>

                        <p class="pl-11 font-medium">Email : contact@alifyamudatk.com</p>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center gap-2 mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 24 24"
                                fill="#fe9a00">
                                <title fill="#fe9a00">clock</title>
                                <path fill="#fe9a00"
                                    d="M12 2A10 10 0 0 0 2 12a10 10 0 0 0 10 10a10 10 0 0 0 10-10A10 10 0 0 0 12 2m4.2 14.2L11 13V7h1.5v5.2l4.5 2.7z" />
                            </svg>
                            <h5 class="text-2xl font-bold">Operational Hours</h5>
                        </div>

                        <p class="pl-11 font-medium">Monday - Saturday: 8.00 WIB - 17.00 WIB</p>
                    </div>
                </div>
            </div>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.4346585998842!2d106.92218506955417!3d-6.2980360996056834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6992a866cea123%3A0x7ab002ea307f53a9!2sJl.%20Pasar%20Kecapi%20No.36B%2C%20RT.004%2FRW.008%2C%20Jatirahayu%2C%20Kec.%20Pd.%20Melati%2C%20Kota%20Bks%2C%20Jawa%20Barat%2017414!5e0!3m2!1sen!2sid!4v1792169996709!5m2!1sen!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
    </section>
@endsection

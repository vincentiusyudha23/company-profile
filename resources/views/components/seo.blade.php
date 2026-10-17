@props([
    'title' => null,
    'description' => null,
    'image' => null,
    'type' => 'website',
    'schema' => null,
    'noindex' => false,
])

@php
    $company     = config('company');
    $fullTitle   = $title ? $title . ' | ' . $company['name'] : $company['name'];
    $description = $description ?? $company['description'];
    $ogImage     = asset($image ?? $company['og_default']);
    $canonical   = url()->current();

    $organization = [
        '@context'     => 'https://schema.org',
        '@type'        => 'LocalBusiness',
        'name'         => $company['name'],
        'url'          => config('app.url'),
        'logo'         => asset($company['logo']),
        'image'        => $ogImage,
        'description'  => $company['description'],
        'telephone'    => $company['phone'],
        'email'        => $company['email'],
        'openingHours' => $company['hours'],
        'address'      => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => $company['address']['street'],
            'addressLocality' => $company['address']['city'],
            'addressRegion'   => $company['address']['region'],
            'postalCode'      => $company['address']['postal'],
            'addressCountry'  => $company['address']['country'],
        ],
    ];

    $jsonFlags = JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG;
@endphp

<title>{{ $fullTitle }}</title>
<meta name="description" content="{{ $description }}">
<link rel="canonical" href="{{ $canonical }}">
<meta name="robots" content="{{ $noindex ? 'noindex, nofollow' : 'index, follow, max-image-preview:large' }}">

<meta property="og:type" content="{{ $type }}">
<meta property="og:site_name" content="{{ $company['name'] }}">
<meta property="og:title" content="{{ $fullTitle }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:locale" content="id_ID">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $fullTitle }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $ogImage }}">

<script type="application/ld+json">{!! json_encode($organization, $jsonFlags) !!}</script>

@if ($schema)
    <script type="application/ld+json">{!! json_encode($schema, $jsonFlags) !!}</script>
@endif
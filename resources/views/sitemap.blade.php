<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach ($urls as $u)
    <url>
        <loc>{{ $u['loc'] }}</loc>
        @isset($u['lastmod'])
        <lastmod>{{ $u['lastmod'] }}</lastmod>
        @endisset
        <priority>{{ $u['priority'] }}</priority>
    </url>
@endforeach
</urlset>
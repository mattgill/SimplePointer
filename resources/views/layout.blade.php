<!DOCTYPE html>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168725062-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-168725062-1');
</script>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script data-ad-client="ca-pub-1366286408678477" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#48bb78">
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="theme-color" content="#48bb78">
    <meta name="description" content="A free online agile pointing poker application">
    <meta name="keywords" content="agile, pointing, pointing poker, free">
    <meta name="author" content="Wes Hulette">
    <meta property="og:url" content="https://simplepointer.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="A free online agile pointing poker application" />
    <meta property="og:description" content="A free online agile pointing poker application" />
    <title>Simple Pointer - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

</head>

<body class="body">

    <header>
        <nav class="flex flex-wrap items-center justify-between p-3 bg-green-500">
            <a href="{{ route('home') }}">
                <div class="flex items-center flex-shrink-0 mr-6 text-white">
                    <svg class="w-8 h-8 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" width="54" height="54"
                        viewBox="0 0 54 54">
                        <path
                            d="M 48.847656 48.417969 L 48.863281 48.417969 C 48.945312 48.089844 49.039062 47.691406 49.132812 47.355469 L 49.570312 45.960938 L 48.113281 45.960938 L 48.558594 47.359375 C 48.667969 47.703125 48.761719 48.089844 48.847656 48.417969 Z M 48.847656 48.417969 " />
                        <path
                            d="M 25.414062 10.121094 L 25.394531 10.121094 C 25.3125 10.449219 25.21875 10.84375 25.128906 11.179688 L 24.691406 12.574219 L 26.144531 12.574219 L 25.699219 11.179688 C 25.589844 10.835938 25.496094 10.449219 25.414062 10.121094 Z M 25.414062 10.121094 " />
                        <path
                            d="M 5.640625 48.054688 C 5.886719 49.621094 6.726562 51 8.011719 51.933594 C 9.039062 52.683594 10.25 53.074219 11.496094 53.074219 C 11.804688 53.074219 12.117188 53.050781 12.429688 53 L 20.5625 51.722656 C 20.890625 51.78125 21.222656 51.8125 21.558594 51.8125 C 21.867188 51.8125 22.179688 51.789062 22.492188 51.738281 L 23.230469 51.625 C 23.875 51.929688 24.589844 52.113281 25.351562 52.113281 L 48.933594 52.113281 C 51.683594 52.113281 53.914062 49.882812 53.914062 47.132812 L 53.914062 11.269531 C 53.914062 8.515625 51.683594 6.285156 48.933594 6.285156 L 45.230469 6.285156 L 45.164062 5.859375 C 44.917969 4.292969 44.078125 2.914062 42.792969 1.976562 C 41.511719 1.042969 39.945312 0.664062 38.375 0.914062 L 28.390625 2.480469 L 5.015625 5.835938 C 1.78125 6.34375 -0.4375 9.386719 0.0742188 12.625 Z M 26.824219 14.964844 L 26.3125 13.355469 L 24.519531 13.355469 L 24.035156 14.964844 L 22.964844 14.964844 L 24.78125 9.296875 L 26.101562 9.296875 L 27.945312 14.964844 Z M 47.433594 43.574219 L 47.945312 45.179688 L 49.738281 45.179688 L 50.222656 43.574219 L 51.292969 43.574219 L 49.476562 49.242188 L 48.15625 49.242188 L 46.3125 43.574219 Z M 45.945312 25.234375 C 45.945312 25.234375 46.054688 31.164062 38.46875 37.457031 C 37.621094 38.160156 36.171875 38.160156 35.328125 37.453125 C 27.796875 31.164062 28.34375 25.234375 28.34375 25.234375 C 28.34375 22.574219 30.5 20.417969 33.160156 20.417969 C 34.816406 20.417969 36.277344 21.253906 37.144531 22.53125 C 38.011719 21.253906 39.472656 20.417969 41.128906 20.417969 C 43.789062 20.417969 45.945312 22.574219 45.945312 25.234375 Z M 15.375 6.464844 L 38.671875 2.804688 C 39.730469 2.636719 40.792969 2.894531 41.664062 3.527344 C 42.53125 4.160156 43.105469 5.09375 43.269531 6.15625 L 43.289062 6.285156 L 25.351562 6.285156 C 22.601562 6.285156 20.371094 8.515625 20.371094 11.269531 L 20.371094 47.132812 C 20.371094 48.074219 20.644531 48.945312 21.101562 49.699219 L 20.601562 49.777344 C 20.105469 49.652344 19.628906 49.433594 19.203125 49.121094 C 18.332031 48.492188 17.761719 47.558594 17.59375 46.496094 L 12.027344 11.066406 C 11.683594 8.875 13.1875 6.808594 15.375 6.464844 Z M 5.300781 7.726562 L 11.261719 6.875 C 10.328125 8.113281 9.875 9.710938 10.136719 11.363281 L 15.703125 46.792969 C 15.914062 48.140625 16.570312 49.347656 17.566406 50.253906 L 12.132812 51.105469 C 11.070312 51.273438 10.007812 51.015625 9.140625 50.382812 C 8.269531 49.75 7.699219 48.816406 7.53125 47.757812 L 1.964844 12.324219 C 1.621094 10.136719 3.125 8.070312 5.300781 7.726562 Z M 5.300781 7.726562 " />
                    </svg>

                    <span class="text-xl font-semibold tracking-tight">Simple Pointer</span>
                </div>
            </a>
        </nav>
    </header>


    <div class="container mx-auto page-content">

        <div id="app">
            @yield('content')
        </div>


    </div>

    <footer class="footer">
        <div class="container mx-auto font-light text-center">
            <small>Copyright &copy; {{ date('Y') }} Simple Pointer</small>
            <small class="ml-12"><a href="{{ route('terms') }}">Terms & Conditions</a></small>
        </div>
    </footer>

    <script type="text/javascript" src="{{ mix('js/manifest.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>

</html>

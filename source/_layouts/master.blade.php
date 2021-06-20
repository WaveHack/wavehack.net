<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Software developer, video gamer, dank meme connoisseur.">

    <meta property="og:url" content="https://www.wavehack.net">
    <meta property="og:type" content="website">
    <meta property="og:title" content="WaveHack">
    <meta property="og:description" content="Software developer, video gamer, dank meme connoisseur.">
    <meta property="og:image" content="https://www.wavehack.net/assets/images/wavehack_square_bg.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="400">
    <meta property="og:image:height" content="400">
    <meta property="og:image:alt" content="Avatar of WaveHack">

    <title>WaveHack</title>

    <link rel="icon" href="data:;base64,iVBORw0KGgo=">

    @stack('meta')

    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
</head>
<body class="relative h-full bg-gray-100 text-gray-800 antialiased font-sans">

@yield('body')

{{--@yield('body')--}}

<script src="{{ mix('js/main.js') }}"></script>
@stack('scripts')

</body>
</html>

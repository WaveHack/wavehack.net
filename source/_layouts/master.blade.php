<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{--<meta name="description" content="WaveHack.net">--}}

    {{-- todo: opengraph --}}

    <title>WaveHack.net</title>

    {{-- todo: rel=home/icon, atom+xml? --}}

    @stack('meta')

    {{-- todo: GA? --}}

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
</head>
<body class="h-full relative bg-gray-100 text-gray-800 font-sans">

<div id="page-container" class="lg:mx-auto">
    <div class="lg:flex">
        <div class="lg:w-1/3">
            <div class="flex mt-4 mx-4 lg:block">
                <div class="w-1/3 sm:w-1/4 md:w-1/6 lg:w-full">
                    <img src="/assets/images/wavehack_square_bg.png" alt="WaveHack's Avatar" class="rounded-lg shadow">
                </div>
                <div class="w-2/3 sm:w-3/4 md:w-5/6 lg:w-full ml-4 lg:ml-0 lg:mt-2">
                    <h1 class="text-2xl md:text-3xl lg:text-4xl text-red-800 font-bold">
                        WaveHack
                        <span class="text-sm md:text-base text-gray-500 font-light float-right" title="Pronouns">any/any</span>
                    </h1>
                    <p class="text-sm md:text-base">Software developer, open source enthusiast, Linux lover, Windows user.</p>
                    <p class="text-sm md:text-base hidden sm:block sm:mt-2">I rant about computers, RT dank memes, and build unconventional software.</p>
                </div>
            </div>
        </div>

        <div class="lg:w-2/3">
            <div class="flex flex-wrap mt-4 mx-2">
                <div class="px-2 w-1/2">
                    <h2 class="text-xl md:text-2xl font-bold">Social</h2>
                    <p class="text-xs md:text-base text-gray-600">Looking for me? I can usually be found on these.</p>

                    <div class="text-sm md:text-base lg:text-lg">
                        <div class="flex mt-2 lg:mt-4">
                            <div class="w-6 h-6 lg:w-8 lg:h-8 text-center rounded shadow tippy" data-tippy-content="Twitter" style="background-color: #1da1f2">
                                <i class="fab fa-twitter align-middle text-white md:text-sm lg:text-lg lg:pt-1"></i>
                            </div>
                            <div class="ml-2 self-center">
                                <a href="https://twitter.com/WaveHack" class="text-blue-500">
                                    WaveHack
                                    <i class="fas fa-external-link-alt align-top text-gray-400" style="font-size: 0.5rem"></i>
                                </a>
                            </div>
                        </div>

                        <div class="flex mt-2 lg:mt-4">
                            <div class="w-6 h-6 lg:w-8 lg:h-8 text-center rounded shadow tippy" data-tippy-content="Discord" style="background-color: #738adb">
                                <i class="fab fa-discord align-middle text-white md:text-sm lg:text-lg lg:pt-1"></i>
                            </div>
                            <div class="ml-2 self-center">
                                Sharqy<span class="text-xs md:text-sm lg:text-base font-thin text-gray-500">#1337</span>
                            </div>
                        </div>
                    </div>

                    <h2 class="mt-4 lg:mt-8 text-xl md:text-2xl font-bold">Coding</h2>
                    <p class="text-xs md:text-base text-gray-600">I like coding and coding accessories.</p>

                    <div class="text-sm md:text-base lg:text-lg">
                        <div class="flex mt-2 lg:mt-4">
                            <div class="w-6 h-6 lg:w-8 lg:h-8 text-center rounded shadow tippy" data-tippy-content="GitHub" style="background-color: #211f1f">
                                <i class="fab fa-github align-middle text-white md:text-sm lg:text-lg lg:pt-1"></i>
                            </div>
                            <div class="ml-2 self-center">
                                <a href="https://github.com/WaveHack" class="text-blue-500">
                                    WaveHack
                                    <i class="fas fa-external-link-alt align-top text-gray-400" style="font-size: 0.5rem"></i>
                                </a>
                            </div>
                        </div>

                        <div class="flex mt-2 lg:mt-4">
                            <div class="w-6 h-6 lg:w-8 lg:h-8 text-center rounded shadow tippy" data-tippy-content="PGP Key" style="background-color: #003399">
                                <i class="fas fa-signature align-middle text-white md:text-sm lg:text-lg lg:pt-1"></i>
                            </div>
                            <div class="ml-2 self-center">
                                <a href="https://pgp.surfnet.nl/pks/lookup?op=get&search=0xE556A545A7FA4F6E" class="text-blue-500">
                                    0xA7FA4F6E
                                    <i class="fas fa-external-link-alt align-top text-gray-400" style="font-size: 0.5rem"></i>
                                </a>
                            </div>
                        </div>

                        <div class="flex mt-2 lg:mt-4">
                            <div class="w-6 h-6 lg:w-8 lg:h-8 text-center rounded shadow tippy" data-tippy-content="Public SSH Key" style="background-color: #f3bd1a">
                                <i class="fas fa-key align-middle text-white md:text-sm lg:text-lg lg:pt-1"></i>
                            </div>
                            <div class="ml-2 self-center">
                                <a href="#" class="text-blue-500" id="toggle-ssh-key">
                                    Public Key
                                </a>
                            </div>
                        </div>

                        <div class="flex mt-2 text-xs font-mono break-all" id="ssh-key" style="display: none">ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCl11WmnhPYVZkkXPUbDsPLu/yOTAcmHyY1AMlD3/A6m9v+C4U/Fp4XXfX2KKrh5uu72j/v/SyxG0g7+tOCf7v4LXbLFjs3Flrat20peQ5shaOmrJhwQ66PkvkqqbiOQO7K1YmSHuDlX2VG6FxjF0klADNpxl3m5/+KoORc0/Xz10AxZce35vqyN440w28bItHb7RINX/IVklZw92GceIUkYEjs1dqfTtZFZXBt6CmV6c7qEKAbpxZjAQrrfw3xBMss2lfCFc206jVoSGxQ6b7EFo32Z7TdnnxYlC1mCJDuk1chgnGKoSUsDs4D9l7OmJ6q0okbaeOwiXNL+mqEPtk7 wavehack</div>
                    </div>
                </div>

                <div class="px-2 w-1/2">
                    <h2 class="text-xl md:text-2xl font-bold">Gaming</h2>
                    <p class="text-xs md:text-base text-gray-600">I mostly play on these platforms, in rough order of preference.</p>

                    <div class="text-sm md:text-base lg:text-lg">
                        <div class="flex mt-2 lg:mt-4">
                            <div class="w-6 h-6 lg:w-8 lg:h-8 text-center rounded shadow tippy" data-tippy-content="Playstation Network" style="background-color: #003087">
                                <i class="fab fa-playstation align-middle text-white md:text-sm lg:text-lg lg:pt-1"></i>
                            </div>
                            <div class="ml-2 self-center">
                                WaveHack
                            </div>
                        </div>

                        <div class="flex mt-2 lg:mt-4">
                            <div class="w-6 h-6 lg:w-8 lg:h-8 text-center rounded shadow tippy" data-tippy-content="Steam" style="background-color: #000000">
                                <i class="fab fa-steam align-middle text-white md:text-sm lg:text-lg lg:pt-1"></i>
                            </div>
                            <div class="ml-2 self-center">
                                <a href="https://steamcommunity.com/id/sharqy" class="text-blue-500">
                                    Sharqy
                                    <i class="fas fa-external-link-alt align-top text-gray-400" style="font-size: 0.5rem"></i>
                                </a>
                            </div>
                        </div>

                        <div class="flex mt-2 lg:mt-4">
                            <div class="w-6 h-6 lg:w-8 lg:h-8 text-center rounded shadow tippy" data-tippy-content="Nintendo Switch" style="background-color: #e60012">
                                <i class="fab fa-nintendo-switch align-middle text-white md:text-sm lg:text-lg lg:pt-1"></i>
                            </div>
                            <div class="ml-2 self-center text-xs md:text-base">
                                SW-7262-9578-1601
                            </div>
                        </div>

                        <div class="flex mt-2 lg:mt-4">
                            <div class="w-6 h-6 lg:w-8 lg:h-8 text-center rounded shadow tippy" data-tippy-content="Nintendo 3DS" style="background-color: #e60012">
                                <div class="inline-block align-middle text-white tracking-tighter" style="font-size: 0.625rem;">3DS</div>
                            </div>
                            <div class="ml-2 self-center text-xs md:text-base">
                                0000-0000-0000
                            </div>
                        </div>

                        <div class="flex mt-2 lg:mt-4">
                            <div class="w-6 h-6 lg:w-8 lg:h-8 text-center rounded shadow tippy" data-tippy-content="Battle.net" style="background-color: #4d8ad0">
                                <i class="fab fa-battle-net align-middle text-white md:text-sm lg:text-lg lg:pt-1"></i>
                            </div>
                            <div class="ml-2 self-center">
                                Sharqy<span class="text-xs md:text-sm lg:text-base font-thin text-gray-500">#2639</span>
                            </div>
                        </div>

                        <div class="flex mt-2 lg:mt-4">
                            <div class="w-6 h-6 lg:w-8 lg:h-8 text-center rounded shadow tippy" data-tippy-content="Xbox Live Gamertag" style="background-color: #107c10">
                                <i class="fab fa-xbox align-middle text-white md:text-sm lg:text-lg lg:pt-1"></i>
                            </div>
                            <div class="ml-2 self-center">
                                WaveHack
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4 mx-2">
        <div class="mx-2">
            <h2 class="text-xl md:text-2xl lg:text-2xl font-bold">Projects</h2>
            <p class="text-xs md:text-base text-gray-600">Sometimes I build cool shit. Feel free to check it out.</p>
        </div>

        <div class="sm:flex mt-2 lg:mt-4">
            <div class="mb-4 mx-2 bg-white rounded overflow-hidden shadow-lg sm:w-1/2 lg:w-1/3 sm:self-start">
                <a href="#">
                    <img src="/assets/images/projects/opendominion.png" alt="OpenDominion" class="w-full p-4 bg-gray-200">
                    <div class="p-4">
                        <div class="mb-2 text-base font-bold">
                            OpenDominion
                            <div class="float-right font-normal">
                                <i class="fab fa-laravel mr-1" style="color: #f05340" title="Built with Laravel"></i>
                                <i class="fab fa-github" title="Open Source"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm">
                            A free and online competitive text-based multiplayer strategy game in a medieval fantasy setting.
                        </p>
                    </div>
                </a>

            </div>

            <div class="mb-4 mx-2 bg-white rounded overflow-hidden shadow-lg sm:w-1/2 lg:w-1/3 sm:self-start">
                <a href="#">
                    <img src="http://placehold.it/512x256" alt="OpenDominion" class="w-full">
                    <div class="p-4">
                        <div class="mb-2 text-base font-bold">
                            Datavania
                            <div class="float-right font-normal">
                                <i class="fab fa-laravel mr-1" style="color: #f05340" title="Built with Laravel"></i>
                                <i class="fab fa-github" title="Open Source"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm">
                            A Castlevania: Harmony of Despair item and monster database.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="body-background" class="{{--hidden lg:block--}} lg:bg-scroll lg:bg-left-bottom lg:bg-no-repeat lg:bg-contain absolute left-0 bottom-0 w-full h-full">
    {{--    <img src="/assets/images/wavehack_background.png" alt="Background image">--}}
</div>

{{--@yield('body')--}}

<script src="{{ mix('js/main.js') }}"></script>
@stack('scripts')

</body>
</html>

@extends('_layouts.master')

@section('body')
    <div id="page-container" class="lg:mx-auto">
        <div class="lg:flex lg:pt-6">
            <div class="lg:w-1/3">
                <div class="flex mt-4 mx-4 lg:block">
                    <div class="w-1/3 sm:w-1/4 md:w-1/6 lg:w-full">
                        <img src="/assets/images/wavehack_square_bg.png" alt="WaveHack's Avatar" class="rounded-lg shadow">
                    </div>
                    <div class="w-2/3 sm:w-3/4 md:w-5/6 lg:w-full ml-4 lg:ml-0 lg:mt-2">
                        <h1 class="text-2xl md:text-3xl lg:text-4xl text-red-800 font-bold">
                            WaveHack
                            <span class="text-sm font-normal md:text-base text-gray-500 float-right tippy" data-tippy-content="Pronouns">any/any</span>
                        </h1>
                        <p class="text-sm md:text-base">Software developer, video gamer, dank meme connoisseur.</p>
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
                                <div class="flex flex-wrap justify-center content-center w-6 h-6 lg:w-8 lg:h-8 rounded shadow tippy" data-tippy-content="Twitter" style="background-color: #1da1f2">
                                    <i class="fab fa-twitter text-white"></i>
                                </div>
                                <div class="ml-2 self-center">
                                    <a href="https://twitter.com/WaveHack" class="text-blue-500">
                                        WaveHack
                                        <i class="fas fa-external-link-alt align-top pt-1 text-gray-300" style="font-size: 0.75rem"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="flex mt-2 lg:mt-4">
                                <div class="flex flex-wrap justify-center content-center w-6 h-6 lg:w-8 lg:h-8 rounded shadow tippy" data-tippy-content="Discord" style="background-color: #738adb">
                                    <i class="fab fa-discord align-middle text-white"></i>
                                </div>
                                <div class="ml-2 self-center">
                                    Sharqy<span class="text-xs md:text-sm lg:text-base text-gray-500">#6160</span>
                                </div>
                            </div>
                        </div>

                        <h2 class="mt-4 lg:mt-8 text-xl md:text-2xl font-bold">Coding</h2>
                        <p class="text-xs md:text-base text-gray-600">I like coding and coding accessories.</p>

                        <div class="text-sm md:text-base lg:text-lg">
                            <div class="flex mt-2 lg:mt-4">
                                <div class="flex flex-wrap justify-center content-center w-6 h-6 lg:w-8 lg:h-8 rounded shadow tippy" data-tippy-content="GitHub" style="background-color: #211f1f">
                                    <i class="fab fa-github align-middle text-white"></i>
                                </div>
                                <div class="ml-2 self-center">
                                    <a href="https://github.com/WaveHack" class="text-blue-500">
                                        WaveHack
                                        <i class="fas fa-external-link-alt align-top pt-1 text-gray-300" style="font-size: 0.75rem"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="flex mt-2 lg:mt-4">
                                <div class="flex flex-wrap justify-center content-center w-6 h-6 lg:w-8 lg:h-8 rounded shadow tippy" data-tippy-content="PGP Key" style="background-color: #003399">
                                    <i class="fas fa-signature align-middle text-white"></i>
                                </div>
                                <div class="ml-2 self-center">
                                    <a href="https://pgp.surfnet.nl/pks/lookup?op=get&search=0xE556A545A7FA4F6E" class="text-blue-500">
                                        0xA7FA4F6E
                                        <i class="fas fa-external-link-alt align-top pt-1 text-gray-300" style="font-size: 0.75rem"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="flex mt-2 lg:mt-4">
                                <div class="flex flex-wrap justify-center content-center w-6 h-6 lg:w-8 lg:h-8 rounded shadow tippy" data-tippy-content="Public SSH Key" style="background-color: #f3bd1a">
                                    <i class="fas fa-key align-middle text-white"></i>
                                </div>
                                <div class="ml-2 self-center">
                                    <a href="#" class="text-blue-500" id="toggle-ssh-key">
                                        SSH
                                    </a>
                                </div>
                            </div>
                            <div class="flex mt-2" id="ssh-key" style="display: none">
                                <div class="my-2">
                                    <a href="/wavehack.pub" class="text-gray-600">
                                        <i class="fas fa-xs fa-download"></i> Download SSH Key
                                    </a>
                                </div>
                                <div id="ssh-key-content" class="text-xs font-mono break-all">{{ file_get_contents(__DIR__ . '/../source/wavehack.pub') }}</div>
                            </div>


                            <div class="flex mt-2 lg:mt-4">
                                <div class="flex flex-wrap justify-center content-center w-6 h-6 lg:w-8 lg:h-8 rounded shadow tippy" data-tippy-content="Certificate Authority" style="background-color: #4bb543">
                                    <i class="fas fa-lock align-middle text-white"></i>
                                </div>
                                <div class="ml-2 self-center">
                                    <a href="#" class="text-blue-500" id="toggle-ca">
                                        CA
                                    </a>
                                </div>
                            </div>
                            <div class="flex mt-2" id="ca" style="display: none">
                                <div class="my-2">
                                    <a href="/wavehack.crt" class="text-gray-600">
                                        <i class="fas fa-xs fa-download"></i> Download CA
                                    </a>
                                </div>
                                <div id="ca-content" class="text-xs font-mono whitespace-pre">{{ file_get_contents(__DIR__ . '/../source/wavehack.crt') }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="px-2 w-1/2">
                        <h2 class="text-xl md:text-2xl font-bold">Gaming</h2>
                        <p class="text-xs md:text-base text-gray-600">I mostly play on these platforms, in rough order of preference.</p>

                        <div class="text-sm md:text-base lg:text-lg">
                            <div class="flex mt-2 lg:mt-4">
                                <div class="flex flex-wrap justify-center content-center w-6 h-6 lg:w-8 lg:h-8 rounded shadow tippy" data-tippy-content="Playstation Network" style="background-color: #003087">
                                    <i class="fab fa-playstation align-middle text-white"></i>
                                </div>
                                <div class="ml-2 self-center">
                                    WaveHack
                                </div>
                            </div>

                            <div class="flex mt-2 lg:mt-4">
                                <div class="flex flex-wrap justify-center content-center w-6 h-6 lg:w-8 lg:h-8 rounded shadow tippy" data-tippy-content="Steam" style="background-color: #000000">
                                    <i class="fab fa-steam align-middle text-white"></i>
                                </div>
                                <div class="ml-2 self-center">
                                    <a href="https://steamcommunity.com/id/sharqy" class="text-blue-500">
                                        Sharqy
                                        <i class="fas fa-external-link-alt align-top pt-1 text-gray-300" style="font-size: 0.75rem"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="flex mt-2 lg:mt-4">
                                <div class="flex flex-wrap justify-center content-center w-6 h-6 lg:w-8 lg:h-8 rounded shadow tippy" data-tippy-content="Nintendo Switch" style="background-color: #e60012">
                                    <i class="fab fa-nintendo-switch align-middle text-white"></i>
                                </div>
                                <div class="ml-2 self-center text-xs md:text-base">
                                    SW-7262-9578-1601
                                </div>
                            </div>

                            {{--<div class="flex mt-2 lg:mt-4">
                                <div class="flex flex-wrap justify-center content-center w-6 h-6 lg:w-8 lg:h-8 rounded shadow tippy" data-tippy-content="Nintendo 3DS" style="background-color: #e60012">
                                    <div class="inline-block align-middle text-white pt-1 tracking-tighter" style="font-size: 0.75rem;">3DS</div>
                                </div>
                                <div class="ml-2 self-center text-xs md:text-base">
                                    0000-0000-0000
                                </div>
                            </div>--}}

                            <div class="flex mt-2 lg:mt-4">
                                <div class="flex flex-wrap justify-center content-center w-6 h-6 lg:w-8 lg:h-8 rounded shadow tippy" data-tippy-content="Battle.net" style="background-color: #4d8ad0">
                                    <i class="fab fa-battle-net align-middle text-white"></i>
                                </div>
                                <div class="ml-2 self-center">
                                    Sharqy<span class="text-xs md:text-sm lg:text-base text-gray-500">#2639</span>
                                </div>
                            </div>

                            <div class="flex mt-2 lg:mt-4">
                                <div class="flex flex-wrap justify-center content-center w-6 h-6 lg:w-8 lg:h-8 rounded shadow tippy" data-tippy-content="Xbox Live Gamertag" style="background-color: #107c10">
                                    <i class="fab fa-xbox align-middle text-white"></i>
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

        <div class="mt-4 lg:pb-6 mx-2">
            <div class="mx-2">
                <h2 class="text-xl md:text-2xl lg:text-2xl font-bold">Projects</h2>
                <p class="text-xs md:text-base text-gray-600">Sometimes I build cool shit. Feel free to check it out.</p>
            </div>

            <div class="sm:flex mt-2 lg:mt-4">
                <div class="mb-4 mx-2 bg-white rounded overflow-hidden shadow-lg sm:w-1/2 lg:w-1/3 sm:self-start">
                    <a href="https://www.opendominion.net/">
                        <img src="/assets/images/projects/opendominion.png" alt="OpenDominion" class="w-full p-4 bg-gray-200">
                    </a>
                    <div class="p-4">
                        <div class="mb-2 text-base">
                            <a href="https://www.opendominion.net/">
                                <span class="font-bold">OpenDominion</span>
                            </a>
                            <div class="float-right">
                                <small class="mr-1 text-gray-500">2013 - 2020</small>
                                <i class="fab fa-laravel mr-1 tippy" style="color: #f05340" data-tippy-content="Built with Laravel"></i>
                                <i class="fab fa-github tippy" data-tippy-content="Open Source"></i>
                            </div>
                        </div>
                        <p class="text-gray-700 text-sm">
                            A free and online competitive text-based multiplayer strategy game in a medieval fantasy setting.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="body-background" class="fixed left-0 bottom-0 w-full h-full lg:bg-no-repeat lg:bg-contain"></div>

    <div class="hidden lg:block">
        <a href="https://github.com/WaveHack/wavehack.net" class="github-corner" aria-label="View source on GitHub">
            <svg width="80" height="80" viewBox="0 0 250 250" style="fill:#151513; color:#fff; position: absolute; top: 0; border: 0; right: 0;" aria-hidden="true">
                <path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path>
                <path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path>
            </svg>
        </a>
    </div>
@endsection

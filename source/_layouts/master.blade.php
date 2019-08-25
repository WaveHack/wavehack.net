<!DOCTYPE html>
<html lang="en">
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
<body class="bg-gray-100 text-gray-800 font-sans">

<div class="flex mt-4 mx-4">
    <div class="w-1/3">
        <img src="/assets/images/avatar_square.png" alt="WaveHack's Avatar" class="rounded-lg shadow">
    </div>
    <div class="w-2/3 ml-4">
        <h1 class="text-2xl text-red-800 font-bold">
            WaveHack
            <span class="text-sm text-gray-500 font-light float-right" title="Pronouns">any/any</span>
        </h1>
        <p class="text-sm">Software developer, open source enthusiast, Linux lover, Windows user.</p>
    </div>
</div>

<div class="flex mt-4 mx-2">
    <div class="px-2 w-1/2">
        <h2 class="text-xl font-bold">Social</h2>
        <p class="text-xs text-gray-600">Looking for me? I can usually be found on these platforms.</p>

        <div class="text-sm">
            <div class="flex mt-2">
                <div class="w-6 h-6 text-center rounded shadow" style="background-color: #1da1f2">
                    <i class="fab fa-twitter align-middle text-white"></i>
                </div>
                <div class="ml-2 self-center">
                    <a href="https://twitter.com/WaveHack" class="text-blue-500">
                        WaveHack
                    </a>
                </div>
            </div>

            <div class="flex mt-2">
                <div class="w-6 h-6 text-center rounded shadow" style="background-color: #738adb">
                    <i class="fab fa-discord align-middle text-white"></i>
                </div>
                <div class="ml-2 self-center">
                    Sharqy<span class="text-xs font-thin text-gray-500">#1337</span>
                </div>
            </div>

            <div class="flex mt-2">
                <div class="w-6 h-6 text-center rounded shadow" style="background-color: #211f1f">
                    <i class="fab fa-github align-middle text-white"></i>
                </div>
                <div class="ml-2 self-center">
                    <a href="https://github.com/WaveHack" class="text-blue-500">
                        WaveHack
                    </a>
                </div>
            </div>

            <div class="flex mt-2">
                <div class="w-6 h-6 text-center rounded shadow" style="background-color: #000000">
                    <i class="fas fa-signature align-middle text-white"></i>
                </div>
                <div class="ml-2 self-center">
                    <a href="https://pgp.surfnet.nl/pks/lookup?op=get&search=0xE556A545A7FA4F6E" class="text-blue-500">
                        0xA7FA4F6E
                    </a>
                </div>
            </div>

            <div class="flex mt-2">
                <div class="w-6 h-6 text-center rounded shadow" style="background-color: #000000">
                    <i class="fas fa-key align-middle text-white"></i>
                </div>
                <div class="ml-2 self-center">
                    <a href="#" class="text-blue-500" id="toggle-ssh-key">
                        SSH Pubkey
                    </a>
                </div>
            </div>

            <div class="flex mt-2 text-xs font-mono break-all" id="ssh-key" style="display: none">
                ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCl11WmnhPYVZkkXPUbDsPLu/yOTAcmHyY1AMlD3/A6m9v+C4U/Fp4XXfX2KKrh5uu72j/v/SyxG0g7+tOCf7v4LXbLFjs3Flrat20peQ5shaOmrJhwQ66PkvkqqbiOQO7K1YmSHuDlX2VG6FxjF0klADNpxl3m5/+KoORc0/Xz10AxZce35vqyN440w28bItHb7RINX/IVklZw92GceIUkYEjs1dqfTtZFZXBt6CmV6c7qEKAbpxZjAQrrfw3xBMss2lfCFc206jVoSGxQ6b7EFo32Z7TdnnxYlC1mCJDuk1chgnGKoSUsDs4D9l7OmJ6q0okbaeOwiXNL+mqEPtk7 wavehack
            </div>
        </div>
    </div>

    <div class="px-2 w-1/2">
        <h2 class="text-xl font-bold">Gaming</h2>
        <p class="text-xs text-gray-600">For when you want some floor mopping done.</p>

        <div class="text-sm">
            <div class="flex mt-2">
                <div class="w-6 h-6 text-center rounded shadow" style="background-color: #003087">
                    <i class="fab fa-playstation align-middle text-white"></i>
                </div>
                <div class="ml-2 self-center">
                    WaveHack
                </div>
            </div>

            <div class="flex mt-2">
                <div class="w-6 h-6 text-center rounded shadow" style="background-color: #000000">
                    <i class="fab fa-steam align-middle text-white"></i>
                </div>
                <div class="ml-2 self-center">
                    <a href="https://steamcommunity.com/id/sharqy" class="text-blue-500">
                        Sharqy
                    </a>
                </div>
            </div>

            <div class="flex mt-2">
                <div class="w-6 h-6 text-center rounded shadow" style="background-color: #e60012">
                    <i class="fab fa-nintendo-switch align-middle text-white"></i>
                </div>
                <div class="ml-2 self-center text-xs">
                    SW-1234-5678-9010
                </div>
            </div>

            {{--<div class="flex mt-2">
                <div class="w-6 h-6 text-center rounded shadow" style="background-color: #e60012">
                    <i class="fa fa-gamepad align-middle text-white"></i>
                </div>
                <div class="ml-2 self-center text-xs">
                    1234-5678-9010
                </div>
            </div>--}}

            <div class="flex mt-2">
                <div class="w-6 h-6 text-center rounded shadow" style="background-color: #4d8ad0">
                    <i class="fab fa-battle-net align-middle text-white"></i>
                </div>
                <div class="ml-2 self-center">
                    Sharqy<span class="text-xs font-thin text-gray-500">#2639</span>
                </div>
            </div>

            <div class="flex mt-2">
                <div class="w-6 h-6 text-center rounded shadow" style="background-color: #107c10">
                    <i class="fab fa-xbox align-middle text-white"></i>
                </div>
                <div class="ml-2 self-center">
                    WaveHack
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mt-4 mx-4">
    <h2 class="text-xl font-bold">Projects</h2>
    <p class="text-xs text-gray-600">Sometimes I build cool shit. Check it out!</p>

    <div class="mt-2">

        <div class="mb-4 max-w-sm rounded overflow-hidden shadow-lg">
            <a href="#">
                <img src="http://placehold.it/512x256" alt="OpenDominion" class="w-full">
                <div class="p-4">
                    <div class="mb-2 text-base font-bold">OpenDominion</div>
                    <p class="text-gray-700 text-sm">
                        A free and online competitive text-based multiplayer strategy game in a medieval fantasy setting.
                    </p>
                    <div class="text-right">
                        <i class="fab fa-laravel mr-1" style="color: #f05340"></i>
                        <i class="fab fa-github"></i>
                    </div>
                </div>
            </a>

        </div>

        <div class="mb-4 max-w-sm rounded overflow-hidden shadow-lg">
            <a href="#">
                <img src="http://placehold.it/512x256" alt="OpenDominion" class="w-full">
                <div class="p-4">
                    <div class="mb-2 text-base font-bold">Datavania</div>
                    <p class="text-gray-700 text-sm">
                        A Castlevania: Harmony of Despair item and monster database.
                    </p>
                    <div class="text-right">
                        <i class="fab fa-laravel mr-1" style="color: #f05340"></i>
                        <i class="fab fa-github"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

{{--    <p class="mt-2 text-gray-600">I rant about computers, RT dank memes, and build unconventional software. (any/any)</p>--}}

{{--@yield('body')--}}

<script src="{{ mix('js/main.js') }}"></script>
@stack('scripts')

</body>
</html>

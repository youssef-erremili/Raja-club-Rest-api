<x-layout>
    <main class="w-10/12 mx-auto mt-20 flex">
        <aside class="h-screen sticky top-11 pr-12 block">
            <ul>
                <li><a href="#get-started" class="inline-block capitalize text-gray-950 font-normal text-nowrap my-1.5">Get Started</a></li>
                <li><a href="#generate-api-key" class="inline-block capitalize text-gray-950 font-normal text-nowrap my-1.5">Generate api key</a></li>
                <li><a href="#get-club-informations" class="inline-block capitalize text-gray-950 font-normal text-nowrap my-1.5">Get Club Informations</a></li>
                <li><a href="#show-all-players" class="inline-block capitalize text-gray-950 font-normal text-nowrap my-1.5">Get All Players</a></li>
                <li><a href="#show-one-player" class="inline-block capitalize text-gray-950 font-normal text-nowrap my-1.5">Get One Player</a></li>
                <li><a href="#show-all-championships" class="inline-block capitalize text-gray-950 font-normal text-nowrap my-1.5">Get All Championships</a></li>
                <li><a href="#show-one-championship" class="inline-block capitalize text-gray-950 font-normal text-nowrap my-1.5">Get One Championship</a></li>
            </ul>
        </aside>
        <div>
            <div id="get-started">
                <h1 class="capitalize text-[#00bc51] text-xl font-medium">get started</h1>
                <p class="text-gray-700 font-normal inline-block mt-3">Stay informed about Raja Club’s rich history, including their league titles, cup victories, and other significant achievements. Keep up with the club’s success in both domestic and international competitions, and follow their journey towards continued excellence</p>
            </div>
            <div id="generate-api-key" class="mt-16">
                <h1 class="capitalize text-[#00bc51] text-xl font-medium">Generate api key</h1>
                <form action="/docs" method="post">
                    @csrf
                    @method('get')
                    <div class="flex items-center gap-x-3 mt-4">
                        @auth
                            <x-button>Generate</x-button>
                            <div class="w-full flex items-center ml-4">
                                <p class="text-white p-2 px-4 inline-block bg-[#00bc51] rounded-md">{{ $apikey }}</p>
                                <button data="{{ $apikey }}" type="button" id="copyBtn" class="ml-4 cursor-pointer">
                                    <img class="w-5 inline-block" src="{{ asset('images/copy.svg') }}" alt="icon copy">
                                </button>
                                <span id="alert" class="hidden text-[#00bc51] font-medium text-sm capitalize ml-3">api key copied</span>
                            </div>
                        @endauth
                        @guest
                            <div class="w-full">
                                <p class="inline-block p-2 text-gray-800 rounded-md bg-gray-100">Please login with demo account that you will find in <a href="/sign-in" class="text-[#00bc51] font-medium underline">Sign In</a> page to get api key</p>
                            </div>
                        @endguest
                    </div>
                </form>
            </div>
            <div id="get-club-informations" class="mt-16">
                <h1 class="capitalize text-[#00bc51] text-xl font-medium">Get Club Informations</h1>
                <div class="mt-2">
                    <x-club-information></x-club-information>
                </div>
            </div>
            <div id="show-all-players" class="mt-16">
                <h1 class="capitalize text-[#00bc51] text-xl font-medium">Get all players</h1>
                <div class="mt-2">
                    <x-all-players></x-all-players>
                </div>
            </div>
            <div id="show-one-player" class="mt-16">
                <h1 class="capitalize text-[#00bc51] text-xl font-medium">Get one player</h1>
                <div class="mt-2">
                    <x-one-player></x-one-player>
                </div>
            </div>
            <div id="show-all-championships" class="mt-16">
                <h1 class="capitalize text-[#00bc51] text-xl font-medium">Get all championships</h1>
                <div class="mt-2">
                    <x-all-championships></x-all-championships>
                </div>
            </div>
            <div id="show-one-championship" class="mt-16">
                <h1 class="capitalize text-[#00bc51] text-xl font-medium">Get one championship</h1>
                <div class="mt-2">
                    <x-one-championship></x-one-championship>
                </div>
            </div>
        </div>
    </main>
</x-layout>

<x-app-layout>
    <x-slot name="slot">
    <div class="grid h-1/2 place-items-center">
        <div class="text-9xl">404</div>
        <div class="text-8xl">File Not Found</div>

        <div class="text-xl">Hmmm... that page could not be found.<br><br>
        This may have been caused by the following:
            <ul class="list-disc">
                <li>The page has been deleted</li>
                <li>The link used to get to this page has expired</li>
                <li>The URL contains a typo</li>
            </ul>
        </div>
        <br>
        <div class="text-2xl text-center">Let's get you back on track!</div>
        <div class="flex space-x-8">
            <a href="/">
                <br>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Home
                </button>
            </a>

{{--            <a href="{{route('posts.index')}}">--}}
{{--                <br>--}}
{{--                <button class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">--}}
{{--                    Support--}}
{{--                </button>--}}
{{--            </a>--}}
        </div>
    </div>
    </x-slot>
</x-app-layout>

<x-app-layout>
    <x-slot name="slot">
        <div class="grid h-1/2 place-items-center">
            <div class="text-9xl">500</div>
            <div class="text-8xl">Internal Server Error</div>

            <div class="text-xl">Uh-oh. There seems to be an error on our side.<br>
                Sorry about that.<br><br>
                Potential fixes:
                <ul class="list-disc">
                    <li>Reloading the page</li>
                </ul>
            </div>
            <br>
            <div class="text-2xl text-center">If the fixes above do not work, please use the buttons below <br> to go to their respective pages<br></div>
            (Note: due to the server error, the buttons / the pages the buttons link to may not function properly)

            <div class="flex space-x-8">
            <a href="/">
                <br>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Home
                </button>
            </a>

            <a href="{{route('posts.index')}}">
                <br>
                <button class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Support
                </button>
            </a>
            </div>
        </div>
    </x-slot>
</x-app-layout>

<x-app-layout>
    <x-slot name="slot">
        <div class="text-center text-xl">
            <div class="text-9xl">404</div>
            <div>Hmmm... that page could not be found.<br>
            Maybe the page has been deleted, or the link specified is incorrect.
            </div>

            <div>In any case, let's get you back on track!</div>
            <a href="{{route('posts.index')}}">
                <br>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Click here to return to the home page!
            </button>
            </a>
        </div>
    </x-slot>
</x-app-layout>

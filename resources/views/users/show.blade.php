<x-app-layout>
    <x-slot name="slot">
        {{$user->name}}
        @foreach($user->posts() as $post)
            <a href="{{route('posts.show', $post)}}">
                <div class="flex justify-left">
                    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                        <h2 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{$post->title}}</h2>
                        <p class="text-gray-700 text-base mb-4">
                            Posted by <b>{{$post->user_id}}</b> on {{$post->created_at}}
                        </p>
                        <p class="text-gray-500 text-sm mb-4">
                            (Last updated on {{$post->updated_at}})
                        </p>
                        {{--            <button--}}
                        {{--                type="button"--}}
                        {{--                    class=" inline-block px-6 py-2.5--}}
                        {{--                    bg-blue-600 text-white font-medium text-xs leading-tight--}}
                        {{--                    uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg--}}
                        {{--                    focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0--}}
                        {{--                    active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"--}}
                        {{--            >Read</button>--}}
                    </div>
                </div>
            </a>
            <br>
        @endforeach
    </x-slot>
</x-app-layout>

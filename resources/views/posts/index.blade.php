<x-app-layout>
    <x-slot name="slot">
@foreach($posts as $post)
        <a href="{{route('posts.show', $post)}}">
    <div class="flex justify-left">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-m">
            <h2 class="text-gray-900 text-xl leading-tight font-medium mb-2">{{$post->title}}</h2>
            <p class="text-gray-700 text-base mb-4">
                Posted by <b>{{$post->user->name}}</b> on {{$post->created_at}}</p>
            <span class="text-gray-500 text-sm mb-4">
                (Last updated on {{$post->updated_at}})</span>

{{--            @can('delete', $post)--}}
            <form method="POST" action="{{route('posts.show', $post)}}">
                @csrf
                @method('delete')
                <button type="submit">DELETE POST</button>
            </form>
{{--            @endcan--}}
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

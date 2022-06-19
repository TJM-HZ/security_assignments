<x-app-layout>
    <x-slot name="slot">
    <div class="text-4xl"><b>{{$post->title}}</b></div>
    <div>Posted by <b>{{$post->user->name}}</b> on {{$post->created_at}}
        <span class="text-gray-500">(last updated on {{$post->updated_at}})</span></div>
    <div>{{$post->body}}</div>

        <br>

        @can('delete', $post)
{{--            <form method="POST" action="{{route('posts.show', $post)}}">--}}
{{--                @csrf--}}
{{--                @method('delete')--}}
{{--                <button type="submit">DELETE POST</button>--}}
{{--            </form>--}}
            HEY THERE
        @endcan
</x-slot>
</x-app-layout>

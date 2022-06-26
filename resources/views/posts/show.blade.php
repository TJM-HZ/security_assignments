<x-app-layout>
    <x-slot name="slot">
        <div class="w-3/4">
    <div class="text-4xl"><b>{{$post->title}}</b></div>
    <div>Posted by <b>{{$post->user->name}}</b> on {{$post->created_at}}
        <span class="text-gray-500">(last updated on {{$post->updated_at}})</span></div>
    <div>{!! nl2br(e($post->body))!!}</div>

        <br>

{{--        @can('delete', $post)--}}
{{--            <form method="POST" action="{{route('posts.show', $post)}}">--}}
{{--                @csrf--}}
{{--                @method('delete')--}}
{{--                <button type="submit">DELETE POST</button>--}}
{{--            </form>--}}
{{--            HEY THERE--}}
{{--        @endcan--}}

        <div class="flex justify-end space-x-1">
    @can('edit', $post)

        <!--TODO: Apparently wrapping interactive elements like buttons in anchor tags is considered a bad practice.
                                        It works for now, but I should really try to find a more suitable alternative and experiment some more with components
                                        at a later date (maybe not for this assignment)-->
            <a href="{{route('posts.edit', $post)}}">
                <x-input.buttons.pill-button class="bg-blue-500 hover:bg-blue-700 text-white"
                                             type="submit">
                    EDIT
                </x-input.buttons.pill-button>
            </a>
        @endcan
        @can('delete', $post)
            <form method="POST" action="{{route('posts.destroy', $post)}}">
                @csrf
                @method('delete')
                <x-input.buttons.pill-button class="bg-red-500 hover:bg-red-700 text-white"
                                             type="submit">
                    DELETE
                </x-input.buttons.pill-button>
            </form>
        @endcan
        </div>
        </div>
</x-slot>
</x-app-layout>

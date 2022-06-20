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
                        <br>
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
                </div>
            </a>
            <br>
        @endforeach
    </x-slot>
</x-app-layout>

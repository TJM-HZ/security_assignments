<x-app-layout>
    <x-slot name="slot">
        <form method="POST" action="{{route('posts.show', $post)}}">
            @csrf
            @method('PUT')
            <p class="text-3xl">
                Edit post
            </p> <br>

            <div class="field">
{{--                <label class="label">Title</label>--}}
                <div>
                    <input name="title" class="input @error('title') @enderror w-3/4"
                           type="text" placeholder="Title" value="{{$post->title}}">
                </div>
                @error('title')
                <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <br>
            <div>
{{--                <label class="label">Text</label>--}}
                <div>
                <textarea name="body" class="textarea @error('body') @enderror w-3/4"
                          rows="15" placeholder="Body text of your post">{{$post->body}}</textarea>
                </div>
                @error('body')
                <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <br>


            <div class="w-3/4 flex justify-between">


                <div>
                    <form method="POST" action="{{route('posts.destroy', $post)}}">
                        @csrf
                        @method('delete')
                        <x-input.buttons.pill-button class="bg-red-500 hover:bg-red-700 text-white"
                                                     type="submit">
                            Delete Post
                        </x-input.buttons.pill-button>
                    </form>

                    <!-- FIXME: Cancel button is disabled until I can get it to play nice with form validation while maintaining the styling-->
                    {{--                    <x-input.buttons.pill-button class="bg-red-500 hover:bg-red-700 text-white"--}}
                    {{--                                                 type="reset" formnovalidate>--}}
                    {{--                        Cancel--}}
                    {{--                    </x-input.buttons.pill-button>--}}
                    <x-input.buttons.pill-button class="bg-orange-500 hover:bg-orange-700 text-white"
                                                 type="reset" formnovalidate>
                        Reset
                    </x-input.buttons.pill-button>
                </div>

                <x-input.buttons.pill-button class="bg-blue-500 hover:bg-blue-700 text-white"
                                             type="submit">
                    Update Post
                </x-input.buttons.pill-button>
            </div>
    </x-slot>
</x-app-layout>

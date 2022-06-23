<x-app-layout>
    <x-slot name="slot">
        <form method="POST" action="{{route('posts.index')}}" class="w-3/4">
            @csrf
            <p class="text-3xl">
                Create a new post
            </p> <br>

            <div class="field">
                <div class="control">
                    <input name="title" id="title" minlength="1" maxlength="200" class="input @error('title') @enderror w-full"
                           type="text" placeholder="Title">
                </div>
                @error('title')
                <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <!--TODO: Have the max char count be the character limit as defined in StorePostRequest.php-->
            <div id="titleCounter" class="text-right"></div>
            <br>
            <div>
                <div class="control">
                <textarea name="body" minlength="1" class="textarea @error('body') @enderror w-full"
                          rows="15" placeholder="Body text of your post"></textarea>
                </div>
                @error('body')
                <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <br>

            <div class="w-full flex justify-between">


                <div>
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
                    Create Post
                </x-input.buttons.pill-button>
            </div>
        </form>
    </x-slot>
</x-app-layout>
<script>
    wordCounter("title", "titleCounter", 200);


</script>

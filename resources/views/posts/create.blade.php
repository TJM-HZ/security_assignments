<x-app-layout>
    <x-slot name="slot">
        <form method="POST" action="{{route('posts.index')}}" class="w-3/4">
            @csrf
            <p class="text-3xl">
                Create a new post
            </p> <br>

            <div>
                <div class="control">
                    <textarea name="title" id="title" minlength="1" class="textarea @error('title') @enderror w-full"
{{--                           type="text" --}}
                           rows="2" placeholder="Title">{{old('title')}}</textarea>
                </div>
                <!--TODO: Have the max char count be the character limit as defined in StorePostRequest.php-->
                <div class="flex justify-between">
                    <div>
                        @error('title')
                        <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div id="titleCounter" class="text-right"></div>
                </div>
            </div>
            <br>
            <div>

                <div class="control">
                <textarea name="body" id="body" minlength="1" class="textarea @error('body') @enderror w-full"
                          rows="15" placeholder="Body text of your post">{{old('body')}}</textarea>
                </div>
                <div class="flex justify-between">
                    <div>
                @error('body')
                <p class="text-red-600">{{ $message }}</p>
                @enderror
                    </div>
                <div id="bodyCounter" class="text-right"></div>
                </div>
            </div>
            <div class="w-full flex justify-between my-1">
                <div>
                    <!-- FIXME: Cancel button is disabled until I can get it to play nice with form validation while maintaining the styling-->

                    <x-input.buttons.pill-button class="bg-red-500 hover:bg-red-700 text-white" id="cancel" type="button" formnovalidate>
                        Cancel
                    </x-input.buttons.pill-button>

                    <x-input.buttons.pill-button class="bg-orange-500 hover:bg-orange-700 text-white"
                                                 type="reset" id="reset" formnovalidate>
                        Reset
                    </x-input.buttons.pill-button>
                </div>

                <x-input.buttons.pill-button class="bg-blue-500 hover:bg-blue-700 text-white"
                                             name="submit" id="submit" type="submit">
                    Create Post
                </x-input.buttons.pill-button>
            </div>
        </form>
    </x-slot>
</x-app-layout>
<script src="{{asset('js/wordCounter.js')}}"></script>
<script>
    wordCounter("title", "titleCounter", 200);
    wordCounter("body", "bodyCounter", 1000);
</script>
<script>
    reset = document.getElementById("reset");
    submit = document.getElementById("submit")
    title = document.getElementById("title");
    body = document.getElementById("body");

    reset.onclick = function() {
        title.innerHTML = '';
        body.innerHTML = '';
        wordCounter("title", "titleCounter", 200);
        wordCounter("body", "bodyCounter", 1000);
    }

    cancel = document.getElementById("cancel");
    cancel.onclick = function() {
        window.location = "/";
    }
</script>


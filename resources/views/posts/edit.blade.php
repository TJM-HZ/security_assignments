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

            <div class="">
                {{-- Here are the form buttons: save, reset and cancel --}}
                <div class="control">
                    <button type="submit">Update Post</button>
                </div>
                <div class="control">
                    <button type="reset">Reset</button>
                </div>
                <div class="control">
                    <a type="button" href="/posts">Cancel</a>
                </div>
            </div>
        </form>

        <form method="POST" action="{{ route('posts.destroy', $post) }}">
            @csrf
            @method('DELETE')
                <button type="submit">DELETE POST</button>
        </form>
    </x-slot>
</x-app-layout>

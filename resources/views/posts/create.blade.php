<x-app-layout>
    <x-slot name="slot">
        <form method="POST" action="{{route('posts.index')}}">
            @csrf
            <p>
                Create a new post
            </p>

            <div class="field">
                <label class="label">Title</label>
                <div class="control">
                    <input name="title" class="input @error('title') is-danger @enderror"
                           type="text" placeholder="Your title here...">
                </div>
                @error('title')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label">Body</label>
                <div class="control">
                <textarea name="body" class="textarea @error('body') is-danger @enderror"
                          rows="15" placeholder="Body of your post"></textarea>
                </div>
                @error('body')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field is-grouped">
                {{-- Here are the form buttons: save, reset and cancel --}}
                <div class="control">
                    <button type="submit" class="button is-primary">Save</button>
                </div>
                <div class="control">
                    <button type="reset" class="button is-warning">Reset</button>
                </div>
                <div class="control">
                    <a type="button" href="/posts" class="button is-light">Cancel</a>
                </div>
            </div>
        </form>
    </x-slot>
</x-app-layout>

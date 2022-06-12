<x-app-layout>
    <x-slot name="slot">
    <div class="text-4xl"><b>{{$post->title}}</b></div>
    <div>Posted by <b>{{$post->user_id}}</b>
    on {{$post->created_at}}
        <span class="text-gray-500">(last updated on {{$post->updated_at}})</span></div>
    <div>{{$post->text}}</div>

        <br>
</x-slot>
</x-app-layout>

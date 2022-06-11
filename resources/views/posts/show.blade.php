<x-app-layout>
    <x-slot name="slot">
    <h1><b>{{$post->title}}</b></h1>
        {{$post->text}}
        <br>
        <a href="{{route('posts.index')}}">&#8592; Back to Blog</a>
</x-slot>
</x-app-layout>

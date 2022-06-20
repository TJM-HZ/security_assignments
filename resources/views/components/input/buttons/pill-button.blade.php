<button {{$attributes->merge(['class' => 'py-2 px-4 rounded-full font-bold'], ['type'=>''])}}>
    {{ $slot }}
</button>

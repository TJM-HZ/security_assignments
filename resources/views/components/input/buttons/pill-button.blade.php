<button {{$attributes->merge(['class' => 'py-2 px-4 rounded-full font-bold'], ['id'=>''], ['type'=>''], ['name'=>''], ['onclick'=>''])}}>
    {{ $slot }}
</button>

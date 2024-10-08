<x-layout>
    <x-slot name="heading">Class</x-slot>

    @php
    $currentPath = request()->path();
    $parts = explode('/', $currentPath);
    $urlClass = Arr::get($parts, 1);
    $urlSection = Arr::get($parts, 2);
    @endphp

    @foreach ($classes as $class)
        @if ($class->Class === $urlClass && $class->Section === $urlSection)
            <p>{{$class->Class}}</p>
        @endif 
    @endforeach
</x-layout>
@php
  $classes = ['One', 'Two', 'Three', 'Four', 'Five' , 'Six' , 'Seven', 'Eight', 'Nine', 'Ten'];   
  $sections = ['A','B'];
  $total = 0;
@endphp

<x-layout>
    <x-slot name="heading">Class</x-slot>
    <div class="hidden md:block">
    @foreach ($classes as $class)
    <div class="border-2 border-gray-400 rounded-lg pb-2 px-4 mb-8 shadow-lg shadow-cyan-500/50">
      <h1 class="text-center text-2xl mt-4">{{$class}}</h1>
      <div class="flex flex-row justify-between flex-wrap w-full">
        @for ($i = 0; $i <2; $i++)
        <a href="/classes/{{ $class}}/{{ $sections[$i] }}">
          <div class="shadow-lg shadow-cyan-500/50 border-2 w-96 px-5 py-8 rounded-lg px-4 antialiased text-center text-lg border-gray-400">
            {{ $class }} - {{ $sections[$i] }}     
            <p>
            @php
            $total = 0;   
            $classFound = $classesData->firstWhere(function ($clas) use ($class, $sections, $i){
                    return $clas->Class === $class && $clas->Section === $sections[$i];
            })
            @endphp
            Total Students:{{ $classFound ? $classFound->total : 0 }}
          </p>
        </div>    
      </a>
        @endfor
    </div>
  </div>
    @endforeach
    </div>

    <div class="md:hidden" id="mobile-menu">
      @foreach ($classes as $class)
      <div class="border-2 border-gray-400 rounded-lg pb-2 px-4 mb-8 shadow-lg shadow-cyan-500/50">
        <h1 class="text-center text-2xl mt-4">{{$class}}</h1>
        <div class="flex flex-row justify-between flex-wrap w-full">
          @for ($i = 0; $i <2; $i++)
          <a href="/classes/{{ $class}}/{{ $sections[$i] }}">
            <div class="shadow-lg shadow-cyan-500/50 border-2 w-32 px-5 py-2 rounded-lg px-4 antialiased text-center text-sm border-gray-400">
              {{ $class }} - {{ $sections[$i] }}     
              <p>
              @php
              $total = 0;   
              $classFound = $classesData->firstWhere(function ($clas) use ($class, $sections, $i){
                      return $clas->Class === $class && $clas->Section === $sections[$i];
              })
              @endphp
              Total Students:
              <p>
                {{ $classFound ? $classFound->total : 0 }}
              </p>
            </p>
          </div>    
        </a>
          @endfor
      </div>
    </div>
      @endforeach
    </div>
</x-layout>
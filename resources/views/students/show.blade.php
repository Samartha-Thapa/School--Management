@php
  $class = ['One','Two','Three','Four','Five','Six','Seven','Eight','Nine','Ten'];   
  $sections = ['A', 'B'];
  $total = 0;
@endphp
<x-layout>
        <x-students-nav />
        <table class="border-2 w-full mt-4">
                <tr>
                        <th class="border-x-2 p-2 border-gray-300">S.N</th>
                        <th class="border-x-2 p-2 border-gray-300">Class</th>
                        <th class="border-x-2 p-2 border-gray-300">Section</th>
                        <th class="border-x-2 p-2 border-gray-300">Total No</th>
                </tr>
          @foreach ($class as $index => $class) 
                {{-- @foreach ($students as $student) --}}
                @for ($i=0; $i<2; $i++)     
                {{-- $active ? "bg-gray-900 text-white": "text-gray-300 hover:bg-gray-700 hover:text-white" --}}
                <tr class="text-center {{ $i % 2 == 0 ? "bg-gray-200": "bg-white"}}">
                        <td class="border-x-2 border-2 border-gray-300 p-2">{{ ($index + 1) * 2 - (1 - $i) }}</td>
                        <td class="border-x-2 border-2 border-gray-300 p-2">{{ $class }}</td>
                        <td class="border-x-2 border-2 border-gray-300 p-2">
                                {{$sections[$i]}}
                        </td>
                        <td class="border-x-2 border-2 border-gray-300 p-2">
                                @php
                                        $total = 0;   
                                        $classFound = $classes->firstWhere(function ($clas) use ($class, $sections, $i){
                                                return $clas->Class === $class & $clas->Section === $sections[$i];
                                        })
                                        @endphp
                                        {{ $classFound ? $classFound->total : 0 }}
                        </td>
                </tr>
                @endfor
          @endforeach
        </table>
</x-layout>
<x-layout>
    <x-slot name="heading">Class</x-slot>

    @php
    $currentPath = request()->path();
    $parts = explode('/', $currentPath);
    $urlClass = Arr::get($parts, 1);
    $urlSection = Arr::get($parts, 2);
    $subjects = ['None', 'Maths', 'Computer', 'Science', 'Social', 'English', 'Nepali'];
    @endphp
    <div class="border-b-2 border-black dark:border-white pb-3">
        <h1 class="text-center font-bold text-3xl text-white">{{$urlClass}}: {{$urlSection}}</h1>
    </div>
<form action="/classes/{{$urlClass}}/{{$urlSection}}" method="POST">
    @csrf
    <table class="w-full">
        <h1 class="text-center text-xl mt-3 mb-3">Time Table</h1>
        <thead>
            <tr class="bg-red-400 bg-opacity-30">
                <th class="p-2 w-auto border-2 border-blue-700">Period-></th>
                <th class="p-2 w-auto border-2 border-blue-700">1st</th>
                <th class="p-2 w-auto border-2 border-blue-700">2nd</th>
                <th class="p-2 w-auto border-2 border-blue-700">3rd</th>
                <th class="p-2 w-auto border-2 border-blue-700">4th</th>
                <th class="p-2 w-auto border-2 border-blue-700">5th</th>
                <th class="p-2 w-auto border-2 border-blue-700">6th</th>
                <th class="p-2 w-auto border-2 border-blue-700">7th</th>
            </tr>
        </thead>
        <livewire:ClassSubject :class="$urlClass" :section="$urlSection" />

      
    </table>

    <button type="submit" class="mt-4 bg-white italic text-black w-24 h-8 text-lg border-2 rounded-md">Save</button>
</form>
</x-layout>
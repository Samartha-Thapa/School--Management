<x-layout>
    <x-slot:heading>Teachers</x-slot:heading>

    <x-teachers-nav />

    <div class="hidden md:block">
    <table class="border-2 w-full mt-4">
        <tr>
            <th class="border-2 h-10 border-gray-300">S.N</th>
            <th class="border-2 h-10 border-gray-300">Name</th>
            <th class="border-2 h-10 border-gray-300">Subject</th>
            <th class="border-2 h-10 border-gray-300">Address</th>
            <th class="border-2 h-10 border-gray-300">Phone</th>
        </tr>
        @foreach ($teachers as $teacher)   
        <tr class="text-center {{ $teacher->id%2 == 0 ? "bg-gray-100": "bg-white" }}">
            <td class="border-2 h-10 border-gray-300">{{$teacher->id}}</td>
            <td class="border-2 h-10 border-gray-300">{{$teacher->thName}}</td>
            <td class="border-2 h-10 border-gray-300">{{$teacher->thSubject}}</td>
            <td class="border-2 h-10 border-gray-300 text-sm subpixel-antialiased">{{$teacher->thAddress}}</td>
            <td class="border-2 h-10 border-gray-300">{{$teacher->thPhone}}</td>
        </tr>
        @endforeach
    </table>
    </div>

    <div class="md:hidden" id="mobile-menu">
        <table class="border-2 w-full mt-4 ">
            <tr class="text-md">
                <th class="border-2 h-10 border-gray-300">S.N</th>
                <th class="border-2 h-10 border-gray-300">Name</th>
                <th class="border-2 h-10 border-gray-300">Subject</th>
                <th class="border-2 h-10 border-gray-300">Address</th>
                <th class="border-2 h-10 border-gray-300">Phone</th>
            </tr>
            @foreach ($teachers as $teacher)   
            <tr class="text-center text-sm {{ $teacher->id%2 == 0 ? "bg-gray-100": "bg-white" }}">
                <td class="border-2 h-10 border-gray-300">{{$teacher->id}}</td>
                <td class="border-2 h-10 border-gray-300">{{$teacher->thName}}</td>
                <td class="border-2 h-10 border-gray-300">{{$teacher->thSubject}}</td>
                <td class="border-2 h-10 border-gray-300 text-sm subpixel-antialiased">{{$teacher->thAddress}}</td>
                <td class="border-2 h-10 border-gray-300">{{$teacher->thPhone}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</x-layout>
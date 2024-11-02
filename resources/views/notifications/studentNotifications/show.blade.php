<x-layout>
    <x-slot:heading>Student Notification</x-slot:heading>
    
    <div>
    
    <div class="p-8 font-sans border-2 h-96 border-gray-500 bg-gray-300 dark:bg-gray-900 mt-4 h-auto">
    <h1 class="text-center font-bold text-lg mb-4 pb-2 border-b-2 border-blue-600">{{$studentNotification->title}}</h1>
    {{$studentNotification->content}}
    </div>
</div>
</x-layout>
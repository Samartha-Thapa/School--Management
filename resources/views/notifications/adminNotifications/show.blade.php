<x-layout>
    <x-slot:heading>Admin Notification</x-slot:heading>
    
    <div>
        <h1 class="text-xl font-bold text-center underline underline text-blue-600">{{$adminNotification->sender}}</h1>
    
    <div class="p-8 font-sans border-2 h-96 border-gray-500 bg-gray-300 dark:bg-gray-900 mt-4 h-auto">
    <h1 class="text-center font-bold text-lg mb-4 pb-2 border-b-2 border-blue-600">{{$adminNotification->title}}</h1>
    {{$adminNotification->content}}
    </div>
</div>
</x-layout>
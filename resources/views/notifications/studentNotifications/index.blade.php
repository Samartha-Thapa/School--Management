<x-layout>
    <x-slot:heading>Student Notifications</x-slot:heading>
    <div class="hidden md:block">

    <div>
        <a href="/students/notifications/create">
            <div class="rounded bg-gray-900 border-2 text-white w-64 text-center h-12 p-2">
                Create Notification
            </div>
        </a>
        {{ $studentNotifications->links() }}
        @foreach ($studentNotifications as $notification)
        <a href="/students/notifications/{{ $notification['id'] }}">
            <div class="mt-4 mb-2 border-2 p-4 rounded border-blue-400">
                <h1 class="font-bold text-center mb-4 text-xl">
                   ({{$notification->title}})
                </h1>
        
                <p class="font-sans mt-2">{{$notification->content}}</p>    
            </div>   
        </a>
        @endforeach
        
        {{ $studentNotifications->links() }}
    </div>
    </div>

    <div class="md:hidden" id="mobile-menu">
        
    <div>
        <a href="/students/notifications/create">
            <div class="rounded bg-gray-900 border-2 text-white w-64 text-center h-12 p-2">
                Create Notification
            </div>
        </a>
        {{ $studentNotifications->links() }}
        @foreach ($studentNotifications as $notification)
        <a href="/students/notifications/{{ $notification['id'] }}">
            <div class="mt-4 mb-2 border-2 p-4 rounded border-blue-400">
                <h1 class="font-bold text-center mb-4 text-xl">
                   ({{$notification->title}})
                </h1>
        
                <p class="font-sans mt-2">{{$notification->content}}</p>    
            </div>   
        </a>
        @endforeach
        
        {{ $studentNotifications->links() }}
    </div>
    </div>
</x-layout>

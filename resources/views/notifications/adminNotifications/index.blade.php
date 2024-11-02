<x-layout>
    <x-slot:heading>Admin Notifications</x-slot:heading>
    <div class="hidden md:block">

    <div>
        <a href="/admin/notifications/create">
            <div class="rounded bg-gray-900 text-white border-2 w-64 text-center h-12 p-2">
                Create Notification
            </div>
        </a>

        {{ $adminNotifications->links() }}
        @foreach ($adminNotifications as $notification)
        <a href="/admin/notifications/{{ $notification['id'] }}">
            <div class="mt-4 mb-2 border-2 p-4 rounded border-blue-400">
                <h1 class="font-bold text-center mb-4 text-xl">
                    {{$notification->sender}} <span class="text-base font-sans">({{$notification->title}})</span>
                </h1>
        
                <p class="font-sans mt-2">{{$notification->content}}</p>    
            </div>   
        </a>
        @endforeach
        
        {{ $adminNotifications->links() }}
    </div>
    </div>

    <div class="md:hidden" id="mobile-menu">
        
    <div>

        <a href="/admin/notifications/create">
            <div class="rounded bg-gray-900 text-white border-2 w-64 text-center h-12 p-2">
                Create Notification
            </div>
        </a>
        {{ $adminNotifications->links() }}
        @foreach ($adminNotifications as $notification)
        <a href="/admin/notifications/{{ $notification['id'] }}">
            <div class="mt-4 mb-2 border-2 p-4 rounded border-blue-400">
                <h1 class="font-bold text-center mb-4 text-xl">
                    {{$notification->sender}} <span class="text-base font-sans">({{$notification->title}})</span>
                </h1>
        
                <p class="font-sans mt-2">{{$notification->content}}</p>    
            </div>   
        </a>
        @endforeach
        
        {{ $adminNotifications->links() }}
    </div>
    </div>
</x-layout>

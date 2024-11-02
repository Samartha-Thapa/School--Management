
  <div class="flex flex-col">
    <div>
      <button
    type="button"
    class="relative rounded-full bg-gray-800 dark:bg-sky-800 p-1 text-gray-400 hover:text-white dark:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
            wire:click="toogleShow()"
            >
            <span class="absolute -inset-1.5"></span>
        <span class="sr-only">View notifications</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
        </svg>
      </button>
    </div>
    
    @if($show)
    <!-- Desktop View -->
    <div class="hidden md:block">
      <div 
          class="overflow-y-scroll h-screen absolute top-10 right-0 bg-gray-900 mt-6 border-2 border-gray-400 mr-4 w-96 p-2 rounded z-50"
          x-data @click.away="$wire.handleOutsideClick()"
        >
        @auth('admin')
        <a href="/admin/notifications" class="font-bold hover:text-blue-700 text-blue-500 ml-8">Open Notification Page</a>
        @endauth
  
        @auth('student')
        <a href="/students/notifications" class="font-bold hover:text-blue-700 text-blue-500 ml-8">Open Notification Page</a>
        @endauth

        @foreach ($data as $index => $item)
      <a href="/">
        <div class="p-1 border-2 m-2 border-gray-400 rounded bg-gray-600">
          <h1 class="font-bold text-center mb-2">{{$index + 1}}. Sender: {{$item->sender}}</h1>
          <p class="font-bold text-center border-b-2 border-gray-400 mb-2">{{$item->title}}</p>   
          <p class="text-sm">{{$item->content}}</p>
        </div>
      </a>
      @endforeach
    </div>
  </div>

  <!-- Mobile View -->
  <div class="block md:hidden">  
    <div
        class="overflow-y-scroll h-screen absolute top-10 right-0 bg-gray-900 mt-6 border-2 border-gray-400 mr-4 w-2/3 p-2 rounded z-50"
        x-data @click.away="$wire.handleOutsideClick()"
        >
      @auth('admin')
      <a href="/admin/notifications" class="font-bold hover:text-blue-700 text-blue-500 ml-8">Open Notification Page</a>
      @endauth

      @auth('student')
      <a href="/students/notifications" class="font-bold hover:text-blue-700 text-blue-500 ml-8">Open Notification Page</a>
      @endauth

      @foreach ($data as $index => $item)
    <a href="/">
      <div class="p-1 border-2 m-2 border-gray-400 rounded bg-gray-600">
        <h1 class="font-bold text-center mb-2">{{$index + 1}}. {{$item->title}}</h1>   
        <p class="text-sm">{{$item->content}}</p>
      </div>
    </a>
    @endforeach
  </div>
  </div>  

      @endif
      
</div>


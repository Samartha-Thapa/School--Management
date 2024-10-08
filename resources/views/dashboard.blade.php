<x-layout>
    <x-slot:heading>
        @auth('admin')
            Admin DashBoard (Hello {{ $adminUser->adminUserName }})
        @endauth
        @auth('student')
            Student DashBoard (Hello {{ $studentUser->studentUserName }})
        @endauth
    </x-slot:heading>
    
    <div class="hidden md:block">
    <div class="flex flex-row flex-wrap">
        <a href="/students" class="ml-4">
            <div class="p-4 h-56 border-2 border-black mt-2 w-96 rounded-lg text-center">
                <h1 class="text-3xl font-bold">Students</h1>
                <x-ri-graduation-cap-fill class="h-40 w-32 ml-24" />
            </div>
        </a>
        <a href="/teachers" class="ml-4">
            <div class="p-4 h-56 border-2 border-black mt-2 w-96 rounded-lg text-center">
                <h1 class="text-3xl font-bold">Teachers</h1>
                <x-fas-user-pen class="h-40 w-32 ml-32" />
            </div>
        </a>
        <a href="/classes" class="ml-4">
            <div class="p-4 h-56 border-2 border-black mt-2 w-96 rounded-lg text-center">
                <h1 class="text-3xl font-bold">Classes</h1>
                <x-healthicons-f-i-training-class class="h-40 w-36 ml-28" />
            </div>
        </a>
    </div>
    </div>

    <div class="md:hidden" id="mobile-menu">    
        <div class="flex flex-col flex-wrap">
            <a href="/students" class="mt-2 ml-2">
                <div class="p-4 h-56 border-2 border-black mt-2 w-80 rounded-lg text-center">
                    <h1 class="text-3xl font-bold">Students</h1>
                    <x-ri-graduation-cap-fill class="h-40 w-32 ml-24" />
                </div>
            </a>
            <a href="/teachers" class="mt-4 ml-2">
                <div class="p-4 h-56 border-2 border-black mt-2 w-80 rounded-lg text-center">
                    <h1 class="text-3xl font-bold">Teachers</h1>
                    <x-fas-user-pen class="h-40 w-32 ml-32" />
                </div>
            </a>
            <a href="/classes" class="mt-4 ml-2">
                <div class="p-4 h-56 border-2 border-black mt-2 w-80 rounded-lg text-center">
                    <h1 class="text-3xl font-bold">Classes</h1>
                    <x-healthicons-f-i-training-class class="h-40 w-36 ml-28" />
                </div>
            </a>
        </div>
    </div>
</x-layout>
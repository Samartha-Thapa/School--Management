@props(['active' => false])

<a 
  class=" {{ $active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white" }} block rounded-md px-3 py-2 text-base font-medium dark:text-white dark:hover:bg-sky-700" aria-current="page"
  aria-current="{{ $active ? 'page': 'false' }}"  
  {{ $attributes }}
  >{{ $slot }} </a>

<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Login</title>
    @vite('resources/css/app.css')
@vite('resources/js/app.js') 
</head>
<body>

  <div class="hidden md:block">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
      </div>
      <p class="mt-10 text-center text-sm text-gray-500">
        Not a member?
          <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign Up</a>
      </p>

<div class="flex flex-row flex-wrap gap-8 p-4">
    <!-- For Admin Login -->
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 ml-8 mr-28 w-80">
        <h1 class="text-center text-xl font-bold underline">Admin Login</h1>
    
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="{{ route('admin.login') }}" method="POST">
        @csrf
        <div>
          <label for="admin-email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-2">
            <input id="admin-email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <x-form-error name="email"/>
        </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="admin-password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          </div>
          <div class="mt-2">
            <input id="admin-password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <x-form-error name="password"/>
        </div>
        </div>
  
            <label for="admin-remember">
                <input type="checkbox" name="remember" id="admin-remember"> Remember Me
            </label>


        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Admin Login</button>
        </div>
      </form>
    </div>
  </div>


      <!-- For Student Login -->
<div class="flex min-h-full flex-col justify-center px-6 lg:px-8 w-80 ml-8">
    <h1 class="text-center text-xl font-bold underline">Student Login</h1>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('student.login') }}" method="POST">
        @csrf
        <div>
          <label for="student-email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
          <div class="mt-2">
            <input id="student-email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <x-form-error name="email"/>
        </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="student-password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          </div>
          <div class="mt-2">
            <input id="student-password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <x-form-error name="password"/>
        </div>
        </div>
        
            <label for="student-remember">
                <input type="checkbox" name="remember" id="student-remember"> Remember Me
            </label>


        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Student Login</button>
        </div>
    </form>
</div>
  </div>
</div>
  </div>






  <div class="md:hidden" id="mobile-menu">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
    </div>
    
    <p class="mt-10 text-center text-lg text-gray-500">
      Not a member? 
      <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign Up</a>
    </p>
  
    <div class="flex flex-col gap-8 p-4">
      <!-- For Admin Login -->
      <div class="flex flex-col justify-center px-6 py-12 w-full">
        <h1 class="text-center text-xl font-bold underline">Admin Login</h1>
  
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="{{ route('admin.login') }}" method="POST">
            @csrf
            <div>
              <label for="admin-email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
              <div class="mt-2">
                <input id="admin-email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <x-form-error name="email"/>
              </div>
            </div>
  
            <div>
              <div class="flex items-center justify-between">
                <label for="admin-password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
              </div>
              <div class="mt-2">
                <input id="admin-password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <x-form-error name="password"/>
              </div>
            </div>
  
            <label for="admin-remember">
                <input type="checkbox" name="remember" id="admin-remember"> Remember Me
            </label>


            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Admin Login</button>
            </div>
          </form>
        </div>
      </div>
  
      <!-- For Student Login -->
      <div class="flex flex-col justify-center px-6 py-12 w-full">
        <h1 class="text-center text-xl font-bold underline">Student Login</h1>
  
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="{{ route('student.login') }}" method="POST">
            @csrf
            <div>
              <label for="student-email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
              <div class="mt-2">
                <input id="student-email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <x-form-error name="email"/>
              </div>
            </div>
  
            <div>
              <div class="flex items-center justify-between">
                <label for="student-password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
              </div>
              <div class="mt-2">
                <input id="student-password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <x-form-error name="password"/>
              </div>
            </div>
  
            <label for="student-remember">
                <input type="checkbox" name="remember" id="student-remember"> Remember Me
            </label>


            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Student Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>
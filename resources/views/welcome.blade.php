<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title >Todo list</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  
  @vite('resources/css/output.css')
  <!-- <link rel="stylesheet" href="{{asset('public/css/styles.css')}}">-->
  <!-- Styles -->

</head>
    <body>
  @auth
 
    

      @else
      
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <a href="{{ route('register') }}" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Sign up</a>
        <a href="{{ route('login.create') }}" class=" font-medium text-blue-600 hover:underline dark:text-blue-500">Login</a>
      </div>
    </div>
    @endauth
    </section>
    </body>
</html>

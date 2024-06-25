<!doctype html>
<html lang="en">
  <head>
    <title>Fastville Schools</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../../css/app.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    {{-- @vite('resources/css/app.css') --}}
  </head>
  <body class="w-full">
      
      <div >

        <div class="bg-blue-100 px-4 sm:px-8 md:px-16 lg:px-32">
          <nav class="w-full flex justify-between  px-2 py-2">
            <ul class="w-2/5 flex justify-between items-center">
                <li>
                    <a href="/" class="font-bold text-blue-600 text-xl hover:text-blue-400">

                      @include('include.schoolname')
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('school') }}" class="text-xl text-blue-600 hover:text-white">Home</a>
                </li>
                <li class="">
                    <a href="" class="text-xl text-blue-600 hover:text-white">Dashboard</a>
                </li>
            </ul>

            <ul class="w-fit flex justify-between items-center">
                <li class="">
                    <a href="" class="text-xl text-blue-600 hover:text-white">Register</a>
                </li>
                <li class="">
                    <a href="" class="text-xl text-blue-600 hover:text-white">Login</a>
                </li>
            </ul>
          </nav>
        </div>

         <div class="px-4 sm:px-8 md:px-16 lg:px-32 ">
             @yield('content')
         </div>
      </div>
    <!-- Optional JavaScript -->
    {{-- External JavaScript --}}
    <script src="{{ url('js/main.js') }}"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/payment.js') }}"></script>
    </body>
    </html>
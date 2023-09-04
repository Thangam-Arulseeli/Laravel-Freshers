 <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> @yield('title','Laravel Training - Freshers 2023')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
           <!--EXTERNAL CSS-->
           {{-- {{ Vite::asset('resources/images/logo.png') }} --}}
    {{-- <link rel="stylesheet" href="../css/style.css"> --}}
   {{-- <link rel="stylesheet" href="{{URL::asset('/resources/css/style.css') }}" /> --}}
   {{-- <link rel="stylesheet" href="{{Vite::asset('/resources/css/style.css') }}" />  --}}
   <!-- EXTERNAL JS FILE / JQUERY files -->
  <!-- <script type="type/javascript" src=" --}} {{-- {{ URL::asset('/resources/css/style.css')}}" />  --}} -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
 <body>
    @include('nav')
    {{-- <div class="alert alert-success" role="alert">
      <strong> Message received... Will get back soon.... </strong>
  </div> --}}
    @if (session()->has('action-feedback'))
    <div class="alert alert-success" role="alert">
      <strong> Success Message : </strong> {{session()->get('action-feedback')}} 
    </div>
    @endif 
    @yield('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </body>
    </html>
    
    
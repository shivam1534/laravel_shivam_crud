<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="flex item-center" style="background: radial-gradient(circle, rgba(63,107,149,1) 0%, rgba(0,0,0,1) 100%, rgba(28,66,236,0.6629026610644257) 100%);">
<div style="width: 75%; height:100vh;" class="m-auto  p-5 bg-opacity-5 bg-white" >    
{{--
    <!-- @yield('content') -->
    <!-- $if(sizeof($users))
    @foreach($users as $user)
        <div>
            <li  style='list-style:none'>Name: {{$user['name']}}<br>
            Address: {{$user['address']}}</li>
        </div>
        <br>
    
    @endforeach
    @endif -->
    --}}
    <div class="rounded m-3 text-center text-red-100	">
        <h1 class="text-8xl ">CRUD</h1>
        <h1 class="text-6xl	">Application
    </div>
    @yield('addingUser')
    @yield('content')
    @yield('edit')
    </div>
</body>
</html>
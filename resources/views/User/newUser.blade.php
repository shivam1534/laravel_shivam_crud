@extends('user')

@section('title', 'New User')
@section('content')
<div class="w-100 flex flex-col
mx-auto	 justify-center item-center">

<!-- <h1 class="text-center text-6xl	">All Users</h1> -->
<div class="text-center mt-5">
<a class="ring-2 bg-red-200 rounded p-2 px-3 " href='/adduser'>Add new User</a>
</div>

<div class="flex justify-center mt-10 flex-wrap	">
    
@foreach( $users as $user)
   <div class="flex justify-center m-3 flex-col text-white border w-48 
   ">
   <li class="border text-center bg-blue-300 text-black"  style="list-style:none;">{{$user['id']}}</li>
   <li class="text-5xl m-2 text-center "  style="list-style:none;">{{$user['name']}}</li>
   <div class="flex justify-between mx-3">

   <li class=""  style="list-style:none;">{{$user['age']}}</li>
    <li class="" style="list-style:none;">{{$user['address']}}</li>
   </div>
    <li class=" flex justify-between bg-blue-200" style="list-style:none;">
    
    <form method='post' action="edit" >
        @csrf
        <input type="hidden" value="{{$user['id']}}" name="id">
        <button class="border-white p-2 text-blue-500 mx-3">Edit</button>
    </form>

    <form method='post' action="delete/{{$user['id']}}">  
          @csrf
          
        <input type="hidden" value="{{$user['id']}}" name="id">
        <button class="border-white p-2 text-red-500 mx-3">Delete</button>
    </form>
</li>
    
   </div>@endforeach

</div>
@endsection
</div>


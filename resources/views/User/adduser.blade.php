@extends('user')
@section('title','Add User')
@section('addingUser')
<div class="flex flex-col text-center justify-center " >
    <div class="text-center
    ">
<a class="ring-2 bg-red-200 rounded p-2 px-3 " href='alluser'>All User</a></div>
<div class="text-green-500">
    {{Session::get('success')?"Successfully Added":""}}
</div><div class="text-red-500">
    {{Session::get('error')?"Something Went Wrong":""}}
</div>
<form class="m-3" action="added" method="post">
    @csrf

<div>
    <input class="m-2 p-1 rounded" type="text" name="name" placeholder="Pls Enter Your Name"  />
<span class="text-red-500">
    @error('name'){{$message}} 
    @enderror
</span>
</div>
<div>

<input class="m-2 p-1 rounded" type="text" name="address" placeholder="Enter Your Address"/>
<span class="text-red-500">
    @error('address'){{$message}} 
    @enderror
</span>
</div>
<div>

<input class="m-2 p-1 rounded" type="text" name="age" placeholder="Enter Your Age"/>
<span  class="text-red-500">
    @error('age'){{$message}} 
    @enderror
</span>
</div>
<div >
<button  class="ring-2 bg-blue-200 rounded p-2 px-3 ">Add Entries</button>
</div>
</form>
</div>
@endsection
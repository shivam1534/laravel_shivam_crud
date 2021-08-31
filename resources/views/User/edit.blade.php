@extends('user')
@section('edit')
<div>
    <h1>Updating User</h1>
    <div>
        <form action="/post_edit" method="post">
        @csrf
        <input type='text' value="{{$data['name']}}" name="name" placeholder="Edit Name"/>
        <input type='text' value="{{$data['address']}}" name="address" placeholder="Edit Address"/>
        <input type='text' value="{{$data['age']}}" name="age" placeholder="Edit Age"/>
        <input type="hidden" value="{{$data['id']}}" name="id"/>
        <button>Update</button>    
    </form>

    </div>
</div>
@endsection
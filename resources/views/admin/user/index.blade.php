<style>
  .Booking,.Activity,.Dashboard{
    background-color: none !important;
  }
  .Users {
    background-color: #007bff !important;
    
  }
  td{
    line-height: 100px
  }
</style>



@extends('admin.layouts.master')
@section('title')
<a class="btn btn-primary" href="{{route('user.create')}}">Add New User </a>


@endsection

@section('css')
    
@endsection

@section('title_page1')

@endsection

@section('title_page2')

@endsection


@section('content')

<?php
//  echo session('key') . "<br>"; 
?>
<div class="container border shadow-lg p-3 mb-5 bg-white rounded ">
<table class="table table-striped thead-dark">
  <thead class="table table-striped text-white thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      {{-- <th scope="col">Mobile</th> --}}
      {{-- <th scope="col">Password</th>       --}}
      <th scope="col">Role</th>
      <th scope="col">Edit</th>
      <th scope="col">Delate</th>
    </tr>
  </thead>
  @foreach ($users as $user)
  <tbody>
    <tr>
      {{-- {{$user}} --}}
      
      <th>{{$user->id}}</th>
      <td>
        @if($user->image != null)
        <img src="{{asset('images/'.$user->image->url)}}" style="height: 100px; width:100px; display:block; border-radius:50%;">
        @endif
      </td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      {{-- <td>{{$user->email_verified_at}}</td> --}}
      {{-- <td>{{$user->password}}</td> --}}
      @if ($user->role == 1)
      <td>Admin</td>
      @else
      <td>user</td>
      @endif

      <td>   
        <a class="btn btn-primary mt-4" href="{{route('user.edit',$user->id)}}">Edit User </a>
      </td>
      <td> 
        <form action="{{Route('user.destroy',$user->id)}}" method="POST" >
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger mt-4">Delete</button>
      </form>
    </td>
  </tbody>
  @endforeach
</tr>
</table>

</div>

@endsection


@section('scripts')
    
@endsection
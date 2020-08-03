@extends('app')

@section('title' , 'Services Page')

@section('content') 

<h1>Welcome to laravel services</h1>

    <form action="/service" method="POST">
        <input type="text" name="name">
        @csrf
        <button>Add Service</button>
    </form>
    <p style="color:red;">@error('name') {{$message}} @enderror</p>
    <ul>

    @forelse ($services as $service)

     <li>{{$service->name}}</li>

     @empty
     <li>No service</li>
    @endforelse
    
    </ul>
@endsection
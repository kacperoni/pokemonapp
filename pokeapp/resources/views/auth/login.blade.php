@extends('layouts.public')
@section('content')
<div class="container">
    <div class="left">
    </div>
    <div class="right">
        <p class="register-link">Not a member? <a href="{{route('register')}}">Register now</a></p>
        <h1 class="form-header">WELCOME</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input class="input @error('email') is-invalid @enderror" name="email" type="text" placeholder="Enter email" value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            <input class="input @error('password') is-invalid @enderror" type="password" placeholder="Password">
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
            <input class="button" type="submit" value="Sign In">
            
        </form>
        <p class="recovery-password"><a href="">Recovery Password</a></p>
    </div>
</div>
@endsection
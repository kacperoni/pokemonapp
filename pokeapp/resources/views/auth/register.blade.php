@extends('layouts.public')
@section('content')
        <div class="container">
            <div class="left">
            </div>
            <div class="right">
                <p class="register-link">Already have an account? <a href="{{route('login')}}">Login</a></p>
                <h1 class="form-header">REGISTER</h1>
                <form action="{{route('register')}}" method="POST">
                    
                    <input class="input @error('name')is-invalid @enderror" name="name" type="text" placeholder="Enter name" value="{{old('name')}}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <input class="input @error('email') is-invalid @enderror" name="email" type="text" placeholder="Enter email" value="{{old('email')}}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    
                    <input class="input @error('password') is-invalid @enderror" name="password" type="password" placeholder="Password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    <input class="input" name="password_confirmation" type="password" placeholder="Confirm Password">
                    @error('password_confirmation')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                    @csrf
                    <input class="button" type="submit" value="Sign up">
                </form>
            </div>
        </div>
@endsection
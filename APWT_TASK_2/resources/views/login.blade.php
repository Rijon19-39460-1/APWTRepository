@extends('layouts.app')
@section('content')
<h1>Login form</h1>
<form action="{{route('login')}}"  method="post">
{{csrf_field()}}
<fieldset>
    <label for="username">Enter your Username:</label>
    <input type="text" id="username" name="username"placeholder="Write here" value="{{old('username')}}">
    @error('username')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <label for="password">Enter your Password:</label>
    <input type="password" id="password" name="password"placeholder="Write here" value="{{old('password')}}">
    @error('password')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
  </fieldset>
  <br><input type="submit" value="Login" class="sub"><br><br>
</form>
@endsection 
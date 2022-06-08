@extends('layouts.app')
@section('content')
<h1>Contact form</h1>
<form action="{{route('contact')}}"  method="post">
{{csrf_field()}}
<fieldset>
    <input type="text" id="name" name="name"placeholder="Your name" value="{{old('name')}}">
    @error('username')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <input type="text" id="email" name="email"placeholder="Your Email Address" value="{{old('email')}}">
    @error('password')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <input type="tel" id="phone" name="phone"placeholder="Your Phone Number" value="{{old('phone')}}">
    @error('username')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <textarea name="subject" rows="3" cols="40" placeholder="Type your message here...." value="{{old('subject')}}"></textarea>
    @error('username')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
  </fieldset>
  <br><input type="submit" value="Send" class="sub"><br><br>
</form>
@endsection 
@extends('layouts.app')
@section('content')
<h1>Registration form</h1>
<form action="{{route('registration')}}"  method="post">
{{csrf_field()}}
<fieldset>
    <legend>Basic Information</legend>
    <label for="fname">Enter your First name:</label>
    <input type="text" id="fname" name="fname" placeholder="Write here" value="{{old('fname')}}">
    @error('fname')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <label for="lname">Enter your Last name:</label>
    <input type="text" id="lname" name="lname" placeholder="Write here" value="{{old('lname')}}">
    @error('lname')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <label for="gender">Gender :</label>
    <input type="radio" name="gender"value="Male">
    <label for="Male">Male</label>
    <input type="radio" name="gender"value="Female">
    <label for="Female">Female</label>
    <input type="radio" name="gender"value="Others">
    <label for="Others">Others</label>
    <br>
    @error('gender')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <label for="dob">Date of birth:</label>
    <input type="date" id="dob" name="dob">
    @error('dob')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <label for="religion">Choose your Religion:</label>
    <select name="religion" id="religion">
    <option>Select Religion</option>
    <option value="Islam">Islam</option>
    <option value="Hinduism">Hinduism</option>
    <option value="Christianity">Christianity</option>
    </select>
    @error('religion')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>   
    </fieldset>
    <fieldset>
    <legend>Contact Information</legend>
    <label for="Preaddress">Enter your Present Address:</label>
    <textarea name="Preaddress" rows="3" cols="40" placeholder="Write here" value="{{old('Preaddress')}}"></textarea>
    @error('Preaddress')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <label for="Peraddress">Enter your Permanent Address:</label>
    <textarea name="Peraddress" rows="3" cols="40" placeholder="Write here" value="{{old('Peraddress')}}"></textarea>
    @error('Peraddress')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <label for="phone">Enter your Phone number:</label>
    <input type="tel" id="phone" name="phone" placeholder="Write here" value="{{old('phone')}}">
    @error('phone')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    <label for="email">Enter your Email:</label>
    <input type="text" id="email" name="email" placeholder="Write here" value="{{old('email')}}">
    @error('email')
            <span class="text-danger">{{$message}}</span>
    @enderror
    <br><br>
    </fieldset>
    <fieldset>
    <legend>Credentials</legend>
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
  <br><input type="submit" value="Submit" class="sub"><br><br>
</form>
@endsection 
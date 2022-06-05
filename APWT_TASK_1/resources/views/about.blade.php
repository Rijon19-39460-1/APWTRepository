<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.columnn {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.cardd {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  
}

.con {
  padding: 0 16px;
}

.con::after, .roww::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 10%;
    display: block;
  }
}
</style>
</head>
<body>
@include('navbar.navbar')
<div class="about-section">
  <h1>About Us Page</h1>
  <p>We are one of the largest company in the world, and we want to improve society and the future through our efforts and expertise.</p>
</div>

<h2 style="text-align:center">Our Offices</h2>
<div class="roww">
  <div class="columnn">
    <div class="cardd">
      <img src="{{URL::asset('/img/1.jpg')}}" alt="Jane" style="width:100%">
      <div class="con">
        <h2>Main Brach</h2>
        <p class="title">Gulshan, Dhaka</p>
        <p>abc@hotmail.com</p>
        <p>+880101010</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="columnn">
    <div class="cardd">
      <img src="{{URL::asset('/img/2.jpg')}}" alt="Mike" style="width:100%;">
      <div class="con">
        <h2>Sub Brach 1</h2>
        <p class="title">Mirpur, Dhaka</p>
        <p>abc@hotmail.com</p>
        <p>+880101010</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="columnn">
    <div class="cardd">
      <img src="{{URL::asset('/img/3.jpg')}}" alt="John" style="width:100%">
      <div class="con">
        <h2>Sub Brach 2</h2>
        <p class="title">Badda, Dhaka</p>
        <p>abc@hotmail.com</p>
        <p>+880101010</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
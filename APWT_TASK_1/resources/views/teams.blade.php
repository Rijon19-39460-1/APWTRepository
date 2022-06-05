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
p, h2
{
    text-align:center;
}
</style>
</head>
<body>
@include('navbar.navbar')
<div class="about-section">
  <h3 style="text-align:center">We have best team member, they are</h3>
</div>
<div class="roww">
  <div class="columnn">
    <div class="cardd">
      <img src="{{URL::asset('/img/st.jpg')}}" alt="Jane" style="width:100%">
      <div class="con">
        <h2>Main Brach</h2>
        <p class="title">Steve jobs</p>
        <p>Web Developer</p>
        <p><button class="button">More</button></p>
      </div>
    </div>
  </div>

  <div class="columnn">
    <div class="cardd">
      <img src="{{URL::asset('/img/mz.jpg')}}" alt="Mike" style="width:100%;">
      <div class="con">
        <h2>Sub Brach 1</h2>
        <p class="title">Mark zuckerberg</p>
        <p>Web Developer</p>
        <p><button class="button">More</button></p>
      </div>
    </div>
  </div>
  
  <div class="columnn">
    <div class="cardd">
      <img src="{{URL::asset('/img/el.jpg')}}" alt="John" style="width:100%">
      <div class="con">
        <h2>Sub Brach 2</h2>
        <p class="title">Elon Musk</p>
        <p>Web Developer</p>
        <p><button class="button">More</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
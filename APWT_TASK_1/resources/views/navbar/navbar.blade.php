<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="{{route('home')}}">ABC Company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('home')}}">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="{{route('products')}}">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('teams')}}">Our Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>
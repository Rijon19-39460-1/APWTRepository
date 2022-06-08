
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="{{route('registration')}}">ABC Company</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('login')}}">Login </a>
      </li>
      <li class="nav-item">
        <a class="nav-link"href="{{route('registration')}}">Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

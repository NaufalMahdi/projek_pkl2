<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">   
    <a class="navbar-brand" href="/">Welcome</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Posts") ? 'active' : '' }}" href="/posts">Blog</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        @auth
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Welcome back, {{ auth()->user()->name }}
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="/dashboard"><i> Dashboard</i>
    <div class="dropdown-divider"></div>

    <form action="/logout" method="post">
      @csrf
      <button type="submit" class="dropdown-item">Logout</button>
    </form>
    <!-- <a class="dropdown-item" href="#">Logout</a> -->
  </div>
</div>

        @else
        <li class="nav-item">
          <a href="/login" class="nav-link {{ ($title === "Login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i>
          Login</a>
        </li>
        @endauth
      </ul>

    </div>
  </div>
</nav>

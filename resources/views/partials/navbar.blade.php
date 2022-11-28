<nav class="navbar navbar-expand-lg  navbar-dark bg-info">
    <div class="container">
      <a class="navbar-brand" href="#">Laravel BLOG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active == "home") ? "active" : '' }}"  href="/">Home</a>
          </li> 
          <li class=">
            <a class="nav-link {{ ($active === "about") ? "active" : '' }}" href="/about"><i></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "post") ? "active" : '' }}" href="/posts">Post</a>
          </li><li class="nav-item">
            <a class="nav-link {{ ($active === "categories") ? "active" : ''}}" href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
            
              <li><hr class="dropdown-divider"></li>
             
              <form action="/logout" method="post">
                @csrf
                <button class="dropdown-item">Logout</button>
              </form>
            </ul>
          </li>
          
            @else
            <li class="nav-item"><a href="/login">login</a></li>
           

          </ul>
        @endauth
      </div>
    </div>
  </nav>
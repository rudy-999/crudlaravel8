<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ $title=='Home'?'active':'' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title=='About' ? 'active':'' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title=='Karyawan' ? 'active':'' }}" href="/karyawan">Karyawan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title=='Post' ? 'active':'' }}" href="/post">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title=='Register' ? 'active':'' }}" href="/register">Register</a>
          </li>
        </ul>
        
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/register">user</a></li>
              <li><a class="dropdown-item" href="/logout">Logout</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
              <button class="btn btn-outline-success" type="submit">logout</button>
              {{-- <a class="nav-link" href="/logout">Logout</a> --}}
            </form>
          </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
          @endauth

        </ul>
      </div>
    </div>
  </nav>
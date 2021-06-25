<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container-fluid">
  <a class="navbar-brand" href="/posts">
      Galerija
    </a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/pocetna">Pocetna</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/onama">O nama</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/galerija">Galerija</a>
      </li>
            <li class="nav-item active">
        <a class="nav-link" href="/postavi">Postavi</a>
      </li>
       @auth
        <li class="nav-item">
          <a class="nav-link" href="/posts/create">Create post</a>
        </li>
        <li class="nav-item">
          <strong> Username: {{ auth()->user()->name }} </strong>
        </li>
        <li class="nav-item">
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
          </form>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Sign in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/register">Sign up</a>
        </li>
      @endauth
    </ul>
</nav>
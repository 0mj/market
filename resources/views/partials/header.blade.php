<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light"> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="{{ route('welcome.index')}}">Pong</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active">
        <a class="nav-link" href="{{ route('blog.index') }}">Blog <span class="sr-only">(current)</span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('farms.index') }}">FARMS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('markets.index') }}">MARKETS</a>
      </li>
      <li class="nav-item">
        <small><a class="nav-link" href="{{ route('admin.index') }}">admin</a></small>
      </li>
      
    </ul>
   
  </div>
</nav>




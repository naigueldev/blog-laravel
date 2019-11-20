<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
  data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" 
  aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/' )}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('about' )}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('services' )}}">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('posts' )}}">Blog</a>
      </li>
      
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li>
        <a href="/posts/create" class="btn btn-success">Create Post</a>
      </li>
    </ul>
  </div>
</nav>




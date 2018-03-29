<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Blog</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jumbotron.css') }}" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="/">{{ $header }}</a>
        </div>
        <ul id="navbar" class="menu">
                    <li><a href="page/add">Add article</a></li>
                    
        </ul><!--/.navbar-collapse -->
      </div>
    </nav>

    @if(count($errors)>0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

@yield('content')

  </body>
</html>

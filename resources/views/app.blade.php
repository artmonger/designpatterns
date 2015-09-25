<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title') | Design Patterns</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="md-12-col">
                    <!-- Static navbar -->
                  <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Design Patterns</a>
                      </div>
                      <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                          <li class="{{ Request::is('/') ? 'active' : '#' }}"><a href="/">Home</a></li>
                          <li class="{{ Request::is('decorator') ? 'active' : '#' }}"><a href="decorator">Decorator</a></li>
                          <li class="{{ Request::is('observer') ? 'active' : '#' }}"><a href="observer">Observer</a></li>
                          <li class="{{ Request::is('adapter') ? 'active' : '#' }}"><a href="adapter">Adapter</a></li>
                          <li class="{{ Request::is('template-method') ? 'active' : '#' }}"><a href="template-method">Template Method</a></li>
                          <li class="{{ Request::is('strategy') ? 'active' : '#' }}"><a href="strategy">Strategy</a></li>
                          <li class="{{ Request::is('chain-of-responsibility') ? 'active' : '#' }}"><a href="chain-of-responsibility">Chain of Responsibility</a></li>
                          <li class="{{ Request::is('specification') ? 'active' : '#' }}"><a href="specification">Specification</a></li>
                        </ul>
                      </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                  </nav>

                  @yield('content')
                </div>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>

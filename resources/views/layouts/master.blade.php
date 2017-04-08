<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title', 'A3')
    </title>

	<meta charset='utf-8'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type='text/css' rel='stylesheet'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type='text/css' rel='stylesheet'>
    <link href="/css/a3.css" type='text/css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Coda" />

    @stack('head')

</head>
<body>

	<header>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="/assignments/pwgenerator">Password Generator</a></li>
            <li><a href="/assignments/piglatin">Pig Latin Translator</a></li>
            <li><a href="option3">Option 3</a></li>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
	</header>

<div class="container-fluid">
	<section>
		@yield('content')
	</section>
</div>

	<footer>
		&copy; {{ date('Y') }}
	</footer>

</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    @stack('body')

</body>
</html>

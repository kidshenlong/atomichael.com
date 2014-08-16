<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Atomichael Admin</title>
    {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'); }}
    {{ HTML::style('css/styles.css'); }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Roboto'); }}
	{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'); }}
</head>

<body>
	<div id='header'>
			<div='nav'>
				<ul>
					<li><a href='posts'>Blog</a></li>
				</ul>
			</div>
	</div>
	<div class="container">
		@yield('container')
	</div>
	<div='footer'>

	</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>FARMETS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<!-- NO personal STYLE SHEET HERE
		BUT...
		can use laravel facade here..
		as seen in href=""
		<link rel="stylesheet" type="text/css" href="{{ URL::to('css/styles.css')}}"> 
															^ this will work wherever
															you may be within the site.


	-->
</head>
<body>
@include('partials.header')
<div class="container-fluid">
	@yield('content')	

</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Selamat datang di Blog ini!</h1>

	<h2>Link Artikel disini - {{ $blog }} !!</h2>

	

	<h4>Our Team </h4>

	@foreach($users as $user)
	 <li> {{ $user }}</li>
	@endforeach

</body>
</html>
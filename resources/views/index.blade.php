<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klinik - Login</title>
      <link href="{{ asset('template/dashboard') }}/style.css" rel="stylesheet">
</head>
<body>

<div class="container" id="container">

	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<br>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
            <br>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-right">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>

			</div>
		</div>
	</div>
</div>

<script src="{{ asset('template/dashboard') }}/main.js"></script>
</body>
</html>

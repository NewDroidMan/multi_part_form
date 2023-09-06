<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
	@livewireStyles
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3 mt-4">
				<h1 class="text-center">Multi Step Employee Registration</h1><hr>
				@livewire('multi-step-form')
			</div>
		</div>
	</div>
	@livewireScripts
</body>
</html>
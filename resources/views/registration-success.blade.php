<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Success!!</title>
	<link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body class="d-flex justify-content-center p-4 pt-4">
	<div class="card">
		<div class="card-header bg-success text-white">Registration complete</div>
		<div class="card-body">
			Hello {{ request()->name }}, thank you for registering to our site.
			<p><a href="/register" class="btn btn-sm btn-secondary">Back to register page</a></p>
		</div>
	</div>
</body>
</html>
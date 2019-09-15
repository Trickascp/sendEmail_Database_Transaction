<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
	<div class="card">
		<div class="card-body">
			<form action="{{ route('kate.tbh') }}" method="POST">
				<div>
					<label>Judul</label>
					<input type="text" name="nama" class="form-control">
				</div>
				<div>
					<label>Deskripsi</label>
					<textarea class="form-control" rows="3"></textarea>
				</div>
				<button class="btn btn-success mt-3">Tambah</button>
			</form>
		</div>
	</div>
</div>


</body>
</html>
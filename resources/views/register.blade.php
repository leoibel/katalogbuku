@extends('layout.layout')
@section('content')
<div class="row justify-content-md-center">
	<div class="col-md-6">
		@if(session('success'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
		@endif
		<div class="card">
			<div class="card-body">
				<h3 class="card-title">Register</h3>
				<form action="register" method="post">
					@csrf()
					<div class="form-group">
						<label>Nama:</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label>Telp:</label>
						<input type="text" name="telp" class="form-control">
					</div>
					<div class="form-group">
						<label>Username:</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input type="password" name="password" class="form-control">
					</div>
					<input type="submit" name="submit" value="Register" class="btn btn-dark">
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
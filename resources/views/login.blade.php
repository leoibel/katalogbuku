@extends('layout.layout')
@section('content')
<div class="row justify-content-md-center">
	<div class="col-md-6">
		<div class="card">
			<div class="card-body">
				<h3 class="card-title">Login</h3>
				<form action="login" method="post">
					@csrf()
					<div class="form-group">
						<label>username:</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>password:</label>
						<input type="password" name="password" class="form-control">
					</div>
					<input type="submit" name="submit" value="Login" class="btn btn-dark">
				</form>
			</div>
		</div>
	</div>
</div>
@endsection
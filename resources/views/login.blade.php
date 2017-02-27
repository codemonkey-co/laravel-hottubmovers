@extends('partials.master')

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h3>Admin Login - Indianapolis</h3>
			<form method="POST" action="login">
				{{ csrf_field() }}
				<div class="form-group">
					<input name="username" class="form-control" placeholder="username" autofocus>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="password">
				</div>
				<div class="form-group">
					<button type="submit" class="form-control">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
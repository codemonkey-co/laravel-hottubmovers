@extends('../partials/master')

@section('content')
	<h1>New Hot Tub Lead</h1>
	<p>Name: {{ $input['name'] }}</p>
	<p>Phone: {{ $input['phone'] }}</p>
	<p>Email: {{ $input['email'] }}</p>
	<p>Size: {{ $input['size'] }}</p>
	<p>Base: {{ $input['base'] }}</p>
	<p>Fenced?: {{ $input['fenced'] }}</p>
@stop
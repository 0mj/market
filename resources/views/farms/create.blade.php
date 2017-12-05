@extends('layouts.master')
@section('content')


<form action="{{ route('farms.store') }}" method="post">
		{{ csrf_field() }}

	<label for="name">Farm Name</label>
	<input type="text" name="name"><br><br>
	<label for="city">Farm City</label>
	<input type="text" name="city"><br><br>
	<label for="website">Farm Website</label>
	<input type="text" name="website"><br><br>
	<button type="submit">Create</button>
</form>
@endsection
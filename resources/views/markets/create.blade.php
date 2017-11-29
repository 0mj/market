@extends('layouts.app')
@section('main')


<form action="{{ route('markets.store') }}" method="post">
		{{ csrf_field() }}
	<!-- <input type="hidden" name="_token" value="DaBSErIR…WPPI"> -->

	<label for="name">Market Name</label>
	<input type="text" name="name"><br><br>
	<label for="city">Market City</label>
	<input type="text" name="city"><br><br>
	<label for="website">Market Website</label>
	<input type="text" name="website"><br><br>
	<button type="submit">Create</button>
</form>
@endsection
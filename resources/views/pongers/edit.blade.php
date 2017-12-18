@extends('layouts.master')
@section('content')

<div class="row">
	<div class="col-md-6">
				

		<form action="{{ url('pongers', $ponger) }}" method="post">
			{{ csrf_field() }}
			{{ method_field('patch') }}

			<label for="first_name">First name</label>
			<input type="text" name="first_name" class="form-control" value="{{ $ponger->first_name }}">
			
			<label for="last_name">last name</label>
			<input type="text" name="last_name" class="form-control" value="{{ $ponger->last_name }}">

			<label for="city">city</label>
			<input type="text" name="city" class="form-control" value="{{ $ponger->city }}">

			<label for="state">state</label>
			<input type="text" name="state" class="form-control" value="{{ $ponger->state }}">

			<label for="age">age</label>
			<input type="text" name="age" class="form-control" value="{{ $ponger->age }}">

			<label for="height">height</label>
			<input type="text" name="height" class="form-control" value="{{ $ponger->height }}">

			<label for="swing_hand">swing_hand</label>
			<input type="text" name="swing_hand" class="form-control" value="{{ $ponger->swing_hand }}">

			<label for="win">win</label>
			<input type="text" name="win" class="form-control" value="{{ $ponger->win }}">

			<label for="loss">loss</label>
			<input type="text" name="loss" class="form-control" value="{{ $ponger->loss }}">

			<button type="submit" class="btn btn-primary form-control" >
			    UPDATE!
			</button>

		</form>


	</div>	

</div>

@endsection



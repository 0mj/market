@extends('layouts.master')
@section('content')


<form action="{{ route('pongers.store') }}" method="post">
				{{ csrf_field() }}
<div class="clearfix"></div>
			<label for="first_name">Ponger first Name</label>
			<input type="text" name="first_name"><br><br>

			<label for="last_name">Ponger last Name</label>
			<input type="text" name="last_name"><br><br>
			
			<label for="city">Ponger City</label>
			<input type="text" name="city"><br><br>

			<label for="state">Ponger state</label>
			<input type="text" name="state"><br><br>

			<label for="age">Ponger age</label>
			<input type="text" name="age"><br><br>
			
			<label for="height">Ponger height</label>
			<input type="text" name="height"><br><br>

			


			<button type="submit">Create</button>
		</form>
@endsection
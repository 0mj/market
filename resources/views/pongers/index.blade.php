@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col">
	

		<ul>
			@foreach($pongers as $ponger)
				<li>
					 <a href="{{ route('pongers.show', $ponger) }}">
							  {{ $ponger->first_name }} {{$ponger->last_name}}
					 </a>
					 <small>
					 	<a href="{{ route('pongers.edit', $ponger)}}">edit</a>
					 </small>
				</li>
			@endforeach
		</ul>
		{{ $pongers->links() }}
	</div>
	<div class="col">
		<div class="clearfix"></div>
		<form action="{{ route('pongers.store') }}" method="post">
				{{ csrf_field() }}
<br>
			<label for="first_name">Ponger first Name</label>
			<input class="form-control" type="text" name="first_name">

			<label for="last_name">Ponger last Name</label>
			<input class="form-control" type="text" name="last_name">
			
			<label for="city">Ponger City</label>
			<input class="form-control" type="text" name="city">

			<label for="state">Ponger state</label>
			<input class="form-control" type="text" name="state">

			<label for="age">Ponger age</label>
			<input class="form-control" type="text" name="age">
			
			<label for="height">Ponger height</label>
			<input class="form-control" type="text" name="height">

			<label for="swing_hand">Ponger swing_hand</label>
			<input class="form-control" type="text" name="swing_hand">

			<label for="win">Ponger wins</label>
			<input class="form-control" type="text" name="win">

			<label for="loss">Ponger losses</label>
			<input class="form-control" type="text" name="loss">

			



			


			<button type="submit" class="btn btn-success" >Create NEW Ponger</button>
		</form>

	</div>
</div>

@endsection
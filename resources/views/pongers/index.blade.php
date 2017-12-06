@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col">
	

		<ul>
			@foreach($pongers as $ponger)
				<li>
					 <a href="{{ route('pongers.show', $ponger) }}">
							  {{ $ponger->first_name }}
					 </a>
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

			<label for="swing_hand">Ponger swing_hand</label>
			<input type="text" name="swing_hand"><br><br>

			<label for="win">Ponger wins</label>
			<input type="text" name="win"><br><br>

			<label for="loss">Ponger losses</label>
			<input type="text" name="loss"><br><br>

			



			


			<button type="submit">Create</button>
		</form>

	</div>
</div>

@endsection
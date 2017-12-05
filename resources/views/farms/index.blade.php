@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col">
	

		<ul>
			@foreach($farms as $farm)
				<li>
					 <a href="{{ route('farms.show', $farm) }}">
							  {{ $farm->name }}
					 </a>
				</li>
			@endforeach
		</ul>
		{{ $farms->links() }}
	</div>
	<div class="col">
		
		<form action="{{ route('farms.store') }}" method="post">
				{{ csrf_field() }}
<br>
			<label for="name">Farm Name</label>
			<input type="text" name="name"><br><br>
			<label for="city">Farm City</label>
			<input type="text" name="city"><br><br>
			<label for="website">Farm Website</label>
			<input type="text" name="website"><br><br>
			<button type="submit">Create</button>
		</form>

	</div>
</div>

@endsection
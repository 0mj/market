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
			<input  class="form-control"type="text" name="name">
			<label for="city">Farm City</label>
			<input  class="form-control"type="text" name="city">
			<label for="website">Farm Website</label>
			<input class="form-control" type="text" name="website">
			<button class="btn btn-success" type="submit">Create NEW Farm</button>
		</form>

	</div>
</div>

@endsection
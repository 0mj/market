@extends('layouts.master')
@section('content')
<div class="row">
	<div class="col">
	

		<ul>
			@foreach($markets as $market)
				<li>
					 <a href="{{ route('markets.show', $market) }}">
							  {{ $market->name }}
					 </a>
				</li>
			@endforeach
		</ul>
		{{ $markets->links() }}
	</div>

	<div class="col">
		
		<form action="{{ route('markets.store') }}" method="post">
				{{ csrf_field() }}
				<br>
		<label for="name">Market Name</label>
			<input class="form-control" type="text" name="name">
			<label for="city">Market City</label>
			<input class="form-control" type="text" name="city">
			<label for="website">Market Website</label>
			<input class="form-control" type="text" name="website">
			<button type="submit" class="btn btn-success">Create NEW Market</button>
		</form>
		
	</div>
</div>

@endsection
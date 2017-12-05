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
		<label for="name">Market Name</label>
			<input type="text" name="name"><br><br>
			<label for="city">Market City</label>
			<input type="text" name="city"><br><br>
			<label for="website">Market Website</label>
			<input type="text" name="website"><br><br>
			<button type="submit">Create</button>
		</form>
		
	</div>
</div>

@endsection
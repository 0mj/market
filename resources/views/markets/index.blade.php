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
</div>

@endsection
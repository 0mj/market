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
</div>

@endsection
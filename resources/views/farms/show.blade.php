@extends('layouts.master')
@section('content')

<h1 class="">{{ $farm->name }}</h1>




<ul >
	<li >Location City: {{ $farm->city }}</li>
	<li >Website: {{ $farm->website }}</li>
	
</ul>

<span>
	<form action="{{ route('farms.destroy', $farm) }}" method="post">
	    {{ csrf_field() }}
	    {{ method_field('delete') }}
	    <button class="btn btn-danger" type="submit">DELETE</button>
	</form>
</span>

<span>
	<a href="{{ route('farms.edit', $farm) }}" class="btn btn-primary">Edit</a>
</span>

@endsection

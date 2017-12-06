@extends('layouts.master')
@section('content')
<h1>{{ $farm->name }}</h1>
<ul>
	 <li>Location City: {{ $farm->city }}</li>
	 <li>Website: {{ $farm->website }}</li>
	 <li>Created: {{ $farm->created_at }}</li>
	 <li>ID#: {{ $farm->id }}</li>
</ul>

<a href="{{ route('farms.edit', $farm) }}">
	<button class="text" type="submit">EDIT</button>
</a>
<form action="{{ route('farms.destroy', $farm) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('delete') }}
    <button class="text-danger" type="submit">DELETE</button>
</form>

@endsection

@extends('layouts.master')
@section('content')
<h1>{{ $market->name }}</h1>
<ul>
	 <li>Location City: {{ $market->city }}</li>
	 <li>Website: {{ $market->website }}</li>
	 <li>Created: {{ $market->created_at }}</li>
	 <li>ID#: {{ $market->id }}</li>
</ul>

<a href="{{ route('markets.edit', $market) }}"><span class="fa fa-pencil" aria-hidden="true">EDIT</span></a>
<form action="{{ route('markets.destroy', $market) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('delete') }}
    <button class="text-danger" type="submit">DELETE</button>
</form>

@endsection

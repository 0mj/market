@extends('layouts.master')
@section('content')
<h1>{{ $market->name }}</h1>
<ul>
 <li>Location City: {{ $market->city }}</li>
 <li>Website: {{ $market->website }}</li>
 
 <li>Created: {{ $market->created_at }}</li>
 <li>ID#: {{ $market->id }}</li>
</ul>
@endsection



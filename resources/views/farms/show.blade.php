@extends('layouts.master')
@section('content')
<h1>{{ $farm->name }}</h1>
<ul>
 <li>Location City: {{ $farm->city }}</li>
 <li>Website: {{ $farm->website }}</li>
 
 <li>Created: {{ $farm->created_at }}</li>
 <li>ID#: {{ $farm->id }}</li>
</ul>
@endsection



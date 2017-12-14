@extends('layouts.master')
@section('content')
<h1>{{ $ponger->first_name  }} {{ $ponger->last_name  }}</h1>
<ul>
 <li>Ponger City: {{ $ponger->city }}</li>
 <li>Ponger State: {{ $ponger->state }}</li>
 <li>Ponger Age: {{ $ponger->age }}</li>
 <li>Ponger Height: {{ $ponger->height }}</li>
 <li>Ponger Swing: {{ $ponger->swing_hand }}</li>
 <li>Ponger win: {{ $ponger->win }}</li>
 <li>Ponger loss: {{ $ponger->loss }}</li>
</ul>
@endsection



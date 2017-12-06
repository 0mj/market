@extends('layouts.master')
@section('content')
<!-- <h1>{{ $farm->name }}</h1>
<ul>
	 <li>Location City: {{ $farm->city }}</li>
	 <li>Website: {{ $farm->website }}</li>
	 <li>Created: {{ $farm->created_at }}</li>
	 <li>ID#: {{ $farm->id }}</li>
</ul>

<a href="{{ route('farms.edit', $farm) }}">
	<button class="text" type="submit">EDIT</button>
</a> -->
<!-- <form action="{{ route('farms.destroy', $farm) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('delete') }}
    <button class="text-danger" type="submit">DELETE</button>
</form> -->


<!-- <div class="row justify-content-center"> -->
      <!-- <div class="card col"> -->

        <!-- <div class="card-block"> -->
          <!-- <div class="row"> -->
            <h1 class="">{{ $farm->name }}</h1>
            <!-- <div class="col-1 d-flex justify-content-end"> -->
                <button class="btn btn-info"><a href="{{ route('farms.edit', $farm) }}">Edit</a></button>
                <form action="{{ route('farms.destroy', $farm) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button class="btn btn-danger" type="submit">DELETE</button>
                </form>
            <!-- </div> -->
          <!-- </div> -->

          <!-- <div class="row"> -->
            <!-- <div class="col-md-3 d-flex flex-column"> -->
              <!-- <img class="pb-3" src="{{ asset('img/farm.png') }}"/> -->
              <ul class="list-group">
                <li class="list-group-item text-muted">Location City: {{ $farm->city }}</li>
                <li class="list-group-item text-muted">Website: {{ $farm->website }}</li>
              </ul>
            <!-- </div> -->

        <!-- </div> -->

      <!-- </div> -->
    <!-- </div> -->





@endsection

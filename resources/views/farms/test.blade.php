@extends('layouts.master')

@section('content')

            
            
           
            @foreach ($markets as $id => $market)

            <pre>
            {{ var_dump($market) }}
            
            </pre>
            
             
            @endforeach
         
@endsection
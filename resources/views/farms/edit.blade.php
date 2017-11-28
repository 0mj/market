<form action="{{ route('markets.update', $farm) }}" method="post">
	{{ method_field('patch') }}

	<!-- when we used pluck() we created a collection where the
		key is the id of the market and the $market->name is
		the value-->
	@foreach ($markets as $id => $market)
		<div>
			 <label for="{{ $market }}">
			 	<!-- here, we will create a checkbox with the name of the market and the value of the market id-->
			 	<!--markets[] will return an array of checked values to our request object in the controller-->
			 	<input type="checkbox" name="markets[]" value="{{ $id }}"> 

			 	<!-- this ternary if statement will return the text 'checked' if our farm->markets has the $id present in a collection -->
			 	{{ $farm->markets()
			 		->allRelatedIds()
			 		->contains($id) ? "checked" : "" }}>
			 	{{ $market }}
			 </label>
		</div>

	@endforeach
</form>






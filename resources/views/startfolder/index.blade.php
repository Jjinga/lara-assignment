@extends('layout')
@section('xxx')


<div class="m-5 max-auto">
<img src="images/j.jpg" width="50%" class="mb-2">
<h1><span class="p-5">Enter Stock Details</span></h1>
<form method="POST" action="/create" enctype="multipart/form-data">
    @csrf
       <div class="m-2">
		  <label for="pdname" class="w-50 text-center"><b>Product Name</b></label>
		  <input type="text" class="form-control w-50" name="pdname"
			placeholder="Product Name" value="{{old('pdname')}}" />

	   
			@error('pdname')
			<p class="alert alert-danger">{{$message}}</p>
			@enderror
		</div>
		
		 <div class="m-2">
		  <label for="qty"  class="w-50 text-center"><b>Quantity</b></label>
		  <input type="text" class="form-control w-50" name="qty"
			placeholder="Quantity" value="{{old('pdname')}}" />

	   
			@error('qty')
			<p class="alert alert-danger">{{$message}}</p>
			@enderror
		</div>
		       
			   
		<div class="m-2">
		  <label for="price"  class="w-50 text-center"><b>Price</b></label>
		  <input type="text" class="form-control w-50" name="price"
			placeholder="Price" value="{{old('price')}}" />

	   
			@error('price')
			<p class="alert alert-danger">{{$message}}</p>
			@enderror
		</div>

    <div >
      <button class="btn btn-primary mt-5 w-50">
        Save Record
      </button>
    </div>
  </form>
</div>
  @endsection







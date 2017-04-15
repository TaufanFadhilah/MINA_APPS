@extends('template')
@section('content')
<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Input Fish</h3>
                            </div>
                            <div class="panel-body">

                                <form class="form-validate" action="{{url('/postEmployees')}}" role="form" method="post">
                                {{ csrf_field() }}
                                    <div class="form-body">
                                    	<div class="col-lg-6">
	                                        <div class="form-group">
	                                            <label for="name">Name</label>
	                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
	                                        </div>

	                                        <div class="form-group">
	                                            <label for="url">Description</label>
	                                            <textarea class="form-control" name="description"></textarea>
	                                        </div>

	                                        <div class="form-group">
	                                            <label for="price">Price</label>
	                                            <input type="number" class="form-control" name="price" id="price" placeholder="Price (Rp.)" required>
	                                        </div>
	                                    </div>
	                                    <div class="col-lg-6">

	                                        <div class="form-group">
	                                        	<label for="numbers">Photo</label>
	                                        	<input type="file" name="photo" class="form-control">
	                                        </div>
	                                    </div>
                                    </div>

                                    <div class="form-actions fluid">
                                        <div class="col-md-12 text-right">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </form>

                            </div>  <!-- END: Panel Body -->
                        </div>
	</div>
</div>
@endsection
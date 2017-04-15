@extends('template')
@section('content')
<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Input Employee</h3>
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
	                                            <label for="username">Username</label>
	                                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
	                                        </div>

	                                        <div class="form-group">
	                                            <label for="password">Password</label>
	                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
	                                        </div>

	                                        <div class="form-group">
	                                            <label for="passwordc">Confirm Password</label>
	                                            <input type="password" class="form-control" name="passwordc" id="passwordc" placeholder="Confirm Password" required>
	                                        </div>
	                                    </div>
	                                    <div class="col-lg-6">
	                                    	<div class="form-group">
	                                            <label for="Telphone">Telphone</label>
	                                            <input type="number" class="form-control" name="telphone" id="Telphone" placeholder="Telphone" required>
	                                        </div>

	                                        <div class="form-group">
	                                            <label for="url">Address</label>
	                                            <textarea class="form-control" name="address"></textarea>
	                                        </div>

	                                        <div class="form-group">
	                                            <label for="numbers">Posisition</label>
	                                            <select class="form-control" name="position">
	                                            	@foreach($status as $row)
	                                            	<option value="{{$row->id_employee_status}}">{{$row->name}}</option>
	                                            	@endforeach
	                                            </select>
	                                        </div>

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
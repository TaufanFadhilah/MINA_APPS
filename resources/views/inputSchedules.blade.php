@extends('template')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('/plugins/dateTime-picker/css/bootstrap-datetimepicker.min.css')}}">
@endsection
@section('content')
<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Input Schedule</h3>
                            </div>
                            <div class="panel-body">

                                <form class="form-validate" action="{{url('/postEmployees')}}" role="form" method="post">
                                    <div class="form-body">
                                    	<div class="col-lg-12">
	                                        <div class="form-group">
	                                            <label for="name">Name</label>
	                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
	                                        </div>

	                                        <div class="form-group">
	                                            <label for="username">Employee</label>
	                                            <select class="form-control" name="employee">
	                                            	@foreach($employees as $row)
	                                            	<option value="{{$row->id_employee}}">{{$row->user_data->name}}</option>
	                                            	@endforeach
	                                            </select>
	                                        </div>

	                                        <div class="form-group">
	                                            <label for="username">Manager</label>
	                                            <select class="form-control">
	                                            	@foreach($managers as $row)
	                                            	<option value="{{$row->id_employee}}">{{$row->user_data->name}}</option>
	                                            	@endforeach)
	                                            </select>
	                                        </div>

	                                        <div class="form-group">
		                                        <label for="username">Datetime</label>
		                                    	<div class='input-group date dateTime-picker' data-sideBySide="1">
		                                            <input type='text' class="form-control" />
		                                            <span class="input-group-addon">
		                                                <span class="sli-calendar"></span>
		                                            </span>
	                                        	</div>
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
@section('js')
<script type="text/javascript" src="{{asset('/plugins/date-picker/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/plugins/dateTime-picker/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
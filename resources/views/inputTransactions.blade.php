@extends('template')
@section('content')
<div class="row">
	<div class="col-lg-12">
	<div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Input Transaction</h3>
                            </div>
                            <div class="panel-body">

                                <form class="form-validate" action="{{url('/postEmployees')}}" role="form" method="post">
                                {{ csrf_field() }}
                                    <div class="form-body">
                                    	<div class="col-lg-6">
	                                        <div class="form-group">
	                                            <label for="fish">Fish</label>
	                                            <select class="form-control" name="fish">
	                                            	@foreach($fish as $row)
	                                            	<option value="{{$row->id_fish_category}}">{{$row->name}}</option>
	                                            	@endforeach
	                                            </select>
	                                        </div>

	                                        <div class="form-group">
	                                            <label for="amout">Amount</label>
	                                            <input type="number" class="form-control" name="amout" id="amout" placeholder="Amout (TON)" required>
	                                        </div>
	                                        
	                                    </div>
	                                    <div class="col-lg-6">
	                                        <div class="form-group">
	                                            <label for="sender">Sender</label>
	                                            <select class="form-control" name="sender">
	                                            	@foreach($supplier as $row)
	                                            	<option value="{{$row->id_supplier}}">{{$row->name}}</option>
	                                            	@endforeach
	                                            </select>
	                                        </div>

	                                        <div class="form-group">
	                                            <label for="receiver">Receiver</label>
	                                            <select class="form-control" name="receiver">
	                                            	@foreach($employee as $row)
	                                            	<option value="{{$row->id_employee}}">{{$row->name}}</option>
	                                            	@endforeach
	                                            </select>
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
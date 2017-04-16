@extends('template')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
                <h3 class="panel-title">List Employees</h3>
                <div class="tools">
                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>	                                
                </div>
            </div>
			<div class="panel-body">
			<h4 style="color: red">{{session()->get('message')}}</h4>
				<table class="table ">
	                <thead>
	                    <tr>
	                        <th>ID</th>
	                        <th>Name</th>
	                        <th>Username</th>
	                        <th>Position</th>
	                        <th>Address</th>
	                        <th>Register at</th>
	                        <th>Photo</th>
	                        <th>Action</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	@foreach($data as $row)
						<tr>
	                        <td>{{$row->id_employee}}</td>
	                        <td>{{$row->user_data->name}}</td>
	                        <td>{{$row->username}}</td>
	                        <td>{{$row->user_status->name}}</td>
	                        <td>{{$row->user_data->address}}</td>
	                        <td>{{$row->register_at}}</td>
	                        <td><img class="img-thumbnail" src="{{asset('demo/users/img-user-01.jpg')}}" style="width: 150px;height: 150px;margin-top: 10px"></td>
	                        <td>
	                        	<button class="btn btn-warning" title="Edit"><i class="di di-edit"></i></button>
	                        	<a href="{{url('deleteEmployees/'.$row->id_employee)}}"><button class="btn btn-danger" title="Delete"><i class="di di-trash"></i></button></a>
	                        </td>
	                    </tr>
	                	@endforeach
	                    <!-- <tr>
	                        <td>Tiger Nixon</td>
	                        <td>System Architect</td>
	                        <td>Edinburgh</td>
	                        <td>61</td>
	                        <td>2011/04/25</td>
	                        <td>$320,800</td>
	                    </tr> -->
	                </tbody>
	            </table>
			</div>
		</div>
	</div>
</div>
@endsection
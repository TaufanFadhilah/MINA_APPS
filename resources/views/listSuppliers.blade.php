@extends('template')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
                <h3 class="panel-title">List Suppliers</h3>
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
	                        <th>Telphone</th>
	                        <th>Address</th>
	                        <th>Email</th>
	                        <th>Photo</th>
	                        <th>Action</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	 @foreach($data as $row)
	                	 <tr>
	                	 	<td>{{$row->id_supplier}}</td>
	                	 	<td>{{$row->name}}</td>
	                	 	<td>{{$row->telp}}</td>
	                	 	<td>{{$row->address}}</td>
	                	 	<td>{{$row->email}}</td>
	                	 	<td><img src="{{asset('images/img/nestle.png')}}" class="img-thumbnail" style="max-height: 100px;max-width: 200px"></td>
	                	 	<td>
	                	 		<button class="btn btn-warning" title="Edit"><i class="di di-edit"></i></button>
	                        	<a href="{{url('deleteSuppliers/'.$row->id)}}"><button class="btn btn-danger" title="Delete"><i class="di di-trash"></i></button></a>
	                	 	</td>
	                	 </tr>
	                	 @endforeach
	                </tbody>
	            </table>
			</div>
		</div>
	</div>
</div>
@endsection
@extends('template')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
                <h3 class="panel-title">List Fishes</h3>
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
	                        <th>Desciption</th>
	                        <th>Price</th>
	                        <th>Photo</th>
	                        <th>Action</th>
	                    </tr>
	                </thead>
	                <tbody>
	                	 @foreach($data as $row)
	                	 <tr>
	                	 	<td>{{$row->id_fish_category}}</td>
	                	 	<td>{{$row->name}}</td>
	                	 	<td>{{$row->description}}</td>
	                	 	<td>Rp. {{$row->price}}</td>
	                	 	<td><img src="{{asset('images/img/fish.jpg')}}" class="img-thumbnail img-responsive" style="max-height: 100px;max-width: 200px"></td>
	                	 	<td>
	                	 		<button class="btn btn-warning" title="Edit"><i class="di di-edit"></i></button>
	                        	<a href="{{url('deleteFishes/'.$row->id_fish_category)}}"><button class="btn btn-danger" title="Delete"><i class="di di-trash"></i></button></a>
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
@extends('layouts.app')

@section('content')
@include('ticketit::shared.assets')
@include('ticketit::shared.errors')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form action="{{ asset('category') }}" method="POST" role="form">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">Category Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Input field">
					</div>
					

					<button type="submit" class="btn btn-primary pull-right">Submit</button>
				</form>
				<br><br><br>
				<div class="panel panel-primary">

		        			
		
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $category)
						<tr>
							<td style="vertical-align: middle">{{$category->name}}</td>
							<td style="vertical-align: middle">
								<a href="#" class="btn btn-info">Edit</a>
								<a href="#" class="btn btn-danger">Delete</a>
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
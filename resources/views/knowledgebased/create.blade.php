@extends('layouts.app')

@section('content')
@include('ticketit::shared.assets')
@include('ticketit::shared.errors')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				
				<form action="{{ asset('knowledgebase') }}" method="POST" role="form">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="category">Category</label>
						<select class="form-control" id="category" name="category">
						        @foreach($categories as $category)
						        	<option value="{{ $category->id }}">{{$category->name}}</option>
						        @endforeach
						 </select>
					</div>
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="body">Body</label>
						<textarea class="form-control summernote-editor" required id="body" name="body" rows="7"></textarea>
                                                                        <span class="help-block">{!! trans('ticketit::lang.create-ticket-describe-issue') !!}</span>
					</div>
                                                            

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				<div class="panel panel-primary">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Article Name</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					 @foreach($knowledgebases as $know)
						
						
						<tr>
							<td style="vertical-align: middle">{{$know->title}}</td>

							<td style="vertical-align: middle">{{$know->knowledge_base_category->name}}</td>
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
@section('footer')
    @include('ticketit::tickets.partials.summernote')
@append
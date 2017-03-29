@extends('layouts.app')

@section('content')
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
						<textarea class="form-control" id="body" name="body" rows="7"></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
	
@endsection
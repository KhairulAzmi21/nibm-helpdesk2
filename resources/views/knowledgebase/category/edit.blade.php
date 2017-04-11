@extends('layouts.app')

@section('content')
@include('ticketit::shared.assets')
@include('ticketit::shared.errors')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form action="{{ route('category.update', $category->id) }}" method="POST" role="form">
				<input type="hidden" name="_method" value="PUT">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="name">{{ trans('helpdesk.category-name')}}</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="{{ $category->name}}">
					</div>					
					<button type="submit" class="btn btn-primary pull-right">{{ trans('helpdesk.btn-update')}}</button>
				</form>								
			</div>
		</div>
	</div>
	
@endsection
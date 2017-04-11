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
						<label for="name">{{ trans('helpdesk.category-name')}}</label>
						<input type="text" class="form-control" id="name" name="name" >
					</div>
					

					<button type="submit" class="btn btn-primary pull-right">{{ trans('helpdesk.btn-submit')}}</button>
				</form>	
			</div>
		</div>
	</div>
	
@endsection
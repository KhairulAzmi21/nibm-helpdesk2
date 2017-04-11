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
						<label for="category">{{ trans('helpdesk.category_knowledge_base')}}</label>
						<select class="form-control" id="category" name="category">
						        @foreach($categories as $category)
						        	<option value="{{ $category->id }}">{{$category->name}}</option>
						        @endforeach
						 </select>
					</div>
					<div class="form-group">
						<label for="title">{{trans('helpdesk.title_knowledge_base') }}</label>
						<input type="text" class="form-control" id="title" name="title" >
					</div>
					<div class="form-group">
						<label for="body">{{trans('helpdesk.body')}}</label>
						<textarea class="form-control summernote-editor" required id="body" name="body" rows="7"></textarea>
                                                                        <span class="help-block">{!! trans('ticketit::lang.create-ticket-describe-issue') !!}</span>
					</div>
                                                            

					<button type="submit" class="btn btn-primary">{{trans('helpdesk.btn-submit')}}</button>
				</form>
				
			</div>
		</div>
	</div>
	
@endsection
@section('footer')
    @include('ticketit::tickets.partials.summernote')
@append
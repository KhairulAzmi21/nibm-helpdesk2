@extends('layouts.app')

@section('content')
@include('ticketit::shared.assets')
@include('ticketit::shared.errors')
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				
				<form action="{{ route('knowledgebase.update',$knowledgebase->id) }}" method="POST" role="form">
					{{ csrf_field() }}
					<input type="hidden" name="_method" value="PUT">
			
					<div class="form-group">
						<label for="knowledge_base_category_id">{{ trans('helpdesk.category_knowledge_base')}}</label>
						<select class="form-control" id="knowledge_base_category_id" name="knowledge_base_category_id">
						        @foreach($categories as $category)
						        	@if($category->id == $knowledgebase->knowledge_base_category_id)
						        	<option selected value="{{ $category->id }}">{{$category->name}}</option>
						        	@else
						        	<option value="{{ $category->id }}">{{$category->name}}</option>
						        	@endif
						        @endforeach
						 </select>
					</div>
					<div class="form-group">
						<label for="title">{{trans('helpdesk.title_knowledge_base') }}</label>
						<input type="text" class="form-control" id="title" name="title" value="{{ $knowledgebase->title }}">
					</div>
					<div class="form-group">
						<label for="body">{{trans('helpdesk.body')}}</label>
						<textarea class="form-control summernote-editor" required id="body" name="body"  rows="7">
							{{$knowledgebase->body}}
						</textarea>
                                                                        <span class="help-block">{!! trans('ticketit::lang.create-ticket-describe-issue') !!}</span>
					</div>
                                                            

					<button type="submit" class="btn btn-primary">{{trans('helpdesk.btn-update')}}</button>
				</form>
				
			</div>
		</div>
	</div>
	
@endsection
@section('footer')
    @include('ticketit::tickets.partials.summernote')
@append
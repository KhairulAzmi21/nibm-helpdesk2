@extends('layouts.app')

@section('content')
@include('ticketit::shared.assets')
@include('ticketit::shared.errors')
	<div class="container">
		<div class="row">
		    <div class="col-md-12">
		    	<h1>{{ $knowledgebase->title }}</h1>
		    	<small>{{ trans('helpdesk.created_at')}} <em> {{ $knowledgebase->created_at }} </em> </small>
			<hr>
			<p> {!! $knowledgebase->body !!}  </p>
			<hr>
			
		     </div>			
                         </div>
	</div>
@endsection
@section('footer')
    @include('ticketit::tickets.partials.summernote')
@append
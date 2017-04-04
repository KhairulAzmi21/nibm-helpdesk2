@extends('layouts.app3')

@section('content')
@include('ticketit::shared.assets')
@include('ticketit::shared.errors')
	<div class="container">
		<div class="row">
		    <div class="col-md-10">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title">{{ $knowledgebase->title }}</h3>
			  </div>
			  <div class="panel-body">
			    {!! $knowledgebase->body !!} 
			 </div>
			</div>
		     </div>
			
                         </div>
	</div>
@endsection
@section('footer')
    @include('ticketit::tickets.partials.summernote')
@append
@extends('layouts.app')

@section('content')
@include('ticketit::shared.assets')
@include('ticketit::shared.errors')
	<div class="container">
		<div class="row">

			<h1> {{ $knowledgebase->title }}</h1>
			<p> {!! $knowledgebase->body !!} </p>
                         </div>
	</div>
@endsection
@section('footer')
    @include('ticketit::tickets.partials.summernote')
@append
@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">

			<h1> {{ $knowledgebase->title }}</h1>
			<p> {{ $knowledgebase->body }} </p>
                         </div>
	</div>
@endsection
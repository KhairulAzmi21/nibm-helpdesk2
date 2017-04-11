@extends('layouts.app')

@section('content')
@include('ticketit::shared.assets')
@include('ticketit::shared.errors')
	  @if(Auth::guest())
	  <div class="jumbotron" >
		  <div class="container">
		    <h1>{{ trans('helpdesk.knowledgebase')}}</h1>      
		    <p>{{ trans('helpdesk.header')}}</p>
		   </div>
	  </div>
	  @endif
     
	<div class="container">
		<div class="row">
			<div class="col-md-8">			   
		                <!-- Search Knowledge Based-->
		                <div class="well">		


		                    <div class="input-group">
		                        <input id="tags" type="text" class="form-control" placeholder="{{ trans('helpdesk.search-knowledge-base')}}">
		                        <span class="input-group-btn">
		                            <button class="btn btn-default" type="button">
		                                <span class="fa fa-search"></span>
		                        </button>
		                        </span>
		                    </div>
		                    <!-- /.input-group -->
		                </div>
		                @if (!Auth::guest())
				
		                	<a href="{{route('category.index') }}" class="btn btn-success">{{ trans('helpdesk.category_knowledge_base') }}</a> 
		                	@if($categories->isNotEmpty())
		                	<a href="{{ route('knowledgebase.index') }}" class="btn btn-primary ">{{ trans('helpdesk.knowledgebase')}}</a>
		                	@endif

		                @endif
		                <!-- Knowledge Based Archive -->
			        <div class="row">
			            <div class="col-lg-12">
			                <h1 class="page-header">
			                    {{trans('helpdesk.archive')}}
			                </h1>
			            </div>
			            

			 
			           
			        </div>
			        <!-- /.row -->

			        @foreach($categories as $category)
			        	
			        	<div class="panel-group">
				    <div class="panel panel-primary">
				      <div class="panel-heading">
				        <h4 class="panel-title">
				         <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$category->id}}" aria-expanded="true" aria-controls="collapseOne">
				          {{ $category->name }} <i class="fa fa-sort-desc pull-right" aria-hidden="true"></i>
				        </a>
				        </h4>

				      </div>
				      
				      <div id="collapse{{$category->id}}" class="panel-collapse collapse">
				        <ul class="list-group">
				         @if($category->knowledge_base->isNotEmpty())
				        @foreach($category->knowledge_base as $article)
				        	  <li class="list-group-item"><a href="/knowledgebase/{{ $article->id }} ">{{ $article->title}}</a></li>      
			                      @endforeach
			                      @else
			                          <li class="list-group-item">NO ARTICLE FOR THIS CATEGORY</li>    
			                      @endif
				        </ul> 
				      </div>
				    
				    </div>
				</div>
				
				@endforeach
				
		             </div>
		             <!-- Blog Categories Well -->
		             <div class="col-lg-4">
{{-- 		             	<h2>Article</h2>
		                            <ul class="list-unstyled">
		                                @foreach($categories as $category)
 		                                @foreach($category->knowledge_based as $article)
 			                                <li><a href="/knowledgebase/{{ $article->id }} ">{{ $article->title}}</a></li>
 			                     @endforeach
 			                 @endforeach
		                                
		                            </ul> --}}
		                        </div>		      
		             </div>
		             <!-- /.row -->
                </div>
	</div>
@stop
@section('search')
	
	  <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	  <script>
	  $( function() {
	    
	    $( "#tags" ).autocomplete({
	      source: "search/autocomplete",
		  minLength: 1,
		  select: function(event, ui) {
		  	
		  	window.location.href = "knowledgebase/"+ui.item.id;
		  }
	    });
	  } );
	  </script>
@endsection
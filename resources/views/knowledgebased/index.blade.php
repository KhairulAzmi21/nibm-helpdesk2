@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">

			<div class="col-md-8">
			    <h2>Knowledge Based</h2>
		                <!-- Search Knowledge Based-->
		                <div class="well">		  
		                    <div class="input-group">
		                        <input type="text" class="form-control" placeholder="Search Knowledge Based">
		                        <span class="input-group-btn">
		                            <button class="btn btn-default" type="button">
		                                <span class="glyphicon glyphicon-search"></span>
		                        </button>
		                        </span>
		                    </div>
		                    <!-- /.input-group -->
		                </div>
		                @if (!Auth::guest())
				
		                	<a href="{{asset('category/create') }}" class="btn btn-success">Create New Category</a> 
		                	@if($categories->isNotEmpty())
		                	<a href="{{asset('knowledgebase/create') }}" class="btn btn-primary ">Create New KB</a>
		                	@endif

		                @endif
		                <!-- Knowledge Based Archive -->
			        <div class="row">
			            <div class="col-lg-12">
			                <h1 class="page-header">
			                    Knowledge Based Archives
			                </h1>
			            </div>
			            

			 
			           
			        </div>
			        <!-- /.row -->
				@foreach($categories as $category)
				  
				   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingOne">
				      <h4 class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$category->id}}" aria-expanded="true" aria-controls="collapseOne">
				          {{ $category->name }}
				        </a>
				      </h4>
				    </div>
				    <div id="collapse{{$category->id}}" class="panel-collapse collapse out" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				          @foreach($category->knowledge_based as $article)
			                                <li><a href="/knowledgebase/{{ $article->id }} ">{{ $article->title}}</a></li>
			                      @endforeach
				      </div>
				    </div>
				  </div>
				</div>
				
				@endforeach
		             </div>
		             <!-- Blog Categories Well -->
		             <div class="col-lg-4">
		             	<h2>Article</h2>
		                            <ul class="list-unstyled">
		                                @foreach($categories as $category)
 		                                @foreach($category->knowledge_based as $article)
 			                                <li><a href="/knowledgebase/{{ $article->id }} ">{{ $article->title}}</a></li>
 			                     @endforeach
 			                 @endforeach
		                                
		                            </ul>
		                        </div>		      
		             </div>
		             <!-- /.row -->
                </div>
	</div>
@endsection
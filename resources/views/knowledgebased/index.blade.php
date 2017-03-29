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
		                <a href="{{asset('knowledgebase/create') }}" class="btn btn-primary pull-right">Create New KB</a>
		                @endif
		                <!-- Knowledge Based Archive -->
			        <div class="row">
			            <div class="col-lg-12">
			                <h1 class="page-header">
			                    Knowledge Based Archives
			                </h1>
			            </div>

			            @foreach($categories as $category)
			            <div class="col-md-4">
			                <div class="panel panel-default">
			                    <div class="panel-heading">
			                        <h4><i class="fa fa-fw fa-check"></i>{{ $category->name }}</h4>
			                    </div>
			                    
			                    <div class="panel-body">
			                       <ul class="list-unstyled">
			                       	       @foreach($category->knowledge_based as $article)
			                                <li><a href="/knowledgebase/{{ $article->id }} ">{{ $article->title}}</a></li>
			                                @endforeach
			                               
		                                     </ul>
			                    </div>
			                </div>
			            </div>
			            @endforeach
			           
			        </div>
			        <!-- /.row -->

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
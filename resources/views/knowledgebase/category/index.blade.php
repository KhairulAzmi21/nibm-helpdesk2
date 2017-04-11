@extends('layouts.app')

@section('content')
@include('ticketit::shared.assets')
@include('ticketit::shared.errors')

		<div class="panel panel-default">
			<div class="panel-heading">
			<h2>
			LIST CATEGORY
			<a href="{{ route('category.create') }}" class="btn btn-success pull-right">Create New Article</a>
			</h2>
			</div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $category)
						<tr>
							<td style="vertical-align: middle">{{$category->name}}</td>
							<td style="vertical-align: middle">
								{!! link_to_route(
				                                                    'category.edit', trans('ticketit::admin.btn-edit'), $category->id,
				                                                    ['class' => 'btn btn-info'] )
			                                			!!}

			                                			{!! link_to_route(
					                                                    'category.destroy', trans('ticketit::admin.btn-delete'), $category->id,
					                                                    [
					                                                    'class' => 'btn btn-danger deleteit',
					                                                    'form' => "delete-$category->id",
					                                                    "node" => $category->name
					                                                    ])
					                                !!}
						                            {!! CollectiveForm::open([
						                                            'method' => 'DELETE',
						                                            'route' => [
						                                                        'category.destroy',
						                                                        $category->id
						                                                        ],
						                                            'id' => "delete-$category->id"
						                                            ])
						                            !!}
						                            {!! CollectiveForm::close() !!}
								
							</td>
						</tr>
						
						@endforeach
					</tbody>
				</table>
				
				</div>
		
	
@stop
@section('search')
    <script>
        $( ".deleteit" ).click(function( event ) {
            event.preventDefault();
            if (confirm("{!! trans('ticketit::admin.priority-index-js-delete') !!}" + $(this).attr("node") + " ?"))
            {
                $form = $(this).attr("form");
                $("#" + $form).submit();
            }

        });
    </script>
@append

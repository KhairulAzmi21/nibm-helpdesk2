@extends('layouts.app')

@section('content')
@include('ticketit::shared.assets')
@include('ticketit::shared.errors')

	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>
			{{ trans('helpdesk.list_knowledge_base') }}
			<a href="{{ route('knowledgebase.create') }}" class="btn btn-success pull-right">{{ trans('helpdesk.create_new_knowledge_based') }}</a>
			</h2>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>{{ trans('helpdesk.title_knowledge_base') }}</th>
					<th>{{ trans('helpdesk.category_knowledge_base') }}</th>
					<th>{{ trans('helpdesk.action') }}</th>
				</tr>
			</thead>
			<tbody>
				@foreach($knowledgebases as $know)
				
				
				<tr>
					<td style="vertical-align: middle">{{$know->title}}</td>

					<td style="vertical-align: middle">
					{{ $know->knowledge_base_category->name or '' }}
					</td>
					<td style="vertical-align: middle">
					{!! link_to_route(
	                                                    'knowledgebase.show', trans('helpdesk.view') , $know->id,
	                                                    ['class' => 'btn btn-primary'] )
                                			!!}
					{!! link_to_route(
	                                                    'knowledgebase.edit', trans('helpdesk.edit'), $know->id,
	                                                    ['class' => 'btn btn-info'] )
                                			!!}

                                			{!! link_to_route(
		                                                    'knowledgebase.destroy', trans('helpdesk.delete'), $know->id,
		                                                    [
		                                                    'class' => 'btn btn-danger deleteit',
		                                                    'form' => "delete-$know->id",
		                                                    "node" => $know->title
		                                                    ])
		                                !!}
			                            {!! CollectiveForm::open([
			                                            'method' => 'DELETE',
			                                            'route' => [
			                                                        'knowledgebase.destroy',
			                                                        $know->id
			                                                        ],
			                                            'id' => "delete-$know->id"
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

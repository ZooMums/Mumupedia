@extends("_layouts/template")


@section('content')

<div class="panel panel-primary">
	<div class="panel-heading">Edit {{ ($data-> 'title' ) }}</div>
	<div class="panel-body">

	{{ Form::model($data, array('route' => array('/articles/update', $data->id), 'method' => 'PUT')) }}

	<div class="form-group">
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('descrition', 'Descrition') }}
		{{ Form::text('descrition', null, array('class' => 'form-control')) }}
	</div>

	<div class="form-group">
		{{ Form::label('content', 'Content') }}
		{{ Form::textarea('content', array('class' => 'form-control')) }}
	</div>
	{{ Form::submit('Edit the post! ', array('class' => 'btn btn-success')) }}
	<a href="{{ URL::to('/articles') }}" class="btn btn-danger">Retour</a>
	{{ Form::close() }}
</div>	
		
@stop

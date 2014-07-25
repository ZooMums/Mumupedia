@extends("_layouts/template")


@section('content')

<div class="panel panel-primary">
		<div class="panel-heading">New post</div>
		<div class="panel-body">

			{{ Form::open(array('url' => '/articles')) }}

				<div class="form-group">
					{{ Form::label('title', 'Title') }}
					{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
				</div>
				<div>
					{{ Form::label('description', 'Description') }}
					{{ Form::text('description', Input::old('description'), array('class' => 'form-control')) }}
				</div>
				<div>
					{{ Form::label('content', 'Content') }}
					{{ Form::textarea('content', Input::old('content'), array('class' => 'form-control')) }}
				</div><br><br>
				{{ Form::submit('Send post', array('class' => 'btn btn-success')) }}
				<a href="{{ URL::to('/articles') }}" class="btn btn-danger">Retour</a>
				{{ Form::close() }}
		</div>
</div>
@stop
				
				
@extends("_layouts/template")


@section('content')

<div class="panel panel-primary">
		<div class="panel-heading">Are you sure?</div>
		<div class="panel-body">

			<form action="{{ (action('ArticlesController@delete') }}" method="post" role="form">
				<input type="hidden" name="article" value="{{ (article->id) }}"/>			
				<input type="submit" class="btn btn-success"value="Yes"/>
				<a href=" {{ (action('ArticlesController@index') }}" class="btn btn-danger">No</a>
			</form>     	
		</div>
</div>			
@stop
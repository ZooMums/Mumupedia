@extends("_layouts/template")


@section('content')

	<a href="{{ URL::to('/articles') }}" class="btn btn-default">Retour</a><br/><br/>

	<div class="panel panel-primary">
		<div class="panel-heading">{{ $article->title }}</div>

		<div class="panel-body">
			<h2>Description</h2>
			<p>{{{ $article->description }}}</p>
			<hr/>
			<h2>Article</h2>
			<p>{{{ $article->content }}}</p>
			<hr/>
			<h2>Stats</h2>
			<p>Vu {{ $article->seen }} fois</p>
		</div>

	</div>
	
@stop


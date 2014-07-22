@extends("_layouts/template")


@section('content')


	<div class="panel panel-primary">
		<div class="panel-heading">Articles</div>
		<div class="panel-body">
			<p>Voici la liste des articles les plus populaires mis en ligne</p>
		</div>
<a href="{{ URL::to('/articles/create') }}" class="btn btn-default btn-lg glyphicon glyphicon-plus">Add</a>

		<table class="table table-striped table-bordered table-hover table-condensed">

		<tr><br><br>
			<th>ID</th>
			<th>Titre</th>
			<th>Description</th>
			<th>Catégorie</th>
			<th>Date de création</th>
			<th>Vu</th>
		</tr>

		@foreach ( $articles as $article )

			<tr>
				<td>{{ $article->id }}</td>		
				<td><a href="{{ URL::to( '/articles/' . $article->id ) }}">{{ $article->title }}</a></td>		
				<td>{{ Str::words( $article->description , 15 ) }}</td>		
				<td>{{ $article->category->name }}</td>		
				<td>{{ $article->created_at }}</td>		
				<td>{{ $article->seen }}</td>		
			</tr>

		@endforeach

		</table>

	</div>
@stop


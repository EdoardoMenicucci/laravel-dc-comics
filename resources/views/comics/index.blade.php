@extends('layouts.app')

@section('content')
	@foreach ($comicslist as $comic)
		<a href="/comics/{{ $comic->id }}">
			<li>{{ $comic->title }}</li>
		</a>
	@endforeach
@endsection

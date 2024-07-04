@extends('layouts.app')

@section('content')
	@foreach ($comicslist as $comic)
		<li>{{ $comic->name }}</li>
	@endforeach
@endsection

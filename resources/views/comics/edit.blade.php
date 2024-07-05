@extends('layouts.app')

@section('content')
	<form method="POST" action="{{ route('comics.update', $comic->id) }}">
		<h3>Stai modificando: {{ $comic->title }}</h3>
		@method('PUT')
		@csrf
		<input type="text" name="title" id="title" placeholder="titolo" value="{{ $comic->title }}">
		<input type="text" name="description" id="description" placeholder="descrizione" value="{{ $comic->description }}">
		<input type="text" name="price" id="price" placeholder="prezzo" value="{{ $comic->price }}">
		<input type="text" name="series" id="series" placeholder="serie" value="{{ $comic->series }}">
		<input type="text" name="type" id="type" placeholder="tipo di libro" value="{{ $comic->type }}">
		<button type="submit">Invia!</button>
	</form>
@endsection

{{--  action="{{ route('comics.update') }}" --}}

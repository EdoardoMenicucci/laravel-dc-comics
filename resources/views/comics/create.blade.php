@extends('layouts.app')

@section('content')
	<form method="POST" action="{{ route('comics.store') }}">
		@csrf
		<input type="text" name="title" id="title" placeholder="titolo" required>
		<input type="text" name="description" id="description" placeholder="descrizione" required>
		<input type="text" name="price" id="price" placeholder="prezzo" required>
		<input type="text" name="serie" id="serie" placeholder="serie" required>
		<input type="text" name="type" id="type" placeholder="tipo di libro" required>
		<button type="submit">Invia!</button>
	</form>
@endsection

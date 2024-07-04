@extends('layouts.app')

@section('content')
	<form action="POST">
		<input type="text" name="title" id="title" placeholder="titolo">
		<input type="text" name="description" id="description" placeholder="descrizione">
		<input type="text" name="price" id="price" placeholder="prezzo">
		<input type="text" name="serie" id="serie" placeholder="serie">
		<input type="text" name="type" id="type" placeholder="tipo di libro">
		<button type="submit">Invia!</button>
	</form>
@endsection

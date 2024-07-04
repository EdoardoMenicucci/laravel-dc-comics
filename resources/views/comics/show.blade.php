@extends('layouts.app')

@section('content')
	<h1>{{ $comic->title }}</h1><br>
	<div>Descrizione: <br>{{ $comic->description }}</div>
	<div>Prezzo: {{ $comic->price }}</div>
	<div>Serie: {{ $comic->series }}</div>
	<div>Data di vendita: {{ $comic->sale_date }}</div>
	<div>Tipo di libro: {{ $comic->type }}</div>
@endsection

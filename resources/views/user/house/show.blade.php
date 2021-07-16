@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1>DETTAGLI CASA</h1>
    <a href="http://localhost:8000/house">Visualizza risultato finale</a><br>
    <a href="{{ route('user.house.edit', $id ='0') }}">Modifica casa</a><br>
    <a href="{{ route('user.message.show', $id ='0') }}">messaggi casa</a><br>
    <a href="{{ route('user.sponsor') }}">sponsorizza</a>
    <h2>Statistiche...</h2>
 
</div>
@endsection
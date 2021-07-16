@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1>PAGINA INDEX CASE DI USER</h1>
    <ul>
        <li>
            <p>casa</p><br>
            <a href="http://localhost:8000/house">Visualizza come guest</a><br>
            <a href="{{ route('user.house.show', $id ='0') }}">Vedi casa</a> <br>
            <a href="{{ route('user.house.edit', $id ='0') }}">Gestisci(edit)</a> <br>
            <a href="{{ route('user.sponsor') }}">sponsorizza</a>
        </li>
    </ul>
</div>
@endsection
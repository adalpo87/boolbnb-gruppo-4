@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1>PAGINA INDEX CASE DI USER</h1>
    <ul>
        <li>
            <p>casa</p>
            <a href="">show</a>
            <a href="{{ route('user.house.edit') }}">Gestisci(edit)</a> 
            <a href="{{ route('user.sponsor') }}">sponsorizza</a>
        </li>
    </ul>
</div>
@endsection
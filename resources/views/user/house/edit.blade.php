@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1>PAGINA EDIT</h1>
    <h1>CASA 1</h1>
    <a href="">show</a>
    <a href="">statistiche</a>
    <a href="{{ route('user.message.show') }}">messaggi</a>
    <a href="{{ route('user.sponsor') }}">sponsorizza</a>

</div>
@endsection
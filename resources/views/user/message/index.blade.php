@extends('layouts.app')

@section('content')
<div class="container">
    
    <h1>Visualizza tutti i messaggi</h1>
    <a href="{{ route('user.message.show', $id ='0') }}">Vedi messaggio</a> 
</div>
@endsection
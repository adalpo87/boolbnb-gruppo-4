@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="#">{{ __('Dashboard') }}</a></div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <ul>
                            <li class="mb-2">
                                <a class="btn btn-dark" href="{{ route('user.house.create') }}">Inserisci una nuova casa</a>
                            </li>
                            <li class="mb-2">
                                <a class="btn btn-dark" href="{{ route('user.house.index') }}">Visualizza le tue case</a>
                            </li>
                            <li class="mb-2">
                                <a class="btn btn-dark" href="{{ route('user.message.index') }}">Vedi messaggi</a>
                            </li>
                            <li class="mb-2">
                                <a class="btn btn-dark" href="{{ route('user.sponsor') }}">Sponsor</a>
                            </li>
                            
                        </ul>
                    </div>

                </div>  
                
            </div>
        </div>
    </div>

</div>
@endsection

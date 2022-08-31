@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <tr> 
            <th>Mannschaft 1</th> <th>Mannschaft 2</th> <th>Gruppe</th> <th>Spielzeit</th> <th>Stadion</th> <th>Endstand</th> 
        </tr>
        
        @foreach($spiele as $game)
            <tr> 
                <td>{{ $game->gibHeimTeam->teamname }} <img src=" {{ $game->gibHeimTeam->image }} " /></td> 
                <td>{{ $game->gibGastTeam->teamname }} <img src=" {{ $game->gibHeimTeam->image }} " /></td> 
                <td>{{ $game->gibHeimTeam->group }}</td> 
                <td>{{ $game->spielzeit }}</td> 
                <td>{{ $game->spielort }}</td> 
                <td>{{ $game->gibHeimTeam->kuerzel }} {{ $game->tore_heim }} : {{ $game->tore_gast }} {{ $game->gibGastTeam->kuerzel }}</td> 
            </tr>
        @endforeach
    </table>

</div>
@endsection

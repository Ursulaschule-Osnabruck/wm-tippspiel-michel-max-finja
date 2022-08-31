@extends('layouts.app')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Übersicht</h1>
            <ol class="breadcrumb mb-4">
                
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Tipps abgeben</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Zeige Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">Sondertipps</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">Zeige Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Tabelle</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('tabelle')}}">Zeige Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <div class="card-body">Spielregeln</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="{{url('regeln')}}">Zeige Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
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
    </main>


@endsection

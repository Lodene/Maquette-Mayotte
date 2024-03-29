@extends('layouts.app')
@section('title', 'Liste des demandes')
@section('content')
    <div class="header" style="background-color:transparent;">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-row pull-left">
                    <div class="p-1 bd-highlight">
                        <p>
                            Tableau de toutes les demandes
                        </p>
                    </div>
                </div>
                <div class="d-flex flex-row pull-right">
                    <div class="p-1 bd-highlight">
                        <a href="#" class="btn btn-success" style="height:33px;">Export XLS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped m-table table-hover" id="table">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Date de la demande</th>
                        <th>Gestionnaire</th>
                        <th>Etablissement</th>
                        <th>Libellé</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $exemple)
                    <?php 
                        if($exemple['STATUT'] != "A traiter") {
                            continue;
                        }
                        if ($exemple['STATUT'] == "En cours"){
                            $action = false;
                        } else {
                            $action = true;
                        }
                    ?>
                    {{-- {{ dd($exemple['Date_de_creation'])}} --}}
                        <tr>
                            <th>{{ $exemple['Id'] }}</th>
                            <th>{{ $exemple['DATE DE EXPRESSION DU BESOIN'] }}</th>
                            <th>{{ $exemple['RRM'] }}</th>
                            <th>{{ $exemple['ETABLISSEMENT'] }}</th>
                            <th>{{ $exemple['EXPRESSION DU BESOIN'] }}</th>
                            <th>{{ $exemple['STATUT']  }}</th>
                            <th>{!! $action ? '<i class="fas fa-edit"></i>' : '<i class="fas fa-eye"></i>'!!}</i></th>
                        </tr>
                    @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection

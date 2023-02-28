@extends('layouts.app')
@section('title', 'Liste des demandes')
@section('content')
    <div class="header" style="background-color:transparent;">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-row pull-left">
                    <div class="p-1 bd-highlight">
                        <p>
                            Tableau de toutes les nouvelles demandes
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
                        <th>Id</th>
                        <th>Date de la demande</th>
                        <th>Gestionnaire</th>
                        <th>RDD</th>
                        <th>Etablissement</th>
                        <th>Libellé</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $exemple)
                    <?php
                    if($exemple['Statut'] == "Terminé" || $exemple['Statut'] == "A traiter") {
                        continue;
                    }
                    ?>
                    {{-- {{ dd($exemple['Date_de_creation'])}} --}}
                        <tr>
                            <th>{{ $exemple['Id'] }}</th>
                            <th>{{ $exemple['Date'] }}</th>
                            <th>{{ $exemple['Gestionnaire'] }}</th>
                            <th>{{ $exemple['Rdd'] }}</th>
                            <th>{{ $exemple['Etablissement'] }}</th>
                            <th>{{ $exemple['Description_de_la_demande'] }}</th>
                            <th>{{ $exemple['Statut']  }}</th>
                            <th><a href="/Demande/{{$exemple['Id']}}"><i class="fas fa-edit"></i></a></th>
                        </tr>
                    @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>


    <div class="header" style="background-color:transparent;">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-row pull-left">
                    <div class="p-1 bd-highlight">
                        <p>
                            Tableau de toutes les anciennes demandes
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
                        <th>Id</th>
                        <th>Date de la demande</th>
                        <th>Gestionnaire</th>
                        <th>RDD</th>
                        <th>Etablissement</th>
                        <th>Libellé</th>
                        <th>Status</th>
                        <th>Priorité</th>
                        <th>Budget</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $exemple)
                    <?php
                    if($exemple['Statut'] != "Terminé") {
                        continue;
                    }
                    ?>
                    {{-- {{ dd($exemple['Date_de_creation'])}} --}}
                        <tr>
                            <th>{{ $exemple['Id'] }}</th>
                            <th>{{ $exemple['Date'] }}</th>
                            <th>{{ $exemple['Gestionnaire'] }}</th>
                            <th>{{ $exemple['Rdd'] }}</th>
                            <th>{{ $exemple['Etablissement'] }}</th>
                            <th>{{ $exemple['Description_de_la_demande']  }}</th>
                            <th>{{ $exemple['Statut']  }}</th>
                            <th>{{ $exemple['Note']  }}</th>
                            <th>{{ $exemple['Cout_total']  }}</th>
                            <th><i class="fas fa-eye"></i></th>
                        </tr>
                    @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
    
@endsection

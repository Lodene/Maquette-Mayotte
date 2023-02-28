@extends('layouts.app')
@section('title', 'Formulaire de Demande')
@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column content-center">
    <div class="header">
        <p>Nouvelle Demande</p>
    </div>
    {{-- <div class="">{{dd($data)}} --}}
    <div class="row">
        <div class="col-md-4">
            <div class="form-group mt-4">
                <div class="">
                    <div> <label for="besoin">Date de la demande : </label> </div>
                    <div> <input type="text" class="form-control" name="besoin" id="besoin" value={{ $data['Date']}}> </div>
                </div>
            </div>
            <div class="form-group mt-4">
                <div class="">
                    <div> <label for="besoin">Statut : </label> </div>
                    <div> <input type="text" class="form-control" name="besoin" id="besoin" value={{ $data['Statut']}}> </div>
                </div>
            </div>
            <div class="form-group mt-4">
                <div class="">
                    <div> <label for="besoin">Expression du besoin : </label> </div>
                    <div> <input type="text" class="form-control" name="besoin" id="besoin" value={{ $data['Description_de_la_demande']}}> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group mt-4">
                <div class="">
                    <div> <label for="besoin">Affectation: </label> </div>
                    <div> <input type="text" class="form-control" name="besoin" id="besoin" value={{ $data['Type_de_maintenance']}}> </div>
                </div>
            </div>
            <div class="form-group mt-4">
                <div class="">
                    <div> <label for="besoin">Observation : </label> </div>
                    <div> <input type="text" class="form-control" name="besoin" id="besoin" value={{ $data['Numéro_de_devis']}}> </div>
                </div>
            </div>
            <div class="form-group mt-4">
                <div class="">
                    <div> <label for="besoin">RRM : </label> </div>
                    <div> <input type="text" class="form-control" name="besoin" id="besoin" value={{ $data['RRM']}}> </div>
                </div>
            </div>
        </div>
            
        <div class="col-md-12 mt-5">
            <h2>Priorité</h2>
        </div>
        <div class="col-md-4">
            <div class="form-group mt-4">
                <div class="">
                    <div> <label for="besoin">Maintenance curative : </label> </div>
                    <div> <input type="number" class="form-control" name="besoin" id="besoin"> </div>
                </div>
            </div>
            <div class="form-group mt-4">
                <div class="">
                    <div> <label for="besoin">Politique : </label> </div>
                    <div> <input type="number" class="form-control" name="besoin" id="besoin"> </div>
                </div>
            </div>
            <div class="form-group mt-4">
                <div class="">
                    <div> <label for="besoin">Sécurité/ Réglementaire : </label> </div>
                    <div> <input type="number" class="form-control" name="besoin" id="besoin"> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group mt-4">
                <div class="">
                    <div> <label for="besoin">Sûreté : </label> </div>
                    <div> <input type="number" class="form-control" name="besoin" id="besoin"> </div>
                </div>
            </div>
            <div class="form-group mt-4">
                <div class="">
                    <div> <label for="besoin">Aménagement Fonctionnel : </label> </div>
                    <div> <input type="number" class="form-control" name="besoin" id="besoin"> </div>
                </div>
            </div>
            <div class="form-group mt-4">
                <div class="">
                    <div> <label for="besoin">Amélioration Conditions travail hygiène : </label> </div>
                    <div> <input type="number" class="form-control" name="besoin" id="besoin"> </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group mt-4">
                <div class="">
                    <div> <label for="besoin">Carte de formation : </label> </div>
                    <div> <input type="number" class="form-control" name="besoin" id="besoin"> </div>
                </div>
            </div>
            <div class="form-group mt-4">
                <div class="">
                    <div> <label for="besoin">Confort : </label> </div>
                    <div> <input type="number" class="form-control" name="besoin" id="besoin"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-5">
        <button type="submit" class="btn btn-primary">Valider</button>
    </div>
    </div>
</div>
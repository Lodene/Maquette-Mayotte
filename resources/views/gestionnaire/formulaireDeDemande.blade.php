@extends('layouts.app')
@section('title', 'Formulaire Nouvelle Demande')
@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column content-center">
    <div class="header">
        <p>Nouvelle Demande</p>
    </div>
    <div class="">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <div class="">
                        <div> <label for="besoin">Expression du besoin : </label> </div>
                        <div> <input type="text" class="form-control" name="besoin" id="besoin"> </div>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <div class="">
                        <div> <label for="test">Etablissement :</label> </div>
                        <div> 
                            <select name="etablissement" id="etablissement" class="form-control" disabled>
                                <option value="1" selected>LPO DEMBENI (zone Sud)</option>
                                <option value="2" >Autre zone</option>
                            </select> 
                        </div>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <div class="">
                        <div> <label for="test">Zone :</label> </div>
                        <div> 
                            <select name="etablissement" id="etablissement" class="form-control" disabled>
                                <option value="1" selected>Sud</option>
                                <option value="2" >Nord</option>
                            </select> 
                        </div>
                    </div>
                </div>
            </div>                      
            <div class="col-md-4">
                <div class="form-group">
                    <label for="input-message">Précision :</label>
                    <textarea class="form-control" class="form-control" id="input-message" rows="2"></textarea>
                </div>
            </div>
                    
            <div class="col-md-12 mt-5">
                <button type="submit" class="btn btn-primary">Valider</button>
                <a href="#"  class="btn btn-primary">Laisser comme brouillon</a>
            </div>
            </div>
        </div>
    </div>
</div>
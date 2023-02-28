@extends('layouts.app')
@section('title', 'Menu admin')
@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column content-center" style="margin-top: 100px">
    <h2>Menu Admin</h2>
    {{-- {{dd($datas)}} --}}
    <div class="mt-3">
        <p class="" style="align-item: center">Zone : </p>
        <div class="d-flex ml-5 mt-3">
            @foreach ($datas as $data)
                <p class="mr-1">{{$data['Zone']}}</p>
                <a href="#"><i class="fas fa-trash-alt mr-5"></i></a>
                <?php break ?>
            @endforeach
        </div>
        <div class="d-flex">
            <input type="text" class="form-control" placeholder="Ajouter un élément" style="width: 150px">
            <button type="submit" class="btn btn-primary">Valider</button>
        </div>
    </div>
    <div class="mt-3">
        <p class="">Etablissement :</p>
        <div class="d-flex ml-5">
            @foreach ($datas as $data)
                <p class="mr-1">{{$data['Etablissement']}}</p>
                <a href="#"><i class="fas fa-trash-alt mr-5"></i></a>
                <?php break ?>
            @endforeach
        </div>
        <div class="d-flex">
            <input type="text" class="form-control" placeholder="Ajouter un élément" style="width: 150px">
            <button type="submit" class="btn btn-primary">Valider</button>
        </div>
    </div>
    <div class="mt-3">
        <p class="">Type d'intervention :</p>
        <div class="d-flex ml-5">
            @foreach ($datas as $data)
                <p class="mr-1">{{$data['Type_intervention']}}</p>
                <a href="#"><i class="fas fa-trash-alt mr-5"></i></a>
                <?php break ?>
            @endforeach
        </div>
        <div class="d-flex">
            <input type="text" class="form-control" placeholder="Ajouter un élément" style="width: 150px">
            <button type="submit" class="btn btn-primary">Valider</button>
        </div>
    </div>
    
    
    
      
</div>
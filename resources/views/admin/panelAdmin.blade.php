@extends('layouts.app')
@section('title', 'panelAdmin')
@section('content')
{{-- {{dd($datas)}} --}}
    <div class="header" id="myHeader">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-row">
                    <div class="p-2 bd-highlight">
                        <a href="/addRole" 
                            class="btn btn-sm btn-success m-btn m-btn--icon m-btn--wide  m--margin-right-10">
                            <span>
                                <i class="fa fa-plus mr-2"></i>
                                <span>Ajouter un role à un Utilisateur</span>
                            </span> 
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped m-table table-hover table-sm" id="type_piece_jointes_table">
                    <thead>
                    <tr class="">
                        <th>id</th>
                        <th>Utlisateur</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($datas as $usr)
                        {{$roles = $usr->getRoleNames();}}
                        @foreach ($roles as $role) 
                            <tr class="">
                                <th>{{$usr->id}}</th>
                                <th>{{$usr->name}}</th>
                                <th>{{$role}}</th>
                                <th><i class="fas fa-trash-alt" style="color: red"></i></th>
                            </tr>
                        
                        @endforeach
                    @endforeach
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')
@section('title', 'panelAdmin')
@section('content')
{{-- {{dd($datas)}} --}}
    <div class="header" id="myHeader">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-row">
                    <div class="p-2 bd-highlight">
                        <a href="/addRole" id="AddRole" 
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
            <div class="table-responsive ms-5">
                <table class="table table-striped m-table table-hover table-sm" id="type_piece_jointes_table">
                    <thead>
                        <tr class="">
                            <th>id</th>
                            <th>Utilisateur</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($datas as $usr)
                            <?php $roles = $usr->getRoleNames(); ?>
                            @foreach ($roles as $key=>$role) 
                            
                                <tr class="attributes">
                                    <th>{{$usr->id}}</th>
                                    <th>{{$usr->name}}</th>
                                    <th>{{$role}}</th>
                                    <th><a id="btn{{$usr->id}}" href="{{route('delRole', ['user_id' => $usr->id, 'role' => $role]) }}"><i class="fas fa-trash-alt" style="color: red"></i></a></th>
                                </tr>
                            @endforeach
                        @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection
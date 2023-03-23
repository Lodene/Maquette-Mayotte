@extends('layouts.app')
@section('title', 'Formulaire Nouvelle Demande')
@section('content')
<div class="main-content-wrap sidenav-open d-flex flex-column content-center">
    <div class="header">
        <p>Nouveau Role</p>
    </div>
    <div class="">
        <form class="row" action="{{ route('addRolePost') }}" method="POST">
            @csrf 
            <div class="col-md-4">
                <div class="form-group mt-2">
                    <div>
                        <label for="test">Utilisateur :</label>
                    </div>
                    <div>
                        <select name="user" id="user" class="form-control">
                            @foreach ($users as $usr)
                                <option value="{{$usr->id}}">{{$usr->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mt-2">
                    <div>
                        <label for="test">Role :</label>
                    </div>
                    <div>
                        <select name="role" id="role" class="form-control">
                            @foreach ($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group " style="margin-top: 30px">
                    <div>
                        <button type="submit" id="submitAddRole" class="btn btn-primary">Valider</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
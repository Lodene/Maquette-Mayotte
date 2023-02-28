@extends('layouts.app')
@section('title', 'Menu admin')
@section('content')
{{-- {{dd($datas)}} --}}
    <div class="header" id="myHeader">
        <p>Liste des {{$item}}s</p>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-row">
                    <div class="p-2 bd-highlight">
                        <a data-whatever="@mdo" data-toggle="modal" data-target="#modalCreate" 
                            class="btn btn-sm btn-success m-btn m-btn--icon m-btn--wide  m--margin-right-10">
                            <span>
                                <i class="fa fa-plus mr-2"></i>
                                <span>Ajouter un Element</span>
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
                        <th>#</th>
                        <th>Désignation</th>
                        <th>Action</th>
                    </tr>
                    <?php $a = 1 ?>
                    @foreach ($datas as $data)
                    <tr class="">
                        <th>{{$a}}</th>
                        <th>{{$datas[$a-1]}}</th>
                        <th><i class="fas fa-trash-alt" style="color: red"></i></th>
                    </tr>
                    <?php $a++ ?>
                    @endforeach
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
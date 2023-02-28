<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatatableBuilder extends Model
{
    public static function datatableGestionnaireDemandes($data) {
        dd($data);
        return datatables()->of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('date_création', function ($data) {
                return $data->date_création;
            })
            ->addColumn('date_derniere_modification', function ($data) {
                return $data->date_derniere_modification;
            })
            ->addColumn('libelle', function ($data) {
                return $data->libelle;
            })
            ->addColumn('status', function ($data) {
                return $data->status;
            })
            ->addColumn('action', function ($data) {
                return $data->action;
            })
            ->rawColumns(['id', 'date_création', 'date_derniere_modification', 'libelle', 'status', 'action'])
            ->make(true);
    }
}

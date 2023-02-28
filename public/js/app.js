
$('form input').keydown(function (e) {
    if (e.keyCode == 13) {
        var inputs = $(this).parents("form").eq(0).find(":input");
        if (inputs[inputs.index(this) + 1] != null) {
            inputs[inputs.index(this) + 1].focus();
        }
        e.preventDefault();
        return false;
    }
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(function() {
    $('body').on('click', '.mission-choice', function (e) {
        e.preventDefault();
        var form = $(this).parents('form');
        swal({
            title: "Quelle mission désirez",
            text: "Cet élément sera supprimé si vous confirmez",
            input: 'text',
            buttons: [
                'Annuler',
                'Oui, supprimer'
            ],
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            } else {

            }
        });
    });

    $('body').on('click', '.button-delete', function (e) {
        e.preventDefault();
        var form = $(this).parents('form');
        swal({
            title: "Etes-vous sûr?",
            text: "Cet élément sera supprimé si vous confirmez",
            icon: "warning",
            buttons: [
                'Annuler',
                'Oui, supprimer'
            ],
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            } else {

            }
        });
    });

    $('body').on('click', '.button-delete-children', function (e) {
        e.preventDefault();
        var form = $(this).parents('form');
        swal({
            title: "Attention ! Cet élément contient des éléments enfant.",
            text: "Cet élément ainsi que les éléments rattachés seront supprimés si vous confirmez",
            icon: "warning",
            buttons: [
                'Annuler',
                'Oui, supprimer'
            ],
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            } else {

            }
        });
    });

    $('body').on('click', '.creer-entretien-erreur', function (e) {
        e.preventDefault();
        var form = $(this).parents('form');
        swal({
            title: "Création impossible",
            text: "Merci d'associer au moins un équipier Algoé à cet audit",
            icon: "error",

            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            } else {

            }
        });
    });

    $('body').on('click', '.button-logout', function (e) {
        e.preventDefault();
        var form = $('#logout-form');
        swal({
            title: "Etes-vous sûr ?",
            text: "Merci de confirmer votre déconnexion",
            icon: "warning",
            buttons: [
                'Annuler',
                'Oui, me déconnecter'
            ],
            dangerMode: true,
        }).then( function(willDelete)  {
            if (willDelete == true) {
                form.submit();
            }
        });
    });
});

$(document).ready(function() {

    $.fn.dataTable.moment( 'DD/MM/YYYY' );
    $('.maskdate').mask('99/99/9999');

    function chargeDonneesSalarie ( id_salarie ) {
        $.ajax({
            url: '/salarie/role/get/'+id_salarie,
            type:"GET",
            dataType:"json",
            success:function(data) {
                $('#role').empty();
                $('#role').val(data);

            }
        });
        $.ajax({
            url: '/salarie/us/get/'+id_salarie,
            type:"GET",
            dataType:"json",
            success:function(data) {
                $('#us').empty();
                $('#us').val(data);

            }
        });
        $.ajax({
            url: '/salarie/nbjourtravaille/get/'+id_salarie,
            type:"GET",
            dataType:"json",
            success:function(data) {
                 $('#nombre_jour_travailles').empty();
                 $('#nombre_jour_travailles').val(data.total);

                $('#nb_jours_a_travailler').empty();
                $('#nb_jours_a_travailler').val(data.total - data.restant);

            }
        });
        $.ajax({
            url: '/salarie/donneessalarie/get/'+id_salarie,
            type:"GET",
            dataType:"json",
            success:function(data) {

                console.log( data );
                $('#nb_rfj_pris').empty();
                $('#nb_rfj_pris').val(data.rfj);

                $('#nb_jours_cp_pris').empty();
                $('#nb_jours_cp_pris').val(data.cp);

                $('#autres_jours_absence_non_travaille').empty();
                $('#autres_jours_absence_non_travaille').val(data.jour_non_travail_absence_payee);



            }
        });
    }

    $('#salarie_id').trigger("change");
    $('#salarie_id').on('change', function(){
        var salarie_id = $(this).val();
        if(salarie_id) {
            $.ajax({
                url: '/manager/get/'+salarie_id,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                },
                success:function(data) {
                    $('select[name="manager_id"]').empty();
                    $.each(data, function(key, value){
                        $('select[name="manager_id"]').append('<option value="'+ key +'">' + value + '</option>');
                    });
                    $('select[name="manager_id"]').trigger("change");
                    chargeDonneesSalarie( salarie_id );
                },
                complete: function(){
                    /*  $('#loader').css("visibility", "hidden"); */
                }
            });
        } else {
            $('select[name="manager_id"]').empty();
        }
    })



});


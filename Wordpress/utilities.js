jQuery('docuement').ready(function($) {

    // Ajax basics
    $('#something').keyup(function () {
        $.ajax({
            url : adminAjax, // Voir function.php
            method : 'POST', // GET par défaut
            data : {
                action : 'testAction',
                valeur : $(this).val()
            }, // mes variables
            success : function( data ) { // en cas de requête réussie
                console.log(data.data);
            },
            error : function( data ) { // en cas d'échec
            }
        });
    });

});
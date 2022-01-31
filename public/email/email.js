
function carregaEmail(_id_email){
    $('button.active').removeClass('active');
    $('#email-'+_id_email).addClass('active');
    $.ajax({
        url: "/emailById",
        type: 'GET',
        data: {
            id : _id_email
        },
        success: function ( _result ){
            $('#div-leitor-email').html(_result);
            console.log(_result);
        },
        error: function( e ){
            console.log(e)
        }
    })
}


function modalNovoEmail(){
    
    $('.modal').modal('show');
}
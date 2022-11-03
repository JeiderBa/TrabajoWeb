function ValidarExisteCedula() {

    let identificacion = $("#form3Example3").val();

    if (identificacion.length < 9) {
        $("#btnsesion").prop('disabled', true);
        return;
    }

   $.ajax({
        url : 'https://apis.gometa.org/cedulas/' + identificacion,
        data : {  },
        type : 'GET',
        dataType : 'json',
        success : function(resultado) {
            if (resultado.resultcount == 0) {
                $("#btnsesion").prop('disabled', true);
            }
            else {
                $("#btnsesion").prop('disabled', false);
            }
        },
        error : function() {
            alert("Verifique sus datos");
            $("#btnsesion").prop('disabled', true);
        }
    });
    
}
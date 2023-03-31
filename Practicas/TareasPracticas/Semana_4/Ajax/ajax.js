//ejecutamos jquery
jQuery(function(){
    //cuando hagan click en el boton
    $("#boton").on("click", function(){

        Swal.fire({
            icon: "question",
            title: "Está seguro?",
            text: "No podra revertir la accion",
            showDenyButton: true,
            denyButtonText: "No, no estoy seguro",
            confirmButtonText: "Si, Enviar"
        }).then((result)=>{
            if(result.isConfirmed){//Si
                $.ajax({
                    type: 'POST',
                    url: 'ajax.php',
                    data: $("#formularioAjax").serialize(),
                    success : function(response){
                        $("#resultado").html(response)
                    },
                    error: function(){
                        Swal.fire("Error en peticion ajax")
                    }
                })
            }else if(result.isDenied){//No
                Swal.fire("Ha salido del proceso")
            }
        })
    
    });

});
//almacenamos el formulario en una variable
let formulario = document.querySelector("#formulario");
//al formulario le agregamos un listener que lleva nombre y funcion (callback)
formulario.addEventListener('submit', aplicar);

//funcion que se ejecutara
function aplicar(e) {
    //evitamos que se envie el formulario
    e.preventDefault();
    
    //treamos los valores de los campos
   let email = document.querySelector("#email").value;
   let pass = document.querySelector("#pass").value;
    

    //validamos que no esten vacios
    if (!email || !pass) {
        Swal.fire({
            icon: 'error',
            title: 'Datos Requeridos',
            text: 'Llene todos los campos'
          });
    } else {
        Swal.fire({
            icon: 'success',
            title: 'Bienvenido',
            text: 'Accesso correcto'
          });
    }
    
};
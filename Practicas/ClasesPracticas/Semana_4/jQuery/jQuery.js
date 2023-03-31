/*sirve para interactuar con los documentos HTML, manipular el árbol DOM, manejar eventos, desarrollar animaciones y hacer peticiones ya sean POST o GET a un servidor externo utilizando AJAX. */
//lo utilizamos para que cargue el jquery hasta que este lista la pagina
jQuery(function(){
//seleccionar un elemento por medio de un id
let elemento = $("#txt");

 //crear una variable para almacenar el valor de los atributos
 //id, class y value
let vClase, vId, vValue;
 
 /*Utilizaremos el metodo attr para acceder a un atributo en especifico 
 segun la etiqueta que se selecciona */
vClase = elemento.attr("class");
vId = elemento.attr("id");
vValue = elemento.attr("value");

 //Mostramos cada atributo
console.log("Clase: " + vClase);
console.log("Id: " + vId);
console.log("Value: " + vValue);

 //MODIFICAR CLASE DE UN ELEMENTO
$("#boton").on("click",function(){
   // $("#boton").addClass("btn-danger");
   $("#boton").toggleClass("btn-danger");
});

 //EVENTOS DEL MOUSE
 //click - click sobre la etiqueta h1
 $("h1").on("click",function(){
    console.log("Click en h1");
 });
 
 //mouseecenter - entra cursor sobre el h1
$("h1").mouseenter(function () { 
    console.log("Sobre h1");
});
 
 //mouseleave - sale cursos del h1
$("h1").mouseleave(function () { 
    console.log("Fuera de h1");
});
 


 //EVENTOS CON INPUTS
 //keypress - al presionar una tecla 
$("#txt").keypress(function (e) { 
    let letra = e.originalEvent.key;
    console.log("keypress: "+letra);
});
 

 //keydown - al tener presionada una tecla
$("#txt").keydown(function (e) { 
    let letra = e.originalEvent.key;
    console.log("keydown: "+letra);
});
 

 //keyup - al dejar de presionar una tecla
$("#txt").keyup(function (e) { 
    let letra = e.originalEvent.key;
    console.log("keyup: "+letra);
});
 

//focus - al entrar en el input
$("#txt").on("focus",function(e) {
    console.log("dentro del txt");
});


//blur - al salir del input
$("#txt").on("blur",function(e) {
    console.log("fuera del txt");
});


//change - al hacer un cambio
$("#txt").on("change",function(e) {
    console.log("cambio en txt");
});

});
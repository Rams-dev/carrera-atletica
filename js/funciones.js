
function agregardatos(nombre,institucion,edad,telefono,numero){
    cadena="nombre=" + nombre + 
            "&institucion=" + institucion +
            "&edad=" + edad +
            "&telefono=" + telefono +
            "&numero=" + numero;

    $.ajax({
        type:"POST",
        url: "php/agregarDatos.php",
        data:cadena,
        success:function(r){
            if(r==1){
                $('#tabla').load('componentes/tabla.php');
                $('#buscador').load('componentes/buscador.php');
                alertify.success("agregado con exito");
            }else{
                alertify.error("fallo al ingresar los datos");
            }
        }

    });
}



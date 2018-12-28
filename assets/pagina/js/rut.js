//Validador y formateador automatico de rut
function checkRut(rut) {
    // Se quitan los puntos y los guiones mediante el metodo replace
    var valor = rut.value.replace('.','');
    valor = valor.replace('-','');

    // Aislar Cuerpo y Dígito Verificador
    var cuerpo = valor.slice(0,-1);
    var dv = valor.slice(-1).toUpperCase();

    // Formatear rut
    rut.value = cuerpo +'-'+ dv;

    // Si no cumple con el mínimo ej. (n.nnn.nnn)
    if(cuerpo.length < 7) {
		$("#fg_rut").addClass('has-error');
        rut.setCustomValidity("RUT Incompleto");
		return false;
    }

    // Calcular Dígito Verificador
    var suma = 0;
    var multiplo = 2;

    // Para cada dígito del Cuerpo
    for(var i=1;i<=cuerpo.length;i++) {

        // Obtener su Producto con el Múltiplo Correspondiente
        var index = multiplo * valor.charAt(cuerpo.length - i);

        // Sumar al Contador General
        suma = suma + index;

        // Consolidar Múltiplo dentro del rango [2,7]
        if(multiplo < 7) {
            multiplo = multiplo + 1;
        }else{
            multiplo = 2;
        }
    }

    // se calcula el dv con modulo 11
    var dvEsperado = 11 - (suma % 11);

    // Casos Especiales (0 y K)
    if(dv == 'K'){
        dv = 10;
    }else{
        dv=dv;
    }
    if(dv == 0){
       dv = 11;
    }else{
       dv = dv;
    }

    // Validar que el Cuerpo coincide con su Dígito Verificador
    if(dvEsperado != dv){
        rut.setCustomValidity("RUT Inválido");
		$("#fg_rut").addClass('has-error');
		return false;
    }


   //se resetea el setCustomValidity en caso de haber ocurrido alguna ocurrencia en el if
    rut.setCustomValidity('');
}

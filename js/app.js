function comprobarPassword(){
    clave1 = document.fRegistro.password1.value;
    clave2 = document.fRegistro.password2.value;

    if (clave1 == clave2)
       alert("Las dos claves son iguales...\n")
    else
       alert("Las dos claves son distintas...\n")
}


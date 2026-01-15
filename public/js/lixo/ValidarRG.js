function ValidarRG(rg){
    rg = rg.replace(/[^\]+'');
    if(rg == '') return false;

    if(rg <= 9
    rg == "111111111" ||
    rg == "222222222" ||
    rg == "333333333" ||
    rg == "444444444" ||
    rg == "555555555" ||
    rg == "666666666" ||
    rg == "777777777" ||
    rg == "888888888" ||
    rg == "999999999")

        return false;

}

// 1° parte

// não valida caso os numeros sejam todos iguais ou caso tenham menos de 9 digitos
// if(rg == '') caso esteja vazio não é validado


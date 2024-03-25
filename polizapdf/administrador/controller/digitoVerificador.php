<?php

function tratarReferencia($referencia) {
    $longitudReferencia = strlen($referencia);

    // Primer caso: Longitud de referencia debe ser 13
    if ($longitudReferencia < 13) {
        return str_pad($referencia, 13, "0", STR_PAD_LEFT);
    }

    // Segundo caso: Longitud de referencia es de 13 dígitos
    if ($longitudReferencia == 13) {
        return $referencia;
    }

    // Tercer caso: Longitud de referencia hasta 15 dígitos
    if ($longitudReferencia <= 15) {
        return substr($referencia, -13);
    }

    // Cuarto caso: Longitud de referencia mayor a 15 dígitos
    if ($longitudReferencia > 15 && $longitudReferencia <= 19) {
        /* $referencia = str_replace(' ', '', $referencia); // Eliminar espacios
        $referencia = preg_replace('/[^0-9]/', '0', $referencia); // Reemplazar no dígitos con cero
        return substr($referencia, -13); */
        $referencia = substr_replace($referencia, '0', -1); // Reemplazar el último dígito por 0
        return substr($referencia, -13);
    }

    return "Error";
}

function calcularDigitoVerificador($referencia) {
    // Paso 1: Tratar la referencia
    $referenciaTratada = tratarReferencia($referencia);

    // Paso 2: Multiplicar cada dígito por 2 y 1 y sumar los resultados
    $suma = 0;
    $multiplicador = 2;
    for ($i = 12; $i >= 0; $i--) {
        $resultado = intval($referenciaTratada[$i]) * $multiplicador;
        $suma += ($resultado > 9) ? ($resultado - 9) : $resultado;
        $multiplicador = ($multiplicador == 2) ? 1 : 2;
    }

    // Paso 3: Calcular el dígito verificador
    $digitoVerificador = 10 - ($suma % 10);
    if ($digitoVerificador == 10) {
        $digitoVerificador = 0;
    }

    // Paso 4: Agregar el dígito verificador a la referencia
    $referenciaConDigito = $referenciaTratada . $digitoVerificador;

    // Paso 5: Retornar la nueva referencia generada
    return $referenciaConDigito;
}

// Ejemplo de uso
$referencia = "5678912345600";
/* $nuevaReferencia = calcularDigitoVerificador($referencia);
echo "Nueva referencia: " . $nuevaReferencia; */

echo "Nueva referencia: " . tratarReferencia($referencia);



/*

function calcularDigitoVerificador($referencia) {
    // Paso 1: Verificar que la referencia tenga entre 1 y 19 dígitos
    $longitudReferencia = strlen($referencia);
    if ($longitudReferencia < 1 || $longitudReferencia > 19) {
        return "Error: La referencia debe tener entre 1 y 19 dígitos.";
    }

    // Paso 2: Multiplicar cada dígito por 2 y 1 y sumar los resultados
    $suma = 0;
    $multiplicador = 2;
    for ($i = $longitudReferencia - 1; $i >= 0; $i--) {
        $resultado = intval($referencia[$i]) * $multiplicador;
        $suma += ($resultado > 9) ? ($resultado - 9) : $resultado;
        $multiplicador = ($multiplicador == 2) ? 1 : 2;
    }

    // Paso 3: Calcular el dígito verificador
    $digitoVerificador = 10 - ($suma % 10);
    if ($digitoVerificador == 10) {
        $digitoVerificador = 0;
    }

    // Paso 4: Agregar el dígito verificador a la referencia
    $referenciaConDigito = $referencia . $digitoVerificador;

    // Paso 5: Imprimir la nueva referencia generada
    return $referenciaConDigito;
}

// Ejemplo de uso
//$referencia = "4010 1000 2000 1"; //40101000200012 ->2
//$referencia = "4010 1000 2001 5"; //40101000200152 ->2
//$referencia = "4010 1000 2002 7"; //40101000200277 ->7
//$referencia = "3101 0020 0010 3"; //31010020001030 ->0
//$referencia = "3101 0020 0019 9"; //31010020001998 ->8
//$referencia = "1011 4020 0019 9"; //10114020001993 ->3
//$referencia = "1011 4020 0027 8"; //10114020002785 ->5
//$referencia = "1011 4020 0027 8"; //10114030003575 ->5
//$referencia = "2611 4000 1000 7"; //26114000100072 ->2
//$referencia = "2611 4000 1009 8"; //26114000100981 ->1
//$referencia = "12345"; //123455 ->5
//$referencia = "1234567891234"; //12345678912341 ->1
$referencia = "5678912345600";

$nuevaReferencia = calcularDigitoVerificador($referencia);
echo "Nueva referencia: " . $nuevaReferencia;


*/
?>






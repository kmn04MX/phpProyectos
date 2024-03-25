<?php
include('../template/cabecera.php');
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Tabla con Logo de Empresa y Dirección</title>
<style>
    .tabla1, th, td {
        border-collapse: collapse;
        border : 1px solid black;
        font-family: Calibri;
        font-size: 12px;
    }

    .tabla1 {
        width: 100%;
    }

    .fila1--celda1__p{
        margin-bottom: 0;
        margin-top: 0;
    }
    .fila2--celda1__columna{
        display: flex;
        flex-direction: row;
        justify-content: space-around

    }

    .fila2--celda1__p{
        margin-top: 5px;
        margin-bottom: 5px;

    }

    .fila3--celda1__p{
        margin: 0;
    }

    .fila4--celda1{
        width: 65%;

    }
    .fila4--celda2{
        width: 35%;

    }

    .fila4--celda1__columna, .fila2--celda2__columna{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .fila4--celda1__p, .fila4--celda2__p{
        font-weight: bold;
    }

    .fila4--celda1__banamex{
        margin-bottom: 10px;
    }

    .fila4--celda1__p{
        margin: 3px 0 0 0;
        width: 33.3%;
    }
    .fila4--celda2__sello{
        display: block;
        text-align: center;
    }
    .fila4--oxxo{
        display: block;
        font-size: 9px;
    }
    
    .fila4--transferencia{
        display: block;
        margin-top: 3px;
        text-decoration: underline;
    }

    .fila4--celda1--bbvaspei{
        margin-bottom: 3px;
    }

    .fila4--celda2__p{
        margin: 3px 0 0 0;
    }

    .fila4--space{
        display: block;
        font-size: 9px;
    }

    .fila4--copia{
        display: block;
        text-align: center;
    }

    .fila5--celda1__strong{
        font-weight: bold;
    }

    .fila5--celda1__p{
        margin: 5px 40px 5px 5px;
    
    }

    .fila5--celda1__alerta{
        color: red;
    }
    .fila5--celda1__puntos{
        display: block;
        font-size: 20px;
    
    }

    .tabla2, th, td{
        border-collapse: collapse;
        border-top: 0;
    }

    .tabla2{
        width: 100%;
    }

    .fila10__celda1{
        width: 30%;
    }

    .fila10__celda2{
        width: 15%;
    }

    .fila10__celda3{
        width: 15%;
    }

    .fila10__celda4{
        width: 20%;
        border-bottom: 0;
        text-decoration: underline;
    }

    .fila10_celda4, .fila10__celda5,
    .fila11__celda4, .fila11__celda5,
    .fila12__celda4, .fila12__celda5,
    .fila13__celda4, .fila13__celda5{
        border-top: 0;
        border-bottom: 0;
    }

    .fila10__celda5, .fila11__celda5, .fila12__celda5, .fila13__celda5{
        border-left: 0;
    }

    .fila10__celda4, .fila11__celda4, .fila12__celda4, .fila13__celda4{
        border-right: 0;
    }


</style>
</head>
<body>

<table class="tabla1">
    <tbody>
        <tr class="fila1">
            <td class="fila1--celda1" colspan="2">
                <img class="fila1--celda1__img" src="https://via.placeholder.com/150x50" alt="Mapfre">
                <p class="fila1--celda1__p">Av. Revolución número 507 San Pedro de los Pinos, Benito Juárez, México, Ciudad de Méxcio <br/>C.P 03800 Tel 5230 7000 R.F.C MTE 440316 E54                
                </p>
            </td>
        </tr>
        <tr class="fila2">
            <td class="fila2--celda1" colspan="2">
                <div class="fila2--celda1__columna">
                    <p class="fila2--celda1__p">Póliza: 4222100000148</p>
                    <p class="fila2--celda1__p">&nbsp;</p>
                    <p class="fila2--celda1__p">&nbsp;</p>
                </div>
            </td>
        </tr>
        <tr class="fila3">
            <td class="fila3--celda1" colspan="2">
                <p class="fila3--celda1__p">El importe del presente documento puede ser liquidado en cualquier sucursal bancaia, banco por teléfono o internet de Banamex, Santander, HSBC, Banorte - IXE, BBVA Bancomer, Banorte o Banco Autofún, haciéndo uso de la referencia correspondiente.</p>
            </td>
        </tr>
        <tr class="fila4">
            <td class="fila4--celda1">
                <div class="fila4--celda1__columna fila4--celda1__banamex">
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                </div>
                <div class="fila4--celda1__columna">
                    <p class="fila4--celda1__p">BBVA Bancomer</p>
                    <p class="fila4--celda1__p">CIE 793485</p>
                    <p class="fila4--celda1__p">REF: 4222 1000 0014 89</p>
                </div>
                <div class="fila4--celda1__columna">
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                </div>
                <div class="fila4--celda1__columna">
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                </div>
                <div class="fila4--celda1__columna">
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                </div>
                <div class="fila4--celda1__columna">
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                </div>
                <div class="fila4--celda1__columna">
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                </div>
                <span class="fila4--oxxo">&nbsp;</span>
                <span class="fila4--transferencia">&nbsp;</span>
                <div class="fila4--celda1__columna fila4--celda1--bbvaspei">
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                </div>
            </td>
            <td class="fila4--celda2">
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p">Importe a pagar</p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p"> &nbsp; </p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p">$ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1,650.00  &nbsp; &nbsp; Pesos</p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p">&nbsp;</p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p">(Un mil seiscientos veintecuatro dolares 00/100 m.n.)</p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p"><hr/><span class="fila4--celda2__sello">Sello</span></p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p">&nbsp;</p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p">&nbsp;</p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p">&nbsp;</p>
                </div>
                <span class="fila4--space">&nbsp;</span>
                <span class="fila4--copia">Copia asegurado</span>
            </td>
        </tr>
        <tr class="fila5">
            <td class="fila5--celda1" colspan="2">
                <p class="fila5--celda1__p">
                    <span class="fila5--celda1__strong">Estimado Asegurado: </span>
                </p>
                <p class="fila5--celda1__p">
                    Si usted realiza el pago de su póliza con cheque por favor expedirlo a favor de <span class="fila5--celda1__strong">MAPFRE México, S. A. </span>estar cruzado y ostentar la leyenda "NO NEGOCIABLE", anotando con tinta el número de su póliza al dorso del mismo. Si paga con cheque, se entenderá de recibido salvo buen cobro como lo indica el artículo 7o. de la Ley general de Títulos y Operaciones de Crédito.
                </p>
                <p class="fila5--celda1__p">
                    Este documento es válido como comprobante de pago, sólo con la certificación, sello y firma del cajero o en su lugar el comprobante de pago extendido por el banco.
                </p>
                <p class="fila5--celda1__p">
                    MAPFRE no recibe pagos en efectivo a través de sus agentes, si usted desea pagar en efectivo, por favor realizar el depósito en cualquier sucursal de los bancos mencionados en las referencias que se indican en este documento.
                </p>
                <span class="fila5--celda1__alerta">Par el caso de pago por trasnferencia o SPEI, la referencia debe ir en el campo "Concepto" sin espacios ni nigún otro carácter</span>
                <span class="fila5--celda1__puntos">
                    ..............................................................................................................................................
                </span>
            </td>
        </tr>
        <tr class="fila6">
            <td class="fila1--celda1" colspan="2">
                <img class="fila1--celda1__img" src="https://via.placeholder.com/150x50" alt="Mapfre">
                <p class="fila1--celda1__p">Av. Revolución número 507 San Pedro de los Pinos, Benito Juárez, México, Ciudad de Méxcio <br/>C.P 03800 Tel 5230 7000 R.F.C MTE 440316 E54                
                </p>
            </td>
        </tr>
        <tr class="fila7">
            <td class="fila2--celda1" colspan="2">
                <div class="fila2--celda1__columna">
                    <p class="fila4--celda1__p">BBVA Bancomer</p>
                    <p class="fila4--celda1__p">CIE 793485</p>
                    <p class="fila4--celda1__p">REF: 4222 1000 0014 89</p>
                </div>
            </td>
        </tr>
        <tr class="fila8">
            <td class="fila3--celda1" colspan="2">
                <p class="fila3--celda1__p">El importe del presente documento puede ser liquidado en cualquier sucursal bancaia, banco por teléfono o internet de Banamex, Santander, HSBC, Banorte - IXE, BBVA Bancomer, Banorte o Banco Autofún, haciéndo uso de la referencia correspondiente.</p>
            </td>
        </tr>
        <tr class="fila9">
            <td class="fila4--celda1">
                <div class="fila4--celda1__columna fila4--celda1__banamex">
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                </div>
                <div class="fila4--celda1__columna">
                    <p class="fila4--celda1__p">Banco Autofin</p>
                    <p class="fila4--celda1__p">Convenio 996</p>
                    <p class="fila4--celda1__p">REF: 4222 1000 0014 89</p>
                </div>
                <div class="fila4--celda1__columna">
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                </div>
                <div class="fila4--celda1__columna">
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                </div>
                <div class="fila4--celda1__columna">
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                </div>
                <div class="fila4--celda1__columna">
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                </div>
                <div class="fila4--celda1__columna">
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                </div>
                <span class="fila4--oxxo">&nbsp;</span>
                <span class="fila4--transferencia">&nbsp;</span>
                <div class="fila4--celda1__columna fila4--celda1--bbvaspei">
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                    <p class="fila4--celda1__p">&nbsp;</p>
                </div>
            </td>
            <td class="fila4--celda2">
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p">Importe a pagar</p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p"> &nbsp; </p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p">$ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 1,650.00  &nbsp; &nbsp; Pesos</p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p">&nbsp;</p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p">(Un mil seiscientos veintecuatro dolares 00/100 m.n.)</p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p"><hr/><span class="fila4--celda2__sello">Sello</span></p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p">&nbsp;</p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p">&nbsp;</p>
                </div>
                <div class="fila4--celda2__columna">
                    <p class="fila4--celda2__p">&nbsp;</p>
                </div>
                <span class="fila4--space">&nbsp;</span>
                <span class="fila4--copia">Copia banco</span>
            </td>
        </tr>
    </tbody>
</table>
<table class="tabla2">
    <tbody>
        <tr class="fila10">
            <td class="fila10__celda1">No. Cheque</td>
            <td class="fila10__celda2">Banco</td>
            <td class="fila10__celda3">Monto</td>
            <td class="fila10__celda4">Tipo de deposito</td>
            <td class="fila10__celda5"></td>
        </tr>
        <tr class="fila11">
            <td class="fila11__celda1">&nbsp;</td>
            <td class="fila11__celda2"></td>
            <td class="fila11__celda3"></td>
            <td class="fila11__celda4">Efectivo</td>
            <td class="fila11__celda5">(&nbsp;&nbsp;)</td>
      
        </tr>
        <tr class="fila12">
            <td class="fila12__celda1">Efectivo</td>
            <td class="fila12__celda2"></td>
            <td class="fila12__celda3"></td>
            <td class="fila12__celda4">Cheques mismo banco</td>
            <td class="fila12__celda5">(&nbsp;&nbsp;)</td>
           
        </tr>
        <tr class="fila13">
            <td class="fila13__celda1">Efectivo + cheques</td>
            <td class="fila13__celda2"></td>
            <td class="fila13__celda3"></td>
            <td class="fila13__celda4">cheques otros bancos</td>
            <td class="fila13__celda5">(&nbsp;&nbsp;)</td>
        </tr>
        <tr class="fila14">
            <td class="fila14__celda1" colspan="5">&nbsp;</td>
        </tr>
    </tbody>
</table>

</body>
</html>


<?php 
include ('../template/pie.php');
?>


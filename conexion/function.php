<?php 
function consultaSQL($query) {
    $link = mysqli_connect("localhost", "root", "", "local1") or die("Hubo un error al conectarse con la base de datos");
    $resultados = mysqli_query($link, $query) or die("Hubo un error con la transacción:" . mysqli_error($link));
    mysqli_close($link);
    return $resultados;
}

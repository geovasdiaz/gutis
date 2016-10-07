<?php
//$conexion = mysqli_connect("localhost", "FLuci_wabpage", "c1o2n3s4T5i6T7u8y9e0nTecdmxwebpagepacoTecua1234567890chalalachalala", "FLucio_contituyente");
$conexion = mysqli_connect("localhost", "root", "", "constituyentes");
/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida =(: %s\n", mysqli_connect_error());
    exit();
}
mysqli_query($conexion,"SET NAMES 'utf8'");
?>

<?php 

include('Sopa.php');

//Crear un objeto de la clase (LOS OBJETOS SON VARIABLES)
$ajiaco= new Sopa();

//acceder a un atributo
$ajiaco->cantidadAgua="2 LITROS";
echo($ajiaco->cantidadAgua);

//acceder a metodos
$ajiaco->disfrutarSopa();


?>
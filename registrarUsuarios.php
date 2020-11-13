<?php

include('BaseDatos.php');


if(isset($_POST["botonEnvio"])){


    //Recibo los datos del formulario
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $descripcion=$_POST['descripcion'];
    $genero=$_POST['genero'];
    $foto=$_POST['foto'];

    //Copia u objeto de la clase BD
    $transaccion=new BaseDatos();

    //crear consulta
    $consultaSQL="INSERT INTO usuarios(nombre,apellido,descripcion,genero,foto) VALUES ('$nombre','$apellido','$descripcion','$genero','$foto')";

    //llamo al metodo de la clase BD agregarDatos()
    $transaccion->agregarDatos($consultaSQL);

    //redireccion
    header("location:formularioRegistro.php");


    

    


}








?>
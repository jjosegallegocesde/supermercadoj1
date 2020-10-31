<?php 

class BaseDatos{

//atrinutos
public $usuarioBD="root";
public $passwordBD="";

//constructor
public function __construct(){}


//metodos
public function conectarBD(){

    try{
    
        $datosBD="mysql:host=localhost;dbname=tiendajueves";
        $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
        return($conexionBD);
    
    
    }catch(PDOException $error){

        echo($error->getMessage());

    }
    



}

public function agregarDatos($consultaSQL){

    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //Preparar consulta
    $insertarDatos=$conexionBD->prepare($consultaSQL);

    //Ejecutar la consulta
    $resultado=$insertarDatos->execute();

    //verifico el resultado
    if($resultado){
        echo("usuario agregado");
    }else{
        echo("error");
    }


}





}





?>
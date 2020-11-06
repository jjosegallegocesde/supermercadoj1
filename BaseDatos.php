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


public function consultarDatos($consultaSQL){

    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //Preparar consulta
    $consultarDatos=$conexionBD->prepare($consultaSQL);

    //Establecer el método de consulta
    $consultarDatos->setFetchMode(PDO::FETCH_ASSOC);

    //Ejecutar la operacion en la BD
    $consultarDatos->execute();

    //Retorne los datos consultados
    return($consultarDatos->fetchAll());



}

public function eliminarDatos($consultaSQL){

    
    //establecer una conexion
    $conexionBD=$this->conectarBD();

    //Peparar Consulta
    $eliminarDatos=$conexionBD->prepare($consultaSQL);

    //Ejecutar la consulta
    $resultado= $eliminarDatos->execute();

    //verifico el resultado
    if($resultado){
        echo("usuario Eliminado");
    }else{
        echo("error");
    }

}





}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIOS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <?php  
    
        include("BaseDatos.php");

        //1. Crear un objeto de la clase BaseDatos
        $transaccion=new BaseDatos();

        //2. Definir la consulta para buscar datos
        $consultaSQL="SELECT * FROM usuarios WHERE 1";

        //3. Ejecutar el metodo consultarDatos() 
        // y almacenar la respuesta en una variable
        $usuarios=$transaccion->consultarDatos($consultaSQL);


        print_r($usuarios);
    
    ?>

    <main>
    
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">

                <?php foreach($usuarios as $usuario):?>

                    <div class="col mb-4">
                        <div class="card">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo($usuario["nombre"]) ?></h3>
                                <h3 class="card-title"><?php echo($usuario["apellido"]) ?></h3>
                                <p class="card-text"><?php echo($usuario["descripcion"]) ?></p>
                                <a href="#" class="btn btn-danger">Eliminar</a>
                                <a href="#" class="btn btn-warning">Editar</a>

                            </div>
                        </div>
                    </div>

                <?php endforeach?>


            </div>
        
        </div>
    
    
    </main>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>
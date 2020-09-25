<?php  

//arreglo indexado (los nombres de cada elemnto son indices o numeros);
$productos=array("arroz","atun","apio","pollo");
print_r($productos);
echo("<br>");
echo($productos[1]);


//arreglos asociativos
echo("<br>");
$productosAsociados=array('producto1'=>"arroz",'producto2'=>"atun",'producto3'=>"apio",'producto4'=>"pollo");
print_r($productosAsociados);
echo("<br>");
echo($productosAsociados["producto2"]);


//Arreglo de números
echo("<br>");
$numeros=array(1,2,3,4,5,6,7,8,9,10);

/*for($i=0;$i<count($numeros);$i++){

    echo($numeros[$i]);
    echo("<br>");

}*/

$arreglo=array();
$sumatoria=0;
foreach($numeros as $valor){

   
   $sumatoria=$sumatoria+$valor;
    

}
echo("<br>");
echo($sumatoria);



?>
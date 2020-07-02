Escribe una función que verifique si un número es primo o no, un 
numero primo es un numero entero mayor a que solo es divisible 
entre la unidad y el mismo numero *
<?php
function primos(int $A){
    $cont=0;
    for($i=1;$i<=$A;$i++){
        if($A%$i==0){
            $cont++;
        }
    }
    if($A%$A==0 and $A%1==0 and $cont<3  ){
        echo "EL numero $A es primo"; 
    }
    else{
        echo "EL numero $A no es primo"; 
    }
}
?>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="POST" >
    <input type="number"name="nro1" placeholder="Ingrese  numero "/>
    <input type="submit" name="submit" valuen="Enviar"/>
</form>
<?php
    if(isset($_POST["submit"])){
               $A= $_POST["nro1"];
               primos($A);
    }
?>
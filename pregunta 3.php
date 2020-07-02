<form method="POST" action="<?= $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="nro1" placeholder="Ingrese numero 1">
    <input type="text" name="nro2"  placeholder="Ingrese numero 2">
    <input type="submit" name="funcion" value="Sumar">
    <input type="submit" name="funcion" value="Restar">
    <input type="submit" name="funcion" value="Multiplicar">
    <input type="submit" name="funcion" value="Dividir">
</form>
<?php
include_once "calculador.php";
if (isset($_POST["funcion"])) {
    $nro1 = $_POST["nro1"];
    $nro2 = $_POST["nro2"];
}
    if (isset($_POST["suma"])){
      echo "suma :".funciones::suma($nro1, $nro2);
    
    }
    if (isset($_POST["resta"])){
        echo "resta:".funciones::resta($nro1, $nro2);
    }
    if (isset($_POST["multiplicaion"])){
        echo "multiplicacion:".funciones::multiplicacion($nro1, $nro2);
    }
    if (isset($_POST["division"])){
        echo "division:".funciones::division($nro1, $nro2);
    }

?>
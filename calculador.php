<?php
class funciones{
    public static function suma($nro1,$nro2):void{
        $respuesta=$nro1+$nro2;
        echo "La suma es $respuesta";
    }
    public static function resta($nro1,$nro2):void{
        $respuesta=$nro1-$nro2;
        echo "La resta es $respuesta";
    }
    public static function multiplicacion($nro1,$nro2):void{
        $respuesta=$nro1*$nro2;
        echo "La multiplicacion es $respuesta";
    }
    public static function division($nro1,$nro2):void{
        $respuesta=$nro1/$nro2;
        echo "La division es $respuesta";
    }
}
?>

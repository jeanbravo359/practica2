$color = array(4 => 'blanco', 6 => 'verde', 11=> 'roja');
Escriba un programa que muestre el primer elemento del array
mostrado. El resultado esperado es: blanco *
<?php
echo "<br>";
echo "<br>";
$color = array(4 => 'blanco', 6 => 'verde', 11=> 'roja');
foreach($color as $n => $colores)
{
    echo $n."-->".$colores."<br>";
}
?>

<?php
echo "<br>";
echo "<br>";
$color = array(4 => 'blanco', 6 => 'verde', 11=> 'roja');
for ($i=0;$i<1;$i++)
{
    echo $color[4];
}
?>
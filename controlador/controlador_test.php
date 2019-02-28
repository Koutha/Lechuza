<?php 
require_once ("modelos/modelo_usuario.php");
require_once ("modelos/modelo_conexion.php");
$O_usuario = new C_usuario();
$O_cx = new C_conexion();

$s = $O_cx->getConexion();

var_dump($s);

$a = $s->query("SELECT id_usuario,nombre_apellido,cedula,telefono,email,cargo,imagen,login FROM usuario WHERE login='deibyss' AND clave='f9fb27c13f249a644aac72f00fb98f304bda86ac6534746f037c66f5726d1efb' AND condicion='1'");
$c = $a->fetchObject();

$b = $a->fetch(PDO::FETCH_ASSOC);


var_dump($c);
echo '<br>';
echo '<br>';

var_dump($b);

echo '<br>';
echo '<br>';
echo '<br>';
$t = $O_cx->ejecutarConsulta("SELECT id_usuario,nombre_apellido,cedula,telefono,email,cargo,imagen,login FROM usuario WHERE login='deibys' AND clave='f9fb27c13f249a644aac72f00fb98f304bda86ac6534746f037c66f5726d1efb' AND condicion='1'");
$q = $t->fetch(PDO::FETCH_ASSOC);
var_dump($q);
echo '<br>';
echo '<br>';
echo '<br>';

$r = $O_usuario->verificar('deibys','f9fb27c13f249a644aac72f00fb98f304bda86ac6534746f037c66f5726d1efb');

var_dump($r);
 ?>
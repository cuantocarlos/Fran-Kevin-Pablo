<?php
require "../libs/config.php";

?>
<h1>Bienvenido a la web!!</h1>
<?php
$foto=recoge("new_foto");
$correo=recoge("correo");

echo "Tu foto: ".$foto;
echo "Tu correo: ".$correo;

?>
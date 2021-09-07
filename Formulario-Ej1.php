<?php
echo "DATOS PERSONALES <br><br>";

$Nombre = $_REQUEST['Nombre'];
echo ("Su Nombre es: " . "$Nombre <br><br>");

$Apellidos = $_REQUEST['Apellidos'];
echo ("Sus Apellidos son: " . "$Apellidos <br><br>");

$email = $_REQUEST['email'];
echo ("Su Email es: " . "$email <br><br>");

$clave = $_REQUEST['clave'];
echo ("La contraseña es: " . "$clave <br><br>"); 

$sexo = $_REQUEST['sexo'];
echo ("Su sexo es: " . "$sexo <br><br>");

$estudio = $_REQUEST['estudio'];
echo ("Sus estudios son: " . "$estudio <br><br>");

$opinion = $_REQUEST['opinion'];
echo ("Su comentario fue: " . "$opinion <br><br> ");

echo "Temas Interesados: ";
if(!empty($_REQUEST["temas"])) {
    foreach ($_REQUEST["temas"] as $tema){
        echo "$tema <br>\n";
    }
}

$dia = $_REQUEST['dia'];
echo ("<br> El dia que le interesa: " . "$dia <br><br>");

?>
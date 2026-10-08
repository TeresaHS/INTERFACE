<?php

echo "<p><b> Var_dump de variable nombre: </b>";
var_dump($_GET["nombre"]);
echo "<br/>";

echo "<p><b> Var_dump del array GET: </b>";
var_dump($_GET);
echo "<br/>";

echo "<p><b> Print_r del array GET: </b>";
print_r($_GET);
echo "<br/><br/>";

echo "<hr/>";

echo "<br/>";


echo "<p>Nombre: ";
// el indice de nombre si lo crea pero no coge valor, por eso pregunto por empty (es un input text)
if(empty($_GET["nombre"])) echo "Debes poner un nombre</p>";
else echo $_GET["nombre"];

echo "<p>Asignatura: ";
// el indice de asignatura no lo crea por lo que da undefined, por eso pregunto por isset (es un input que se marca)
if(isset($_GET["asignatura"])){
    echo $_GET["asignatura"];
}
else echo "Debes marcar una asignatura</p>";



echo "<p>Profesor: ";

if(isset($_GET["profesor"])){
    foreach($_GET["profesor"] as $profesorElegido){
        if(isset($profesorElegido)){
            echo $profesorElegido.' ';
        }
    }
}
else echo "Debes marcar un profesor</p>";

/*

echo "<p>Profesor: ";
if(isset($_GET["profesor"])){
    echo $_GET["profesor"];
}
else echo "Debes marcar un profesor</p>";

*/

echo "<p>Repite: ";
// el indice de repite no lo crea por lo que da undefined, por eso pregunto por isset (es un input que se marca)
if(isset($_GET["repite"])){
    /*if($_GET["repite"] === "on")*/ echo "Si repite</p>";
}
else echo "No repite</p>";

echo "<p>Hora: ";
if(empty($_GET["hora"])) echo "Debes poner una hora</p>";
else echo $_GET["hora"];


echo "<p>Informacion: ";
if(empty($_GET["informacion"])) echo "Ninguna informacion aportada</p>";
else echo $_GET["informacion"];

?>
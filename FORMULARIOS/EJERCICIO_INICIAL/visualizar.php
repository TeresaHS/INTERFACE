<?php

var_dump($_GET["nombre"]);
echo "<br/>";

var_dump($_GET);
echo "<br/>";

print_r($_GET);
echo "<br/><br/>";

// el indice de nombre si lo crea pero no coge valor, por eso pregunto por empty (es un input text)
if(empty($_GET["nombre"])) echo "<p>Debes poner un nombre</p>";
else echo $_GET["nombre"];

echo "<br/>";

// el indice de asignatura no lo crea por lo que da undefined, por eso pregunto por isset (es un input que se marca)
if(isset($_GET["asignatura"])){
    echo $_GET["asignatura"];
}
echo "<br/>";

// el indice de repite no lo crea por lo que da undefined, por eso pregunto por isset (es un input que se marca)
if(isset($_GET["repite"])){
    /*if($_GET["repite"] === "on")*/ echo "<p>Si repite</p>";
}
else echo "<p>No repite</p>";

echo "<br/>";

echo $_GET["profesor"];
echo "<br/>";
echo $_GET["hora"];
echo "<br/>";
echo $_GET["informacion"];

?>
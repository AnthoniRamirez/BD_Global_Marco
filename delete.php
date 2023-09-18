<?php
require("conex.php");
    $id = $_GET["id"];
    echo "<H3>DELETE</H3></P>";

    $delete="DELETE FROM producto WHERE id_producto = $id";
    $resultado=mysqli_query($conex,$delete);

    if($resultado){
        $filas=mysqli_affected_rows($conex);
        echo "Se Han Eliminado ".$filas." Fila/s</p>";
    }else{
        echo "Error Al Ejecutar La Consulta: ".mysqli_error($conex)."</p>";
    }
    echo "<a href='index.php'>INICIO </a>";
    
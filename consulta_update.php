<?php
    require("conex.php");
    $id=$_POST["idUP"];
    $idCat=$_POST["idcatUP"];
    $idInv=$_POST["idinvUP"];
    $producto=$_POST["prodUP"];
    $precio=$_POST["precioUP"];

    $update="UPDATE producto 
    SET id_categoria = $idCat, id_inventario = $idInv, nombre = '$producto', precio = $precio
    WHERE id_producto = $id";
    
    echo "<H3><p>UPDATE</H3></P>";

    $resultado = mysqli_prepare($conex,$update);

    if($resultado){
        mysqli_stmt_bind_param($resultado,"iiisd",$id,$categoria,$inventario,$producto,$precio);
        $sentencia = mysqli_stmt_execute($resultado);

        if($sentencia){
            echo "<P>Registro Actualizado Correctamente</P>";
        }else{
            echo "<P>Error Al Actualizar El Registro:".mysqli_error($conex)."</P>";
        }
        mysqli_stmt_close($resultado);
    }else{
       echo "<P>Error Al Ejecutar La Consulta: ".mysqli_error($conex)."</p>";
    }

    echo "<br>" . "<a href='index.php'> Pagina Principal</a>";
?>
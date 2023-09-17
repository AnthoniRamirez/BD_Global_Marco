<?php
    require("conex.php");
    $id=$_POST["id"];
    $categoria=$_POST["categoria"];
    $inventario=$_POST["inventario"];
    $producto=$_POST["producto"];
    $precio=$_POST["precio"];

    $insert="INSERT INTO producto VALUES ($id,$categoria,$inventario,'$producto',$precio)";

    mysqli_stmt_bind_param($stmt,"iiisd",$id,$categoria,$inventario,$producto,$precio);
    $stmt = mysqli_prepare($conex,$insert);
    $resultado = mysqli_stmt_execute($stmt);

    if($resultado){
        echo "Registro Insertado Correctamente."."<br>";

    }else{
        echo "Error Al Insertar El Registro: ". mysqli_error($conex)."<br>";
    }

    echo "<br>"."<a href= 'index.php'> Pagina Principal</a>";

    mysqli_stmt_close($stmt);
    mysqli_close($conex);
?>
<?php
    require("conex.php");
    echo "<H3>Lista De Productos</H3>"."<br>";
    $query="SELECT * FROM producto";
    $query1="SELECT pro.id_producto, pro.nombre, pro.precio, cat.nombre AS Categoria, inven.stock AS Stock 
    FROM producto AS pro
    JOIN categoria AS cat
    ON pro.id_categoria = cat.id_categoria 
    JOIN inventario AS inven
    ON pro.id_inventario = inven.id_inventario";

    echo "<a href='insert.php'> INSERT </a><P>";

    if($result = $conex->query($query1)){
        while ($row = $result->fetch_assoc()) {
            $id = $row["id_producto"];
            $categoria = $row["Categoria"];
            $inventario = $row["Stock"];
            $producto = $row["nombre"];
            $precio = $row["precio"];
            echo $id."".$producto."".$categoria."".$precio."".$inventario."<br>";
            echo "<a href='delete.php?id=".$id."'>DELETE </a><br>";
            echo "<a href='update.php?id=".$id."'>UPDATE </a><P>";
        
        }

    }
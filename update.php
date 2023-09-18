<?php
    require("conex.php");
    $id=$_GET["id"];

    $query="SELECT * FROM producto WHERE id_producto=$id";
    if($result = $conex->query($query)){
        while ($row = $result->fetch_assoc()) {
            $id = $row["id_producto"];
            $categoria = $row["id_categoria"];
            $inventario = $row["id_inventario"];
            $producto = $row["nombre"];
            $precio = $row["precio"];
        }

    }
    echo "<p><H3>UPDATE</H3></p>";
    echo "<form action='consulta_update.php' method='post'>";
    echo "<p>ID Del Producto: <input type=int name='idUP' placeholder='$id' ></p>";
    echo "<p>ID De La Categoria: <input type=int name='idcatUP' placeholder='$categoria'></p>";
    echo "<p>ID Del Inventario: <input type=int name='idinvUP' placeholder='$inventario'></p>";
    echo "<p>Nombre Del Producto: <input type='text' name='prudUP' placeholder='$producto'></p>";
    echo "<p>Precio Del Producto: <input type=float name='precioUP' placeholder='$precio'></p>";

    echo "<input type='submit' value='Actualizar'>";
?>
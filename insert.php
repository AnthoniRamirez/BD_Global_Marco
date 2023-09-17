<?php
    require("conex.php");
    echo "<h3>INSERT</H3>";

    echo "<form action='funcion_insert.php' method='post'>";
    echo "<P> Ingrese El Codigo Del Producto: <input type=int name='id'></p>";
    echo "<P>Ingrese El ID De La Categoria: <input type=int name='categoria'></p>";
    echo "<P>Ingrese Una ID Para Su Inventario: <input type=int name='inventario'></p>";
    echo "<P>Ingrese El Nombre Del Producto: <input type='text' name='producto'></p>";
    echo "<P>Ingrese El Precio Sugerido: <input type=float name='precio'></P>";
    echo "<input type='submit' value='Ingresar'>";

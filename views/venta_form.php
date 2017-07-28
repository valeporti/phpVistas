<table id="table_port">
        <tr id="elem_table_port">
        <td><b>Id</b></td>
        <td><b>Fecha</b></td>
        <td><b>Cliente</b></td>
        <td><b>Tienda</b></td>
        </tr>
    <?php
        echo '<script>console.log("Inicio")</script>';
        $cont = 0;
        echo '<script>console.log("Inicio while")</script>';
        while ($venta = $resultado->fetch_assoc())
        {
            echo '<script>console.log(' . $venta['id'] . ')</script>';
            print("<tr id='elem_table_port'>");
            print("<td width=10%>" . number_format($venta["id"], 0) . "</td>");
          
            print("<td>{$venta["fecha"]}</td>");
            print("<td>{$venta["cliente"]}</td>");
            print("<td>{$venta["tienda"]}</td>");
            print("</tr>");
            $cont ++;
        }
        if ($cont == 0) {
            print("<tr id='elem_table_port'>");
            print("<td width=10%>sin resultados</td>");
            print("<td width=10%>sin resultados</td>");
            print("<td width=10%>sin resultados</td>");
            print("<td width=10%>sin resultados</td>");
            print("</tr>");
        } 

        echo '<script>console.log("terminando")</script>';
        $resultado->free();
        $db->close();
    ?>
</table>
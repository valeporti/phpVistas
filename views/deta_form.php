<table id="table_port">
        <tr id="elem_table_port">
        <td><b>Venta</b></td>
        <td><b>Producto</b></td>
        <td><b>cantidad</b></td>
        </tr>
    <?php
        echo '<script>console.log("Inicio")</script>';
        $cont = 0;
        echo '<script>console.log("Inicio while")</script>';
        while ($deta = $resultado->fetch_assoc())
        {
            echo '<script>console.log(' . $deta['id'] . ')</script>';
            print("<tr id='elem_table_port'>");
          
            print("<td width=10%>" . number_format($deta["id"], 0) . "</td>");
            print("<td>{$deta["producto"]}</td>");
             print("<td width=10%>" . number_format($deta["cantidad"], 0) . "</td>");
            print("</tr>");
            $cont ++;
        }
        if ($cont == 0) {
            print("<tr id='elem_table_port'>");
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
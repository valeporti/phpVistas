<table id="table_port">
        <tr id="elem_table_port">
        <td><b>Id</b></td>
        <td><b>Nombre</b></td>
        <td><b>Precio</b></td>
        </tr>
    <?php
        echo '<script>console.log("Inicio")</script>';
        $cont = 0;
        echo '<script>console.log("Inicio while")</script>';
        while ($prod = $resultado->fetch_assoc())
        {
            echo '<script>console.log(' . $prod['id'] . ')</script>';
            print("<tr id='elem_table_port'>");
            print("<td width=10%>" . number_format($prod["id"], 0) . "</td>");
            print("<td>{$prod["producto"]}</td>");
            print("<td width=10%>" . number_format($prod["precio"], 0) . "</td>");
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
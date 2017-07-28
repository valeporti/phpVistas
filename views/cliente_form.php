<table id="table_port">
        <tr id="elem_table_port">
        <td><b>Id</b></td>
        <td><b>cliente</b></td>

        </tr>
    <?php
        echo '<script>console.log("Inicio")</script>';
        $cont = 0;
        echo '<script>console.log("Inicio while")</script>';
        while ($cliente = $resultado->fetch_assoc())
        {
            echo '<script>console.log(' . $cliente['id'] . ')</script>';
            print("<tr id='elem_table_port'>");
            print("<td width=10%>" . number_format($cliente["id"], 0) . "</td>");
            print("<td>{$cliente["cliente"]}</td>");
            //print("<td width=10%>" . number_format($cliente["precio"], 0) . "</td>");
            print("</tr>");
            $cont ++;
        }
        if ($cont == 0) {
            print("<tr id='elem_table_port'>");
            print("<td width=10%>sin resultados</td>");
            print("<td width=10%>sin resultados</td>");
            print("</tr>");
        } 

        echo '<script>console.log("terminando")</script>';
        $resultado->free();
        $db->close();
    ?>
</table>
<?php
    echo '<script>console.log("Inicio")</script>';
    // configuration
    require_once("../includes/helpers.php"); 
   // require("../vendor/library50/CS50.php");
    $servername = getenv('IP');
    $username = 'yzpx9te1i6qz1yyd';
    $password = 'hw1ptvdjnrf1po8n';
    $database = 'yv1rh8xol4r27t8e';
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    echo '<script>console.log("Connected successfully (".$db->host_info.")")</script>';
    //echo "console.log(" . $db . ")";
    $res = $db->query("SELECT * FROM Producto");
    if ($res) {
        $resultado = $res;
        
    } else {
        $resultado = -1;
    }
    echo '<script>console.log("fin")</script>';
    render("prod_form.php", ["title" => "producto", "resultado" => $resultado, "db" => $db]);

?>
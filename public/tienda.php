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
    echo '<script>console.log(' . $servername . ')</script>';
    echo '<script>console.log(' . $username . ')</script>';
    echo '<script>console.log(' . $password . ')</script>';
    echo '<script>console.log(' . $database . ')</script>';
    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);
    echo '<script>console.log("depsués DB")</script>';
    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    echo '<script>console.log("Connected successfully (".$db->host_info.")")</script>';
    //echo "console.log(" . $db . ")";
    $res = $db->query("SELECT * FROM tienda");
    if ($res) {
        $resultado = $res;
        
    } else {
        $resultado = -1;
    }
    echo '<script>console.log("fin")</script>';
    render("tienda_form.php", ["title" => "tiendas", "resultado" => $resultado, "db" => $db]);
    
    

?>
<?php

    /**
     * config.php
     *
     * CS50
     *
     * Configures app.
     */
     
    // display errors, warnings, and notices
    ini_set("display_errors", true);
    error_reporting(E_ALL);

    // requirements
    require_once("helpers.php");

    // enable sessions
    session_start();
    
    // CS50 Library
    //require("../vendor/library50/CS50.php");
    //CS50::init(__DIR__ . "/../config.json");

    // redirect
    redirect("tienda.php");


?>

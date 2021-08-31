<?php

    try
    {
        $bd = new PDO("mysql:host=localhost;dbname=announce;charset=utf8","root", "NejeL8");
    }

    catch(Exception $e)
    {
        die("Erreur : ".$e->getMessage());			
    }

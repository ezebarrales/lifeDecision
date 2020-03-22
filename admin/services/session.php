<?php
    
    session_start();

    define("NAME_SESSION", "admin");

    function isLogged() {
        if(!isset($_SESSION[NAME_SESSION])) {
            header("Location: login.php");
            return false;
        }
    }

    function isNotLogged() {
        if(isset($_SESSION[NAME_SESSION])) {
            header("Location: index.php");
            return false;
        }
    }
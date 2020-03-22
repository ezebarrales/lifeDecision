<?php

    require("services/session.php");

    if(isLogged()) {
        header("Location: dashboard.php");
    }

    echo $hola;



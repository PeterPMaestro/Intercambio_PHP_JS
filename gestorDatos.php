<?php
    switch($_GET['empleado']){
       
        case "1":
            echo '{
            "nombre": "Pedro Pacheco",
            "email" : "pedro@pacheco.com",
            "edad" : "35"
            }
        ';
        break;
        case "2":
            echo '
            {
                "nombre": "Juan Pacheco",
                "email" : "juan@pacheco.com",
                "edad" : "45"
            }
            ';
                break;
        case "3":
            echo '
            {
                    "nombre": "Tomas Pacheco",
                    "email" : "tomas@pacheco.com",
                    "edad" : "25"
            }
                ';
        break;
       
    }


?>
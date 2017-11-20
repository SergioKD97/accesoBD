<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        define("DB_HOST","localhost" );
        define("DB_USER", "root");
        define("DB_PASS", "");
        define("DB_DATABASE", "usuarios" );
        
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
            if($mysqli->connect_errno > 0){
             die("Imposible conectarse con la base de datos [" . $mysqli->connect_error . "]");
            }
        
        $con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
            if (mysqli_connect_errno()){
            echo "Imposible conectarse a la base de datos: " .
            mysqli_connect_error();
            } else {
                $sql = <<<EOT
                        CREATE TABLE usuario (
                         ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
                         nombre VARCHAR(50) NOT NULL,
                         mail VARCHAR(100) NOT NULL) ENGINE=InnoDB
EOT;
                $resultado = mysqli_query($con, $sql);
                if(mysqli_errno($con)){
                    die(mysqli_error($con));
                }
                else{echo 'tabla creada';}
            }
            
            
            
             
            
            

            
        ?>
        
    </body>
</html>

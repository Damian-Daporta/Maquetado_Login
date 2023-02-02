<!DOCTYPE html>
<html lang="en">
    <head>
     <TITLE>Bienvenido</TITLE>
     <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <form action="">
            <?php
                echo "Bienvenido " . $_POST["nombre"];
                echo $_POST["apellidos"] . "<br>";
                $fecha = $_POST["fechaNacimiento"];
                $fechaNum = (int)$fecha;


                $añoNacido = date("Y",strtotime($fecha));
                echo "<br>";
                if($añoNacido<2023){
                    echo ("Tu edad actual es: ".(2023 - $añoNacido). " años");
                }else{
                    echo "Usted todavía no nació!!!";
                }

            ?>
            <h1 id="edad"></h1>
        </form>


    </body>
</html>

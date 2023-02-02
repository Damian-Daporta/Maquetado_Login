<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>formulario</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <form style="justify-content-center" method="POST" action="mostrar.php">
           
            <label>
                <INPUT TYPE="TEXT" NAME="nombre" placeholder="Nombre">
            </label>

            <label>
                <INPUT TYPE="TEXT" NAME="apellidos" placeholder="Apellido">
            </label>

           <h2 class="title">Fecha de Nacimiento</h2> 
            <br>
            <label>
                <input type="date" id="fechaNacimiento" min="1930-01-01" max="2024-12-12" NAME="fechaNacimiento">
            </label>
            
            
            <button type="SUBMIT">Enviar</button>
            
            
            <input type="hidden" name="edad" id="edad" />


            
            <script src="script2.js"></script>
        </form>
    </body>
</html>
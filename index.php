<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="public/estilos/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Bienvenido, registra tu asistencia.</h1>
    <h2 id="fecha"></h2>

    <div class="container">
        <a class="acceso" href="vista/login/login.php">Ingresar al sistema</a>
        <p class="dni">Ingrese codigo de estudiante</p>

        <form action="POST">
            <input type="text" name="txtdni" placeholder="Codigo estudiante">
            <div class="boton">
            <a class="entrada" href="#">Registrar Asistencia</a>
            </div>
            
        </form>
    </div>

    <script>
        setInterval(() => {
            let fecha= new Date();
            let fechaHora= fecha.toLocaleString();
            document.getElementById("fecha").textContent=fechaHora;
        }, 1000); 
    </script>
</body>
</html>

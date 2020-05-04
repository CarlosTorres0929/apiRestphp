<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <form action="add.php" method="POST" enctype="multipart/form-data">
    	<label>Nombre</label>
        <input type="text" name="nombre">
        <br>
        <label>Apellidos</label>
        <input type="text" name="apellido">
        <br>
        <label>Documento de identidad</label>
        <input type="text" name="documento">
        <br>
        <label>Fecha de nacimiento</label>
        <input type="text" name="fecha_naci">
        <br>
        <label>Ciudad</label>
        <input type="text" name="ciudad">
        <br>
        <br>
        <label>Barrio</label>
        <input type="text" name="barrio">
        <br>
        <br>
        <label>Celular</label>
        <input type="text" name="celular">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
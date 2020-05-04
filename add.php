<?php

    include_once 'apiCitas.php';
    
    $api = new ApiCitas();
    $nombre = '';
    $apellido = '';
    $documento = '';
    $fecha_naci = '';
    $ciudad = '';
    $barrio = '';
    $celular = '';

    $error = '';

    if(isset($_POST['nombre']) && isset($_POST['apellido']) && 
    isset($_POST['documento']) && isset($_POST['fecha_naci']) &&
    isset($_POST['ciudad']) && isset($_POST['barrio']) && isset($_POST['celular'])){

            $item = array(
                'nombre' => $_POST['nombre'],
                'apellido' => $_POST['apellido'],
                'documento' => $_POST['documento'],
                'fecha_naci' => $_POST['fecha_naci'],
                'ciudad' => $_POST['ciudad'],
                'barrio' => $_POST['barrio'],
                'celular' => $_POST['celular']
            );
            $api->add($item);
       
 
        
    }else{
        $api->error('Error al llamar a la API');
    }

?>
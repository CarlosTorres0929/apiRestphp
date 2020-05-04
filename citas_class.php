<?php

include_once 'db.php';

class CitasClass extends DB{
    
   function obtenerCitas(){
        $query = $this->connect()->query('SELECT * FROM citas');
        return $query;
    }

    function obtenerCita($id){
        $query = $this->connect()->prepare('SELECT * FROM citas WHERE id = :id');
        $query->execute(['id' => $id]);
        return $query;
    }

    function nuevaCita($citas){
        $query = $this->connect()->prepare('INSERT INTO citas (nombre,apellido,documento,fecha_naci,ciudad,barrio,celular) VALUES (:nombre,:apellido,:documento,:fecha_naci,:ciudad,:barrio,:celular)');
        $query->execute(['nombre' => $citas['nombre'],'apellido' => $citas['apellido'],'documento' => $citas['documento'],'fecha_naci' => $citas['fecha_naci'],'ciudad' => $citas['ciudad'],'barrio' => $citas['barrio'],'celular' => $citas['celular']]);
        return $query;
    }

}

?>
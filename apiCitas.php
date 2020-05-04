<?php

include_once 'citas_class.php';

class ApiCitas{

    private $error;

    function getAll(){
        $cita = new CitasClass();
        $citas = array();
        $citas["citas"] = array();

        $res = $cita->obtenerCitas();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "id" => $row['id'],
                    "nombre" => $row['nombre'],
                    "apellido" => $row['apellido'],
                    "documento" => $row['documento'],
                    "fecha_naci" => $row['fecha_naci'],
                    "ciudad" => $row['ciudad'],
                    "barrio" => $row['barrio'],
                    "celular" => $row['celular'],
                    "date" => $row['date'],
                );
                array_push($citas["citas"], $item);
            }
        
            $this->printJSON($citas);
        }else{
            $this->error('No hay elementos');
        }
    }

    function getById($id){
        $cita = new CitasClass();
        $citas = array();
        $citas["citas"] = array();

        $res = $cita->obtenerCita($id);

        if($res->rowCount() == 1){
            $row = $res->fetch();
        
            $item=array(
                "id" => $row['id'],
                "nombre" => $row['nombre'],
                    "apellido" => $row['apellido'],
                    "documento" => $row['documento'],
                    "fecha_naci" => $row['fecha_naci'],
                    "ciudad" => $row['ciudad'],
                    "barrio" => $row['barrio'],
                    "celular" => $row['celular'],
                    "date" => $row['date'],
            );
            array_push($citas["citas"], $item);
            $this->printJSON($citas);
        }else{
            $this->error('No hay elementos');
        }
    }

    function add($item){
        $cita = new CitasClass();

        $res = $cita->nuevaCita($item);
        $this->exito('Su cita fue registrada exitosamente');
        echo "<script>window.location.href='index.php'</script>";
    }


    function error($mensaje){
        echo '<code>' . json_encode(array('mensaje' => $mensaje)) . '</code>'; 
    }

    function exito($mensaje){
        echo '<code>' . json_encode(array('mensaje' => $mensaje)) . '</code>'; 
    }

    function printJSON($array){
        echo '<code>'.json_encode($array).'</code>';
    }

    function getError(){
        return $this->error;
    }
}

?>
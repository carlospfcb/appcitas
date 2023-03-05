<?php
include_once 'assets/conexion.php';
$registro = $_POST['registro'];
if($registro == 'nuevo'){
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $comentario = $_POST['comentario'];  
    $direccionIp = $_POST['direccionIp'];  

    try {
        $stmt = $con->prepare("INSERT INTO citas (Nombre, Telefono, Correo, Comentario, create_date, direccion_ip) 
        VALUES (?,?,?,?,NOW(),?)");
        $stmt->bind_param("sssss", $nombre, $telefono,  $correo,  $comentario, $direccionIp );
        $stmt->execute();
        $id_registro = $stmt->insert_id;
        if($id_registro > 0){
            $respuesta = array(
                'respuesta' => 'exito',
                'id_admin' => $id_registro
            );
           
        }
        else{
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        $stmt->close();
        $con->close();
        
    } 
    catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
        $respuesta = array(
            'respuesta' => 'error'
        );
    }
    
    die(json_encode($respuesta));
} //Creacion de citas


?>
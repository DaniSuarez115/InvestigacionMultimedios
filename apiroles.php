<?php
include_once 'roles.php';
class ApiRoles
{
    function getAll()
    {
        $rol=new Roles();
        $rol=array();
        $rol["Items"]=array();
        $respuesta=$rol.getRol();
        if ($respuesta->rowCount())
        {
            while ($row=$respuesta->fetch(PDO::FETCH_ASSOC))
            {
                $item=array(
                    'idRol'=>row['idRol'],
                    'nameRol'=>row['nameRol'],
                    'idMenu'=>row['idMenu'],
                    'createAt'=>row['createAt'],
                    'updateAt'=>row['updateAt'],
                    'enable'=>row['enable']
                );
                array_push($rol['Items'],$item);
            }
            echo json_encode($rol);
        }else  echo json_encode(array('Mensaje'=>'No hay elementos registrados'));
    }
}

?>
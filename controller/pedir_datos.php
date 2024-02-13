<?php
/* TODO:Cadena de Conexion */
require_once("../config/config.php");
/* TODO:Modelo Categoria */
require_once("../model/Pedir.php");

$solicitud = new Pedir();

switch ($_POST["op"]) {
    case "obtener_datos":
        $precios = $solicitud->get_precios_actual();

        if ($precios) {
            $datos = array(
                "precio_litro_actual" => $precios[0]["precio_litro_actual"],
                "precio_kilo_actual" => $precios[0]["precio_kilo_actual"]
            );
        } else {
            $datos = array();
        }

        echo json_encode($datos);
        break;
}
?>

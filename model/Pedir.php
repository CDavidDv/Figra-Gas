<?php
    class Pedir extends Conectar{
        /* TODO: Obtener precio del litro*/
        public function get_precios_actual(){
            $conectar= parent::conexion();
            parent::set_names();

            $sql="SELECT * FROM precios;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC); // Llamada al método fetchAll()

            return $resultado;
        }
    }
?>
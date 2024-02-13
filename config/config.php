<?php
    class Conectar {
        protected $dbh;
    
        protected function Conexion() {
            $servername = 'figragas.com';
            $dbname = 'u770461298_figra_precios';
            $username = 'u770461298_MACE_DIR';
            $password = 'Id+2XLzyxvpj';
    
            try {
                $dsn = "mysql:host={$servername};dbname={$dbname};charset=UTF8";
                $mOptions = array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => FALSE,
                );
                $this->dbh = new PDO($dsn, $username, $password, $mOptions);
                return $this->dbh;
            } catch (Exception $e) {
                print "¡Error BD!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
    
        public function set_names() {
            return $this->Conexion()->query("SET NAMES 'utf8'");
        }
    
        public static function ruta() {
            return "http://figragas.com/";
        }
    }
    
    
?>
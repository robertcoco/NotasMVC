<?php
    namespace Hola\Notas\lib;
    use PDO;
    use PDOException;
    class Database {
        private $host;
        private $user;
        private $password;
        private $db;
        private $charset;

        public function __construct()
        {
            $this->host = "localhost";
            $this->user= "root";
            $this->password = "";
            $this->charset = "utf8mb4";
            $this->db = "anotando";
        }

        public function conexion() {
            try{
                $conection = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";          
                $pdo = new PDO($conection,$this->user,$this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                return $pdo;
            }catch (PDOException $a) {
                throw $a->getMessage();
            }
        }
    }
?>
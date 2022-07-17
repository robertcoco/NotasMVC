<?php 
    namespace Hola\Notas\models;
    use Hola\Notas\lib\Database;
    use PDO;
    class Nota extends Database {
        private string $uuid;
        private string $title;
        private string $content;
        public function __construct( string $title, string $content)
        {
            parent::__construct();
            $this->uuid = uniqid();
            $this->title = $title;
            $this->content = $content;
            
        }
        public function save() {
            $query = $this->conexion()->prepare("INSERT INTO notas (uuid, title, content, updated) VALUES (:uuid, :title, :content, NOW())");
            $query->execute(['uuid' => $this->uuid, 'title' => $this->title, 'content' => $this->content]);
        }

        public function update() {
            $query = $this->conexion()->prepare("UPDATE notas SET uuid = :uuid, title = :title, content = :content, updated = NOW() WHERE uuid = :uuid");
            $query->execute(['uuid' => $this->uuid, 'title' => $this->title, 'content' => $this->content]);
        }

        public static function get($uuid) {
            $db = new Database();
            $query = $db->conexion()->prepare("SELECT * FROM notas WHERE uuid = :uuid");
            $query->execute(['uuid' => $uuid]);
            $nota = Nota::CreateFromArray($query->fetch(PDO::FETCH_ASSOC));
            return $nota;
        } 

        public static function getAll() {
            $db = new Database();
            $notes = [];
            $query = $db->conexion()->query("SELECT * FROM notas");
            while ($r = $query->fetch(PDO::FETCH_ASSOC)){
                $nota = Nota::CreateFromArray($r);
                array_push($notes,$nota);
            }
            return $notes;
        }

        public static function CreateFromArray($arr): Nota {
            $nota = new Nota($arr['title'], $arr['content']);
            $nota->SetUuid($arr['uuid']);

            return $nota;
        }

        public function GetUuid() {
            return $this->uuid;
        }
        public function SetUuid($value) {
            $this->uuid = $value;
        }
        public function GetTitle() {
            return $this->title;
        }
        public function SetTitle($value) {
            $this->title = $value;
        }
        public function GetContent() {
            return $this->content;
        }
        public function SetContent($value) {
            $this->content = $value;
        }
    }
?>
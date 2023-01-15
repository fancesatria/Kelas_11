<?php

    class DB{

        // PROPERTI
        public $host = "127.0.0.1";
        private $user = "root";
        private $password = "";
        private $database = "dbrestoran";

        // FUNCTION CONSTRUCT
        public function _construct()
        {
            echo "construct";
        }
        
        // METHOD
        public function selectData()
        {
            echo 'select data';
        }

        // CARA MEMANGGIL DATA TIPE PRIVATE
        public function getDatabase()
        {
            return $this->database;
        }

        // MEMANGGIL FUNCTION DARI FUNCTION
        public function tampil()
        {
            $this->selectData();
        }

        // STATIC
        public static function insertData()
        {
            echo "static function";
        }
    }


    DB::insertData();
    
    $db = new DB;

    echo '<br>';

    echo $db->selectData();

    echo '<br>';

    echo $db->host;

    echo '<br>';

    echo $db->getDatabase();

    echo '<br>';

    echo $db->tampil();

?>
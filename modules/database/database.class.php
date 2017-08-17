<?php
    class database{
        private $serv;
        private $user;
        private $pass;
        private $db;
        public function __construct(){
            $this->serv = '174.142.46.37';
            $this->user = 'kaayro';
            $this->pass = 'Ab287349';
            $this->db = 'tourindigital';
            $this->connect();
        }
        private function connect(){
            $this->conn = new mysqli($this->serv,$this->user,$this->pass,$this->db);
            if ($this->conn->connect_errno) {
                printf("Connect failed: %s\n", $this->conn->connect_error);
                exit();
            }
        }
        private function close(){
            $this->conn->close();
            $this->connect();
        }
        public function query($query){
            /* Select queries return a resultset */
            $res = null;
            if ($result = $this->conn->query($query)) {
                $res = $result;
                //$result->close();
            }else{
                printf("Errormessage: %s\n", $this->conn->error);
                //exit();
                $res = false;
            }
            $this->close();
            return $res;
        }
        public function multi_query($query){
            /* Select queries return a resultset */
            $res = null;
            if ($result = $this->conn->multi_query($query)) {
                $res = $result;
                //$result->close();
            }else{
                printf("Errormessage: %s\n", $this->conn->error);
                //exit();
                $res = false;
            }
            $this->close();
            return $res;
        }
    }
?>
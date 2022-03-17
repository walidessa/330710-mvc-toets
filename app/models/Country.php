<?php
    class countries {
        private $db;

        public function __construct() {
            $this->db = new Database;
            $this->db->query("SELECT * FROM countries");
            $result = $this->db->resultSet();
            return $result;
        }

        /* Test (database and table needs to exist before this works)
        public function getUsers() {
            $this->db->query("SELECT * FROM users");
            $result = $this->db->resultSet();
            return $result;
        }
        */
    }
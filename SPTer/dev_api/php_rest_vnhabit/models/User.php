<?php

    class User {
        // db
        private $conn;
        private $table - 'User';

        // user
        public $user_id;
        public $user_name;
        public $email;
        public $date_of_birth;
        public $gender;
        public $user_icon;
        public $avatar;
        public $user_description;

        public function __construct($db) {
            $this->conn = $db;
        }

        // get all User
        public function read() {
            $query = 'SELECT
                    user_id, 
                    user_name, 
                    password, 
                    email, 
                    date_of_birth, 
                    gender, 
                    user_icon, 
                    avatar, 
                    user_description 
                FROM
            ' . $this->table . ' ORDER BY user_id DESC';

            // Prepare statement
            $stmt = $this->conn->prepare($query);
            
            // Execute query
            $stmt->execute();

            return $stmt;
        }
    }

?>
<?php
class PGDatabaseConnection extends ADatabaseConnection {

    public function connect() {

        try {
            $dsn = "pgsql:host=$this->host;port=$this->port;dbname=$this->db;user=$this->user;password=$this->password";
            $pdo = new PDO($dsn);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;

        } catch (PDOException $e) {
            echo "Connection failed: ".$e->getMessage();
        }
    }


}
?>
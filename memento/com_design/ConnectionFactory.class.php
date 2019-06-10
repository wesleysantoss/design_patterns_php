<?php 

class ConnectionFactory {
    public function getConnection()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $bd = "test";

        $con = mysqli_connect($host, $user, $password, $bd);

        return $con;
    }
}

?>
<?php 
class loginauswertung {
    public static function checkLogin ($username, $password) {
        $connection = Database::getConnection();
        $result = $connection->query("SELECT username, password FROM systeminfo")->fetch_all();
        foreach ($result as $res) {
            if (password_verify($password, $res[1])) {
                echo "verified\n";
            } else {
                echo "abgelehnt";
            }
        }
    }
}
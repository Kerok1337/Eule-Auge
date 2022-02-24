<?php 

class Database {
    public static function getConnection() {
        return mysqli_connect("localhost", "root", "", "Euge");
    }
}
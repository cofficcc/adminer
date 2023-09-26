<?php

class Model {

    public static $db;

    public static function connect() {
        $db = include '../config/db.php';
        $server = $db['server'];
        $dbname = $db['dbname'];
        $username = $db['username'];
        $password = $db['password'];
        self::$db = new PDO('mysql:host='.$server.';dbname='.$dbname.'', $username, $password);
    }

    public static function checkDBConfig() {
        $db = include 'config/db.php';

        if(empty($db)) {
            return 'error';
        } else {
            return 'success';
        }
    }

    public static function checkDBConnection($server, $username, $password, $dbname) {
        try{  
            self::$db = new PDO('mysql:host='.$server.';dbname='.$dbname.'', $username, $password);
            return 'connected';
         }
        catch(PDOException $e)
        {
            $lang = include '../application/lang/' . $_SESSION['lang'] . '.php';
            $value = $lang['not connected to database'];
            return $value;
        }
    }

    public static function getUserInfo($nickname) {
        self::connect();
        $stmt = self::$db->prepare('SELECT id FROM cofficccpanel_users WHERE username LIKE ?');
        $user = $stmt->execute(array($nickname));
        return $user;
    }
}
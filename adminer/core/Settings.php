<?php

class Settings {

    public static function setLang() {

        if(isset($_GET['lang'])) {
            $_SESSION['cofficcc_panel']['lang'] = htmlspecialchars($_GET['lang']);
        }

        if(empty($_SESSION['lang'])) {
            $lang = include 'application/lang/en.php';
            $_SESSION['cofficcc_panel']['lang'] = 'en';
        } else {
            if(file_exists('application/lang/' . $_SESSION['cofficcc_panel']['lang'] . '.php')) {
                $lang = include 'application/lang/' . $_SESSION['cofficcc_panel']['lang'] . '.php';
            } else {
                $lang = include 'application/lang/en.php';
            }
        }

        return $lang;
    }

    public static function getLangValue($lang) {
        if(file_exists('application/lang/' . $lang . '.php')) {
            $lang = include 'application/lang/' . $lang . '.php';
            $value = $lang['value'];
            if(isset($value)) {
                return $value;
            } else {
                return 'value not found';
            }
        } else {
            return 'lang not found';
        }
    }

    public static function user($id) {

    }

    public static function writeDBConfig($data) {
        $fp = fopen('../config/db.php', 'w');
        fwrite($fp, '<?php

');
        fwrite($fp, 'return [
    ');
        fwrite($fp, '"server" => "' . $data['server'] . '",
    ');
        fwrite($fp, '"username" => "' . $data['username'] . '",
    ');
        fwrite($fp, '"password" => "' . $data['password'] . '",
    ');
        fwrite($fp, '"dbname" => "' . $data['dbname'] . '",
');
        fwrite($fp, '];');
        fclose($fp);
    }

    public static function isAuth() {
        if(isset($_SESSION['cofficcc_panel']['id'])) {
            return true;
        } else {
            return false;
        }
    }

}
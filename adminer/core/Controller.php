<?php

include 'Model.php';
include 'Settings.php';

class Controller {

    public static function start() {
        $lang = Settings::setLang();

        $status = Model::checkDBConfig();
        if($status == 'success') {
            if(Settings::isAuth()) {
                $user = Settings::user($_SESSION['cofficcc_panel']['id']);
                echo 'auth';
            } else {
                Controller::AuthPage($lang);
            }
        } else {
            self::starterPage($lang);
        }
    }

    public static function getPage() {
        $urls = $_GET;
    }

    public static function starterPage($lang) {
        include 'application/pages/starter.php';
    }

    public static function AuthPage($lang) {
        include 'application/pages/login.php';
    }

}
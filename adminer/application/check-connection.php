<?php

session_start();

include "../core/Model.php";
include "../core/Settings.php";

$data = $_POST;

$status = Model::checkDBConnection($data['server'], $data['username'], $data['password'], $data['dbname']);

if($status == 'connected') {
    
    Settings::writeDBConfig($data);

    $statements = [
        "CREATE TABLE `cofficccPanel_users` (
            `id` int(11) NOT NULL,
            `name` varchar(25) NULL,
            `lastname` varchar(25) NULL,
            `username` varchar(50) NOT NULL,
            `email` varchar(150) NULL,
            `password` varchar(255) NOT NULL,
            `lastvisit` varchar(255) NOT NULL,
            `datereg` datetime NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8;"
        ,
        "INSERT INTO `cofficccPanel_users` (`id`, `username`, `password`, `lastvisit`, `datereg`) VALUES
        (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', NOW(), NOW())"
        ,
        "ALTER TABLE `cofficccPanel_users`
        ADD PRIMARY KEY (`id`);"
        ,
    ];

    $pdo = Model::$db;
    
    foreach ($statements as $statement) {
        $pdo->exec($statement);
    }

    echo json_encode(array('success' => 'connected'));

} else {
    echo json_encode(array('error' => $status));
}
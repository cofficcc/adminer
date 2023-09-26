<?php

$data = $_POST;

$nickname = htmlspecialchars($data['nickname']);
$password = md5(htmlspecialchars($data['password']));

include "../core/Model.php";

$user = Model::getUserInfo($nickname);

echo json_encode(array('error' => $user));
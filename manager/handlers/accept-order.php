<?php
require_once "../include/functions.php";

$link = mysqli_connect('localhost', 'root', '', 'delivery');
mysqli_set_charset($link, "utf8");

$link->query("UPDATE `order` SET `status` = 'in progress' WHERE `id` = '{$_POST['id']}'");

redirect("/manager/orders.php");
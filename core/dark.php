<?php
require_once realpath(dirname(__DIR__) . "/.") . "/app/controllers/DataController.php";
$data = new DataController();

if (!$data->isAjax()) {
    die("Error, this is no a valid request!");
}

$_COOKIE['theme'] = "";

setcookie("theme", $_POST["theme"], time() + (86400 * 30), "/");

die($_POST["theme"]);

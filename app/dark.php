<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/controllers/DataController.php";
$data = new DataController();

// if (!isset($_POST['dark'])) {
//     header("Location: /");
// }

if (!$data->isAjax()) {
    die("Error, this is no a valid request!");
}

$_COOKIE['theme'] = "";

// $dark = filter_var($_POST['dark'], FILTER_VALIDATE_BOOL);

// setcookie("Dark", $_POST['dark'], time() + (86400 * 30), "/");
setcookie("theme", $_POST["theme"], time() + (86400 * 30), "/");

die($_POST["theme"]);

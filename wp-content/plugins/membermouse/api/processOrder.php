<?php
require_once("../../../../wp-load.php");
require_once("../includes/mm-constants.php");
require_once("../includes/init.php");

$orderRequest = new MM_DefaultOrderRequest($_POST);
$orderRequest->submitRequest();
?>
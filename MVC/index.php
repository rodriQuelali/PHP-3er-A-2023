<?php
require_once  "controller/Enlaces.php";
require_once  "controller/Template.php";
require_once  "controller/Clientes.php";

require_once  "model/Model_enlaces.php";
require_once  "model/Model_cliente.php";

$enlaces = new Template();
$enlaces->template_get();



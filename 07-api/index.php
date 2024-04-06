<?php 
include "class/persona.php";

if($_SERVER['REQUEST_METHOD'] === 'GET'){
    $alan = new Persona(1, "alan", 23232, "av. siempre viva");
    header('Content-Type: application/json');
    echo json_encode($alan->listPersona());
}

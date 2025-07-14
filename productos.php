<?php
header('Content-Type: application/json');
require 'conexion.php';

$sql = "SELECT id, descripcion, precio, stock FROM ropa";
$res = $conn->query($sql);

$productos = [];

while ($fila = $res->fetch_assoc()) {
    $ropa[] = $fila;
}

echo json_encode($ropa);

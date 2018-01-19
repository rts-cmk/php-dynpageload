<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=osteapi', 'root', '');
} catch (PDOException $e) {
    echo 'Error!: ' . $e->getMessage() . '<br/>';
    die();
}
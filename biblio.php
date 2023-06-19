<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=tp_asso', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

<?php
// conexao com banco de dados
try {
    $con = new PDO('mysql:host=localhost; dbname=blog', 'root', '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "SISTEMA INICIADO COM SUCESSO<br>";
} catch (PDOException $ex) {
    echo $ex->getMessage();
}

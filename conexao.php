<?php
$mysql = mysqli_connect("localhost", "root", "", "bdpessoas");

if (!$mysql) {
    //echo "<h1>Falhou!</h1>";
    echo "Error: Falha ao conectar-se com o banco de dados MySQL.";
    #echo "Debugging errno: " . mysqli_connect_errn() . PHP_EOL;
} else {
    //echo "<h1>Deu certo!</h1>";

    $sql = "SELECT * FROM pessoas";
    $resultado = $mysql->query($sql);
    $pessoas = null;
    while ($pessoa = $resultado->fetch_array()) {
        $pessoas[] = $pessoa;
    }
    //print_r($pessoas);
}

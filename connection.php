<?php
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=mysqlphp', 'root', 'positivo');

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "INSERT INTO tab_usuario (nomeUse, estadoCivil, cpf, profissao) VALUES ('Andre Assis', 'Casado', '12345678912', 'DBA')";

        $pdo->exec($query);
    }
    catch(PDOException $erro)
    {
        echo "ERRO => " . $erro->getMessage();
    }
?>
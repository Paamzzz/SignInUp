<$php
    $local = "eventfindcompany.croi2sc42c7r.us-east-1.rds.amazonaws.com";
    $usuario = "eventfind2024";
    $senha = "ddejjmr_2024";
    $bd = "sorveteria";

    $conn = new mysqli($local,$usuario,$senha,$bd);
    if ($conn->connect_error){
        die("conexão falhou:" .$conn->connect_error);
    }

    echo("Conexão concluida")
    $>
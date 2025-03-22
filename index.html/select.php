<?php
include 'db.php';

$sql = "SELECT id, usuario, conteudo, data_postagem FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        echo "ID: " . $row["id"]. " - Usuário: " .$row["usuario"];
    }
} else{
    echo "0 resultados";
}

$conn->close();
?>
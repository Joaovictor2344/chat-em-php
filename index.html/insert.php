<?php
include 'db.php';

$id = 1;
$conteudo = "Este é o post atualizado!";

$sql = "UPDATE posts SET conteudo='$conteudo' WHERE id=$id";

if ($conn->query($sql) === TRUE){
    echo "Post atualizado com sucesso!";

} else{
    echo "Erro ao atualizar o post: " .$conn->error;
}

$conn->close();
?>
<?php
include 'db.php';

$id = 1;

$sql = "DELETE FROM post WHERE id=$id";

if ($conn->query($sql) === TRUE){
    echo "Post deletado com sucesso!";

} else{
    echo "Erro ao delear post: " .$conn->error;
}

$conn->close();
?>
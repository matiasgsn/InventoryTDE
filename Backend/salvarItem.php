<?php
include "config.php";

$name = $_POST['add_name'];
$image = $_POST['add_image'];
$model = $_POST['add_model'];
$type = $_POST['add_type'];
$store = $_POST['add_store'];
$amount = $_POST['add_amount'];
$project = $_POST['add_project'];
$account = $_POST['add_account'];


$sql = "INSERT INTO items (name, image, model, type, store, amount, project, account) VALUES ('$name', '$image', '$model', '$type', '$store', $amount, '$project', '$account')";

$query = $mysqli->query($sql);

?>
<html>
    <body>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php

        if ($query){ ?>
            <script lang="javascript">
                Swal.fire({
                    title: "Sucesso!",
                    text: "Item adicionado com sucesso.",
                    icon: "success"
                }).then(okay => {
                    if(okay){
                        window.location.href="../All Items/index.php";
                    }
                });
            </script>

        <?php } else { ?>
            <script lang="javascript">
                Swal.fire({
                    title: "Erro",
                    text: "Ocorreu um erro ao adicionar o item.",
                    icon: "error"
                }).then(okay => {
                    if(okay){
                        window.location.href="../All Items/index.php";
                    }
                });
            </script>
        <?php }

        ?>
    </body>
</html>
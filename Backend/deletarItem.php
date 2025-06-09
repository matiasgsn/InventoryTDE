<html>
    <body>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <?php

        include "config.php";
        $id = $_GET['id'];
        $sql = "DELETE FROM items WHERE id = '$id'";
        $query = $mysqli -> query($sql);

        if ($query){ ?>
            <script lang="javascript">
                Swal.fire({
                    title: "Deletar",
                    text: "Item deletado com sucesso.",
                    icon: "success"
                }).then(okay => {
                    if(okay){
                        window.location.href="../All Items/index.php";
                    }
                });
            </script>

        <?php } else {
            echo "Houve um erro.";
        }

        ?>
    </body>
</html>
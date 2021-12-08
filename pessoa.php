<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>pessoa</title>
</head>

<body>
    <style>
        body {
            background-color: #212529;
        }
        h1{
            color: #fff;
        }
    </style>
    <?php
    include "conexao.php";

    if (isset($_POST['enviar'])) {
        /**Validar os dados */
        $info_match = 0;

        $name_regex = "/[A-Za-z]+\s[A-Za-z]+/";
        $email_regex = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/";
        $inserted_name = $_POST["nome"];
        $inserted_email = $_POST["email"];

        $name_result = preg_match($name_regex, $inserted_name);
        $email_result = preg_match($email_regex, $inserted_email);

        if ($name_result == 1 && $email_result == 1) {
            $info_match = 1;
        }

        /**Preparar comando de escrita no bando de dados */
        if ($info_match == 1) {


            $path = dirname(__FILE__) . "/" . "img/"; /*pasta onde será salvo o file*/
            $file = $path . basename($_FILES["imagem"]["name"]); /*Pega o nome do file*/
            $acceptUpload = 1; /*seta variável para sinalizar se o upload foi realizado com sucesso!*/
            $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION)); /*Obtem a extenção do file*/

            $check = getimagesize($_FILES["imagem"]["tmp_name"]);
            if ($check !== false) {
                $acceptUpload = 1;
            } else {
                $acceptUpload = 0;
            }

            if (file_exists($file)) {
                $acceptUpload = 0;
            }

            if ($_FILES["imagem"]["size"] > 500000) {
                $acceptUpload = 0;
            }
            if ($extension != "jpg" && $extension != "png" && $extension != "jpeg" && $extension != "gif") {
                $acceptUpload = 0;
            }

            // Verifica se $acceptUpload contém 0 indicando erro
            if ($acceptUpload == 1) {
                //echo $file="./".$file;
                if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $file)) {
                    echo "O file " . basename($_FILES["imagem"]["name"]) . " foi carregado.";
                } else {
                    echo "Desculpe, houve um erro ao carregar o file.";
                }
            }


            $url_img = $_SERVER['HTTP_HOST'] . "/" . "cimol2021sites2/211130/img/" . $_FILES["imagem"]["name"];

            $sql = "INSERT INTO pessoas (nome, email, imagem) VALUES ('" . $_POST['nome'] . "','" . $_POST['email'] . "','" . $url_img . "')";
            if ($mysql->query($sql)) {
                echo "sucesso!";
            } else {
                echo "Erro!";
            }
        } else {
            echo "<h1>Dados inseridos inválidos</h1>";
        }
    }
    $container = 'container';
    $fluidContainer = 'container-fluid';
    $divOpening = '<div class="';
    $divClosing = '">';
    echo $divOpening . $container . $divClosing;

    /** Formulário de cadastro*/
    include "form_pessoa.php";

    echo "<hr/>";

    /** Lista de pessoas*/

    echo "$divOpening $fluidContainer $divClosing <table" . ' class="table table-dark"' . ">
    <thead><tr><th>#</th><th>Nome</th><th>E-mail</th><th>imagem</th></tr></thead><tbody>";
    $sql = "SELECT * FROM pessoas";
    $resultado = $mysql->query($sql);
    $pessoa = null;
    while ($pessoa = $resultado->fetch_array()) {
        echo "<tr>
    <td>" . $pessoa['id'] . "</td>
    <td>" . $pessoa['nome'] . "</td>
    <td>" . $pessoa['email'] . "</td>
    <td><img class=" . '"img-thumbnail" style="height:50px;"' . " src='http://" . $pessoa['imagem'] .  " ' /></td>
    
    </tr>";
    }
    echo "</tbody></div></div>";


    //<td><img src='" . $pessoa['imagem'] . "'  /></td>
    //<td><img src=".'"' . $pessoa['imagem'] . '"'."  /></td>
    //<td>" . $pessoa['imagem'] . "</td>



    //echo  "<img src='" . $url_img . "'  />";


    ?>

</body>

</html>
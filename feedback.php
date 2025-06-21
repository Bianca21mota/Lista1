<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verifica se o método de requisição é POST
    if (isset($_POST["nomedocliente"], $_POST["SelecioneProduto"], $_POST["Classificaçãodoproduto"], $_POST["Coment"])) {
        // Verifica se os campos estão preenchidos

        $nomeCliente = $_POST["nomedocliente"];
        $selecao = $_POST["SelecioneProduto"];
        $classificacao = $_POST["Classificaçãodoproduto"];
        $comentarios = $_POST["Coment"];
        echo $nomeCliente;
        echo $selecao;
        echo $classificacao;
        echo $comentarios;

    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="POST">

        <label for="nomedocliente">
            <p> Insira o seu Nome </p>
        <input type="text" id="nomedocliente" name="nomedocliente" placeholder=" Nome do cliente" required>
        </label>

        <label for="SelecioneProduto">
            <p> Selecione o Produto </p>
        </label>
        <select id="SelecioneProduto" name="SelecioneProduto" required>
            <option value="Cadeira ">Cadeira</option>
            <option value="Mesa">Mesa</option>
            <option value="Estante">Estante</option>
            <option value="Sofá">Sofá</option>
            <option value="Cama">Cama</option>
        </select>

        <label for="Classificaçãodoproduto">
            <p> Classifique o Produto </p>
        </label>

        <input type="radio" name="Classificaçãodoproduto" id="avaliacao1" value="1"> 1 Estrela

        <input type="radio" name="Classificaçãodoproduto" id="avaliacao2" value="2"> 2 Estrelas

        <input type="radio" name="Classificaçãodoproduto" id="avaliacao3" value="3"> 3 Estrelas

        <input type="radio" name="Classificaçãodoproduto" id="avaliacao4" value="4"> 4 Estrelas

        <input type="radio" name="Classificaçãodoproduto" id="avaliacao5" value="5"> 5 Estrelas


        <label for="Coment">
            <p> Adicione um comentário </p>
        </label>
        <textarea name="Coment" id="Coment" placeholder="Adicione um comentário" required></textarea>
        <button type="submit">Enviar Feedback</button>

    </form>
</body>
</html>
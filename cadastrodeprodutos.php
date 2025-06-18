<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verifica se o método de requisição é POST
    if (isset($_POST["nomedoproduto"], $_POST["categoriadoproduto"], $_POST["precodoproduto"], $_POST["quantidadedoproduto"])) {
        // Verifica se os campos estão preenchidos
        $nameProduto = $_POST["nomedoproduto"];
        $categoriaProduto = $_POST["categoriadoproduto"];
        $precoProduto = $_POST["precodoproduto"];
        $qtdProduto = $_POST["quantidadedoproduto"];
        echo $nameProduto;
        echo $categoriaProduto;
        echo $precoProduto;
        echo $qtdProduto;
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
        <label for="nomedoproduto">
            <p>Insira o Nome do Produto</p>
        </label>
        <input type="text" id="nomedoproduto" name="nomedoproduto" placeholder=" Nome do produto" required>

        <label for="categoriadoproduto">
            <p>Insira a Categoria do Produto</p>
        </label>
        <input type="text" id="categoriadoproduto" name="categoriadoproduto" placeholder=" Categoria do produto" required>

        <label for="precodoproduto">
            <p>Insira o Preço do Produto</p>
        </label>
        <input type="number" id="precodoproduto" name="precodoproduto" placeholder=" Preço do produto" required>

        <label for="quantidadedoproduto">
            <p>Insira a Quantidade do Produto em Estoque</p>
        </label>
        <input type="number" id="quantidadedoproduto" name="quantidadedoproduto" placeholder=" Quantidade do produto" required>

        <button type="submit"> Cadastre o Produto </button>

    </form>
</body>

</html>
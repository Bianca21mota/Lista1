<?php
//SESSION VERIFICA A SESSÃO EM SI, A PÁGINA. ALGO TEMPORÁRIO
// SERVER VERIFICA O SERVIDOR . 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Acessando um metodo de requisição, então só acesse ao metodo de requisição se ele for igual a POST
    if (isset($_POST["userEmail"])) {
        //ISSET VEFICA SE A VARIAVEL ESTÁ ARMAZENANDO ALGUM VALOR, SE NÃO ESTIVER ARMAZENANDO NADA, ELE RETORNA FALSO
        // POST VERIFICA SE O INPUT ESTÁ PREENCHIDO E VAI PEGAR O VALOR PRESENTE NO CAMPO DE NAME NO INPUT 
        $email = $_POST["userEmail"];
        // A variavel $email recebe o valor do input com o name userEmail
        echo $email;
        // Exibe o valor do email
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
        <label for="userEmail">
            <p>Endereço de email</p>
            </label>
        <input type="email" id="userEmail" name="userEmail" placeholder="email@email.com" >
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
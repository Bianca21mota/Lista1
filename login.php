<?php
//se o method de requisição for POST, o if vai coletar as informaçoes que estão no html sobre o post
//server request method que signfica que você quer pegar um metodo de requisição, que no caso é o POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   //isset  verifica se a variavel foi declarada e se é diferente de null
    if (isset($_POST['userEmail'])) {
       $userEmail= $_POST['userEmail'];
       echo $userEmail;
         //a variavel userEmail recebe o valor do input com o name userEmail
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
  <form method ="POST">
  <label for ="userEmail">
      <p>Endereço de Email</p>
  </label>

  <input type="email" id="userEmail" name="userEmail">
  

  <button type="submit">Cadastrar</button>
  </form>

</body>
</html>

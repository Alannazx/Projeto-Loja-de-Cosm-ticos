<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<link rel="icon" href="/lojacosmeticos_alalet/public/assets/img/favicon.png">
<link rel="stylesheet" href="/lojacosmeticos_alalet/public/assets/css/style.css"><!--Codigo para  css e favicion-->
<title>Login - Loja Pink Honey</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>



</style>
</head>

<body>
<div class="container">

 <div class="left">
 <img src="public/assets/img/sheglamlogin.jpg" alt="Logo">
 </div>
 
 <div class="right">

  <div class="brand">

   <div class="logo">
  <img src="public/assets/img/logophcfundo.png" alt="Logo">
</div>

   <div>
    <h1 class="bodoni-moda-uniquifier"> Loja Pink Honey</h1>
    <small>Acesso ao sistema</small>
   </div>

  </div>

  <form method="post" action="/lojacosmeticos_alalet/index.php?controller=auth&action=login">

   <label>E-mail</label>

   <input 
   type="email" 
   name="email" 
   required 
   autocomplete="username">

   <label>Senha</label>

   <input 
   type="password" 
   name="senha" 
   required 
   autocomplete="current-password">

   <div class="buttons">

    <button class="btn" type="submit">
     Entrar
    </button>

    <a href="index.php?controller=usuario&action=create" class="btn">
     Cadastrar
    </a>

   </div>

  </form>

  <div class="info">
   Dica: Se der erro, confirme se o usuário está 
   <strong>ativo</strong> e se a senha está salva com 
   <strong>hash</strong>.
  </div>

 </div>

</div>

</body>
</html>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
      <link rel="stylesheet" href="public/assets/css/style.css">
    <title>Cadastrar Vendedor</title>


</head>
<body>
<style>
.cadastro{
 margin:20;
 padding:50;
 box-sizing:border-box;
}

body{
 height:100vh;
 display:flex;
 justify-content:center;
 align-items:center;
 font-family: Arial , Helvetica, sans-serif;
}


:root{
 --bg1:#FFD3F0;
 --bg2:#FF277B;
 --card:#FFF7D6;

 --txt:#000;
 --muted:#7D7777;

 --radius:40px;
 --shadow:0 18px 60px rgba(255, 250, 250, 0.45);
}

.container{
 width:1000px;
 height:500px;
 background:var(--card);
 border-radius:var(--radius);

 overflow:hidden;
 display:flex;

 box-shadow:0 15px 40px rgba(255, 255, 255, 0.2);
}


.container h1{
 font-size:45px;
 color:var(--txt);
 text-align: center;
 align-items:center;
}

/* ===============================
  BOTÕES
  =============================== */
.btn{
 display:inline-flex;
 align-items:center;
 justify-content: center;
 padding:20px 16px;
 border-radius:10px;
 border:4px
 cursor:pointer;
 font-weight:800;
 color:#0b0b1a;
  background-color: #F5B6C7;
  }

 .btn:hover{
 filter:brightness(1.05);
}

</style>

    
   
    <form action="index.php?controller=usuario&action=store" method="POST">
    <div class="container">
    <h1>Cadastro de Vendedor</h1>
        <div>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
        </div>
        <br>
       
<div> 
    <button class="btn" type="submit">Cadastrar</button>
 </div> 
 <br>
 <div class="brand">
        <div>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <br>
       
        <div>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
        </div>
        <br>

       </div>
    </form>

    
</body>
</html>

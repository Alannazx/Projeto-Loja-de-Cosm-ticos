<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Login - Loja Pink Honey</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* =========================
  CORES
========================= */
:root{
 --bg1:#FFD3F0;
 --bg2:#FF277B;
 --card:#FFF7D6;

 --txt:#000;
 --muted:#7D7777;

 --pink:#F5B6C7;
 --pink-dark:#F5B6C7;

 --radius:40px;
 --shadow:0 18px 60px rgba(255, 250, 250, 0.45);
}

.logo{
 width:55px;
 height:55px;

 border-radius:50%;

 overflow:hidden;

 display:flex;
 align-items:center;
 justify-content:center;
}

.logo img{
 width:160%;
 height:160%;

 object-fit:cover;

 border-radius:50%;
}



/* =========================
  RESET BÁSICO
========================= */
*{
 margin:0;
 padding:0;
 box-sizing:border-box;
}

body{
 height:100vh;
 display:flex;
 justify-content:center;
 align-items:center;

 font-family: Arial , Helvetica, sans-serif;

 background:
  radial-gradient(900px 500px at 10% 15%, rgba(255, 82, 220, 0.25), transparent 60%),
  radial-gradient(900px 500px at 90% 25%, rgba(234, 0, 255, 0.2), transparent 60%),
  radial-gradient(900px 500px at 50% 90%, rgba(239, 255, 91, 0.12), transparent 60%),
  linear-gradient(180deg, var(--bg1), var(--bg2));
}

 /* ===============================
  LINKS
  =============================== */
a{
 color:var( --pink-dark);
 text-decoration:none;
}

 a:hover{
 text-decoration:underline;
}


/* =========================
  CONTAINER
========================= */
.container{
 width:1200px;
 height:600px;

 background:var(--card);

 border-radius:var(--radius);

 overflow:hidden;

 display:flex;

 box-shadow:0 15px 40px rgba(255, 255, 255, 0.2);
}

/* =========================
  IMAGEM ESQUERDA
========================= */
.left{
 width:50%;

 background:
url('https://moocyn.com/wp-content/uploads/2023/03/a0469987c74a3f9abcf6449f2c0dc2f6.jpg') center/cover no-repeat;
}

.left{
    width:50%;
    height:100%;
    overflow:hidden;
}

.left img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.container{
    width:1000px;
    height:600px;
    display:flex;
    overflow:hidden;
}

/* =========================
  LOGIN DIREITA
========================= */
.right{
 width:50%;
 padding:50px;
 display:flex;
 flex-direction:column;
 justify-content:center;
}

/* =========================
  TOPO
========================= */
.brand{
 display:flex;
 align-items:center;
 gap:15px;
 margin-bottom:30px;
}

.logo{
 width:70px;
 height:70px;
 border-radius:50%;
 background: linear-gradient(135deg,#ff59d6,#ffc4ef);

 box-shadow:0 0 20px rgba(255, 155, 238, 0.3);
}

.brand h1{
 font-size:45px;
 color:var(--txt);
}

.brand small{
 color:var(--muted);
 font-size:16px;
}

/* ===============================
  TOPBAR
  =============================== */
.topbar{
 display:flex;
 align-items:center;
 justify-content:space-between;
 gap:14px;
 margin-bottom:16px;
}

 .pill{
 display:inline-flex;
 align-items:center;
 gap:10px;
 padding:10px 14px;
 border-radius:999px;
 background:rgba(255,255,255,.06);
 border:1px solid rgba(255,255,255,.10);
 color:var(--muted);
}

 .pill strong{
 color:var(--txt);
}

/* ===============================
  FORMULÁRIOS
  =============================== */
label{
 display:block;
 margin:14px 0 6px;
 color:var(--muted);
 font-size:16px;
}

 input, select{
 width:100%;
 padding:18px;
 border-radius:20px;
 border:1px solid rgba(253, 253, 253, 0.1);
 background:rgba(0, 0, 0, 0.25);
 color:var(--txt);
 outline:none;
}

 input:focus, select:focus{
 border-color:rgba(255, 130, 218, 0.55);
 box-shadow:0 0 0 3px rgba(247, 0, 255, 0.79);
}

/* ===============================
  BOTÕES
  =============================== */
.btn{
 display:inline-flex;
 align-items:center;
 justify-content:center;
 padding:10px 16px;
 border-radius:10px;
 border:0;
 cursor:pointer;
 font-weight:800;
 color:#0b0b1a;

  background:linear-gradient(90deg, var(--pink), var(--pink-dark));
 box-shadow:0 10px 30px rgba(250, 49, 210, 0.18);
}

 .btn:hover{
 filter:brightness(1.05);
}

 .btn-secondary{
 background:linear-gradient(90deg, rgba(255,255,255,.18), rgba(255,255,255,.06));
 color:var(--txt);
 border:1px solid rgba(255,255,255,.12);
}



/* =========================
  BOTÕES
========================= */
.buttons{
 margin-top:25px;

 display:flex;
 justify-content:flex-end;
 gap:10px;
}

.btn{
 padding:13px 28px;

 border:none;

 border-radius:12px;

 background:var(--pink);

 color:#000;

 font-weight:bold;

 cursor:pointer;

 text-decoration:none;

 transition:.3s;
}

.btn:hover{
 background:var(--pink-dark);
 transform:scale(1.05);
}

/* ===============================
  NAVEGAÇÃO
  =============================== */
.nav{
 display:flex;
 flex-wrap:wrap;
 gap:10px;
 margin-top:16px;
}

 .nav a{
 padding:10px 14px;
 border-radius:14px;
 background:rgba(0,0,0,.20);
 border:1px solid rgba(255,255,255,.10);
}

 .nav a:hover{
 border-color:rgba(255,43,214,.40);
 box-shadow:0 0 0 3px rgba(255,43,214,.12);
}

/* ===============================
  KPIs / DASHBOARD
  =============================== */
.kpis{
 display:grid;
 grid-template-columns:repeat(4, 1fr);
 gap:14px;
 margin-top:18px;
}

 .kpi{
 padding:16px;
 border-radius:var(--radius);
 background:rgba(255, 255, 255, 0.72);
 border:1px solid rgba(255, 141, 203, 0.08);
}

 .kpi .label{
 color:var(--muted);
 font-size:13px;
}

 .kpi .value{
 font-size:22px;
 font-weight:800;
 margin-top:6px;
}

/* =========================
  TEXTO
========================= */
.info{
 margin-top:25px;

 color:var(--muted);

 font-size:14px;

 line-height:22px;
}
/* ===============================
  FONTE
  =============================== */
@import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

.bodoni-moda-uniquifier {
 font-family: "Bodoni Moda", serif;
 font-optical-sizing: auto;
 font-weight: weight;
 font-style: normal;
}

/* ===============================
  FIM DA FONTE
  =============================== */




/* ===============================
  RESPONSIVO
  =============================== */
@media (max-width:900px){
 .topbar{
  flex-direction:column;
  align-items:flex-start;
 }

  .kpis{
  grid-template-columns:repeat(2, 1fr);
 }
} 
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
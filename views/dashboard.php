<?php
$nome = $_SESSION['nome'] ?? 'Usuário';
$perfil = $_SESSION['perfil'] ?? 'vendedor';
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Dashboard - Loja de Cosméticos Pink Honey</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.dashboard{
 margin:0;
 padding:0;
 box-sizing:border-box;
}


:root{
 --bg1:#FFD3F0;
 --bg2:#FF277B;
 --card:#FFF7D6;
 --txt:#000;
 --muted:#7D7777;
 --radius:40px;

}


body{
 height:100vh;
 display:flex;
 justify-content:center;
 align-items:center;
 font-family: Arial , Helvetica, sans-serif;
 background: linear-gradient(135deg, var(--bg1), var(--bg2));
}

.container{
 width: 1000px;
 min-width: 600px;
 background:var(--card);
 border-radius:var(--radius);
 padding: 50px;
 box-shadow:0 15px 40px rgba(255, 255, 255, 0.2);
}

.topbar{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 40px;
}

.brand h1{
    font-size: 42px;
    margin-bottom: 8px;
}

.brand small{
    color: var(--muted);
    font-size: 18px;
}

.pill{
    background: #ececec;
    padding: 15px 25px;
    border-radius: 20px;
    font-size: 15px;
}

.pill a{
    text-decoration: none;
    color: #ff4f8b;
    font-weight: bold;
}


/* ===============================
    CARD PRINCIPAL
  =============================== */

.card{
    background: rgba(255, 0, 128, 0.25);
    padding: 35px;
    border-radius: 30px;
}

.card h2{
    font-size: 35px;
    margin-bottom: 10px;
}

.card p{
    color: var(--muted);
    margin-bottom: 25px;
}


/* ===============================
  BOTÕES
  =============================== */

.nav{
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    margin-bottom: 35px;
}

.nav a{
    text-decoration: none;
    background: #d8cdb3;
    color: #FF277B;
    padding: 15px 25px;
    border-radius: 15px;
    font-weight: bold;
    transition: 0.3s;
}

.nav a:hover{
    background: #c7b998;
    transform: scale(1.03);
}


/* ===============================
  KPI'S
  =============================== */

.kpis{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

.kpi{
    background: #ececec;
    padding: 20px;
    border-radius: 25px;
}

.label{
    color: var(--muted);
    font-size: 14px;
    margin-bottom: 10px;
}

.value{
    font-size: 35px;
    font-weight: bold;
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
   CARROSSEL
=============================== */

.carousel{
    width:100%;
    height:260px;
    overflow:hidden;
    border-radius:30px;
    margin-bottom:35px;
    position:relative;
}

.slides{
    display:flex;
    width:400%;
    height:100%;
    animation: slide 16s infinite;
}
.slides img{
    width:1000px;
    height:500px;
    object-fit:cover;
    border-radius:30px;
}
.slide{
    width:100%;
    flex-shrink:0;
}

@keyframes slide{

    0%{
        transform:translateX(0);
    }

    20%{
        transform:translateX(0);
    }

    25%{
        transform:translateX(-100%);
    }

    45%{
        transform:translateX(-100%);
    }

    50%{
        transform:translateX(-200%);
    }

    70%{
        transform:translateX(-200%);
    }

    75%{
        transform:translateX(-300%);
    }

    95%{
        transform:translateX(-300%);
    }

    100%{
        transform:translateX(0);
    }
}


/* ===============================
  RESPONSIVO
  =============================== */
@media(max-width: 900px){

    .container{
        width: 95%;
        padding: 30px;
    }

    .topbar{
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
    }

    .kpis{
        grid-template-columns: repeat(2, 1fr);
    }
}

@media(max-width: 600px){

    .kpis{
        grid-template-columns: 1fr;
    }

    .nav{
        flex-direction: column;
    }

    .nav a{
        text-align: center;
    }
}

</style>
</head>

<body>

<div class="container">

    <div class="topbar">

        <div class="brand">
            <h1 class="bodoni-moda-uniquifier">Dashboard</h1>
            <small>Painel do sistema</small>
        </div>

        <div class="pill">
            Logado como 
            <strong><?php echo htmlspecialchars($nome); ?></strong>
            (<?php echo htmlspecialchars($perfil); ?>)
            • 
            <a href="/lojacosmeticos_alalet/index.php?controller=auth&action=logout">
                Sair
            </a>
        </div>

    </div>

    <div class="card">
    <div class="carousel">

<div class="slides">

    <div class="slide">
        <img src="public/assets/img/banner1.png" alt="banner1">
    </div>

    <div class="slide">
        <img src="public/assets/img/banner2.png" alt="banner2">
    </div>

    <div class="slide">
        <img src="public/assets/img/banner3.png" alt="banner3">
    </div>

    <div class="slide">
        <img src="public/assets/img/banner7.png" alt="banner4">
    </div>

</div>

</div>
        <h2 class="bodoni-moda-uniquifier">
            Bem-vindo(a), <?php echo htmlspecialchars($nome); ?>!
        </h2>

        <p>
            Escolha um módulo para continuar.
        </p>

        <div class="nav">

            <a href="/lojacosmeticos_alalet/index.php?controller=produto&action=index">
                Produtos / Categorias
            </a>

            <a href="/lojacosmeticos_alalet/index.php?controller=entrada&action=index">
                Entradas
            </a>

            <a href="/lojacosmeticos_alalet/index.php?controller=venda&action=index">
                Vendas
            </a>

            <a href="/lojacosmeticos_alalet/index.php?controller=relatorio&action=index">
                Relatórios
            </a>

        </div>

        <div class="kpis">

            <div class="kpi">
                <div class="label">Vendas (mês)</div>
                <div class="value">0</div>
            </div>

            <div class="kpi">
                <div class="label">Entradas (mês)</div>
                <div class="value">0</div>
            </div>

            <div class="kpi">
                <div class="label">Estoque baixo</div>
                <div class="value">0</div>
            </div>

            <div class="kpi">
                <div class="label">Produtos</div>
                <div class="value">0</div>
            </div>

        </div>

        <p style="margin-top: 30px; font-size: 14px;">
            Observação: Esses números serão alimentados quando implementarmos os módulos de entradas, vendas e estoque.
        </p>

    </div>

</div>

</body>
</html>
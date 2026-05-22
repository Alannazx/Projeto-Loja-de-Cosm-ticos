<?php
// helper simples para resolver imagem por ID sem usar banco
function imagemProdutoUrl(int $produtoId): string
{
$baseFs = __DIR__ . "/../public/uploads/produtos/";
$baseUrl = "public/uploads/produtos/";
foreach (['jpg','png','webp'] as $ext) {
if (file_exists($baseFs . $produtoId . '.' . $ext)) {
return $baseUrl . $produtoId . '.' . $ext;
}
}
return "public/assets/img/produto_sem_foto.png";
}
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Produtos</title>
<link rel="stylesheet" href="public/assets/css/style.css">
  <style>

.produto{
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
 --radius:35px;

}


body{
 height:100vh;
 display:flex;
 justify-content:center;
 align-items:center;
 font-family: Arial , Helvetica, sans-serif;
 background: linear-gradient(135deg, var(--bg1), var(--bg2));
}




  </style>







</head>
<body>
      <div class="produto">
<div class="header">
<div class="container header-inner">
<div>
<strong>Loja Pink Honey</strong>
<span class="badge">Produtos</span>

</div>
<div class="user">
Olá, <strong><?= htmlspecialchars($_SESSION['nome'] ?? 'Usuário') ?></strong>
<a class="btn btn-ghost" href="index.php?controller=auth&action=logout">Sair</a>
</div>
</div>
</div>
<div class="container grid">
<div class="card">
<h2><?= $editar ? "Editar Produto #".(int)$editar['id'] : "Cadastrar Produto" ?></h2>
<form method="post" action="index.php?controller=produto&action=salvar" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $editar ? (int)$editar['id'] : 0 ?>">
<div class="form-group">
<label>Categoria</label>
<select class="input" name="categoria_id" required>
<option value="">Selecione...</option>
<?php foreach ($categorias as $c): ?>
<option value="<?= (int)$c['id'] ?>"
<?= $editar && (int)$editar['categoria_id'] === (int)$c['id'] ? 'selected' : '' ?>>
<?= htmlspecialchars($c['nome']) ?>
</option>
<?php endforeach; ?>
</select>
</div>
<div class="form-group">
<label>Nome</label>
<input class="input" type="text" name="nome" required
value="<?= $editar ? htmlspecialchars($editar['nome']) : '' ?>">
</div>
<div class="form-group">
<label>Descrição (opcional)</label>
<textarea class="input" name="descricao" rows="3"><?= $editar ?
htmlspecialchars($editar['descricao'] ?? '') : '' ?></textarea>
</div>
<div class="form-group">
<label>Imagem do produto (opcional)</label>
<input class="input" type="file" name="imagem" accept="image/png, image/jpeg, image/webp">
<small class="muted">Formatos: JPG, PNG, WEBP (até 2MB). Salva como ID do produto.</small>
</div>
<div class="actions">
<button class="btn btn-primary" type="submit">Salvar</button>
<a class="btn" href="index.php?controller=produto&action=index">Limpar</a>
</div>
</form>
</div>
<div class="card">
<h2>Lista de Produtos</h2>
<table class="table">
<thead>
<tr>
<th>Imagem</th>
<th>ID</th>
<th>Nome</th>
<th>Categoria</th>
<th>Status</th>

<th style="width:220px;">Ações</th>
</tr>
</thead>
<tbody>
<?php foreach ($produtos as $p): ?>
<tr>
<td>
<img class="thumb" src="<?= imagemProdutoUrl((int)$p['id']) ?>" alt="produto">
</td>
<td>#<?= (int)$p['id'] ?></td>
<td><?= htmlspecialchars($p['nome']) ?></td>
<td><?= htmlspecialchars($p['categoria_nome']) ?></td>
<td>
<?= ((int)$p['ativo'] === 1) ? '<span class="tag ok">Ativo</span>' : '<span class="tag
off">Inativo</span>' ?>
</td>
<td>
<a class="btn" href="index.php?controller=produto&action=index&id=<?= (int)$p['id']
?>">Editar</a>
<?php if ((int)$p['ativo'] === 1): ?>
<a class="btn btn-danger"
href="index.php?controller=produto&action=toggle&id=<?= (int)$p['id'] ?>&ativo=0"
onclick="return confirm('Inativar este produto?')">Inativar</a>
<?php else: ?>
<a class="btn btn-success"
href="index.php?controller=produto&action=toggle&id=<?= (int)$p['id'] ?>&ativo=1">Ativar</a>
<?php endif; ?>
<a class="btn btn-danger"
href="index.php?controller=produto&action=deletar&id=<?= (int)$p['id'] ?>"
onclick="return confirm('⚠️ DELETAR permanentemente? Não há volta!')">Excluir</a>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</div>
</table>
</div>
</div>
</body>
</html>


/////////////////// CÓDIGO DO CHAT ///////////////


            <?php
// helper simples para resolver imagem por ID sem usar banco
function imagemProdutoUrl(int $produtoId): string
{
$baseFs = __DIR__ . "/../public/uploads/produtos/";
$baseUrl = "public/uploads/produtos/";
foreach (['jpg','png','webp'] as $ext) {
if (file_exists($baseFs . $produtoId . '.' . $ext)) {
return $baseUrl . $produtoId . '.' . $ext;
}
}
return "public/assets/img/produto_sem_foto.png";
}
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Produtos</title>
<link rel="stylesheet" href="public/assets/css/style.css">
  <style>

.produto{
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
 --radius:35px;

}


body{
    min-height:100vh;
    font-family:Arial, Helvetica, sans-serif;
    background:linear-gradient(135deg,var(--bg1),var(--bg2));
    padding:40px;
}

/* HEADER */

.header{
    width:100%;
    margin-bottom:30px;
}

.header-inner{
    max-width:1400px;
    margin:auto;
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:var(--card);
    padding:20px 30px;
    border-radius:25px;
}

.logo{
    display:flex;
    align-items:center;
    gap:15px;
}

.logo h1{
    font-size:28px;
}

.badge{
    background:#f3b6c9;
    padding:8px 15px;
    border-radius:12px;
    font-weight:bold;
}

.user{
    display:flex;
    align-items:center;
    gap:20px;
}

/* LAYOUT */

.grid{
    max-width:1400px;
    margin:auto;
    display:grid;
    grid-template-columns:400px 1fr;
    gap:30px;
}

.card{
    background:var(--card);
    border-radius:35px;
    padding:35px;
    box-shadow:0 15px 40px rgba(0,0,0,0.15);
}

.card h2{
    margin-bottom:25px;
    font-size:32px;
}

/* FORM */

.form-group{
    display:flex;
    flex-direction:column;
    margin-bottom:20px;
}

.form-group label{
    margin-bottom:8px;
    font-weight:bold;
    color:var(--muted);
}

.input{
    width:100%;
    padding:15px;
    border:none;
    border-radius:18px;
    background:#c8c1ab;
    font-size:15px;
    outline:none;
}

textarea.input{
    resize:none;
}

.muted{
    margin-top:8px;
    font-size:12px;
    color:var(--muted);
}

/* BOTÕES */

.actions{
    display:flex;
    gap:15px;
    margin-top:25px;
}

.btn{
    text-decoration:none;
    border:none;
    padding:14px 22px;
    border-radius:14px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
    background:#f3b6c9;
    color:#000;
}

.btn:hover{
    transform:scale(1.03);
}

.btn-danger{
    background:#ff9aa2;
}

.btn-success{
    background:#b8f5b1;
}

.btn-ghost{
    background:#ececec;
}

/* TABELA */

.table{
    width:100%;
    border-collapse:collapse;
}

.table th{
    text-align:left;
    padding-bottom:15px;
    font-size:15px;
}

.table td{
    padding:15px 10px;
    border-top:1px solid rgba(0,0,0,0.1);
    vertical-align:middle;
}

.thumb{
    width:70px;
    height:70px;
    object-fit:cover;
    border-radius:15px;
    background:#ddd;
}

.tag{
    padding:8px 12px;
    border-radius:12px;
    font-size:13px;
    font-weight:bold;
}

.ok{
    background:#b8f5b1;
}

.off{
    background:#ffb4b4;
}

/* RESPONSIVO */

@media(max-width:1100px){

    .grid{
        grid-template-columns:1fr;
    }
}

@media(max-width:700px){

    body{
        padding:20px;
    }

    .header-inner{
        flex-direction:column;
        gap:20px;
    }

    .card h2{
        font-size:25px;
    }

    .actions{
        flex-direction:column;
    }

    .table{
        display:block;
        overflow-x:auto;
    }
}

</style>
</head>

<body>

<div class="header">

    <div class="header-inner">

        <div class="logo">
            <h1>Loja Pink Honey</h1>
            <span class="badge">Produtos</span>
        </div>

        <div class="user">
            Olá,
            <strong><?= htmlspecialchars($_SESSION['nome'] ?? 'Usuário') ?></strong>

            <a class="btn btn-ghost"
               href="index.php?controller=auth&action=logout">
                Sair
            </a>
        </div>

    </div>

</div>

<div class="grid">

    <!-- FORMULÁRIO -->

    <div class="card">

        <h2>
            <?= $editar ? "Editar Produto #".(int)$editar['id'] : "Cadastrar Produto" ?>
        </h2>

        <form method="post"
              action="index.php?controller=produto&action=salvar"
              enctype="multipart/form-data">

            <input type="hidden"
                   name="id"
                   value="<?= $editar ? (int)$editar['id'] : 0 ?>">

            <div class="form-group">

                <label>Categoria</label>

                <select class="input" name="categoria_id" required>

                    <option value="">Selecione...</option>

                    <?php foreach ($categorias as $c): ?>

                    <option value="<?= (int)$c['id'] ?>"
                    <?= $editar && (int)$editar['categoria_id'] === (int)$c['id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($c['nome']) ?>
                    </option>

                    <?php endforeach; ?>

                </select>

            </div>

            <div class="form-group">

                <label>Nome</label>

                <input class="input"
                       type="text"
                       name="nome"
                       required
                       value="<?= $editar ? htmlspecialchars($editar['nome']) : '' ?>">

            </div>

            <div class="form-group">

                <label>Descrição (opcional)</label>

                <textarea class="input"
                          name="descricao"
                          rows="4"><?= $editar ? htmlspecialchars($editar['descricao'] ?? '') : '' ?></textarea>

            </div>

            <div class="form-group">

                <label>Imagem do produto</label>

                <input class="input"
                       type="file"
                       name="imagem"
                       accept="image/png, image/jpeg, image/webp">

                <small class="muted">
                    Formatos: JPG, PNG e WEBP (até 2MB)
                </small>

            </div>

            <div class="actions">

                <button class="btn" type="submit">
                    Salvar
                </button>

                <a class="btn btn-ghost"
                   href="index.php?controller=produto&action=index">
                    Limpar
                </a>

            </div>

        </form>

    </div>

    <!-- TABELA -->

    <div class="card">

        <h2>Lista de Produtos</h2>

        <table class="table">

            <thead>

                <tr>
                    <th>Imagem</th>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>

            </thead>

            <tbody>

                <?php foreach ($produtos as $p): ?>

                <tr>

                    <td>
                        <img class="thumb"
                             src="<?= imagemProdutoUrl((int)$p['id']) ?>"
                             alt="produto">
                    </td>

                    <td>#<?= (int)$p['id'] ?></td>

                    <td><?= htmlspecialchars($p['nome']) ?></td>

                    <td><?= htmlspecialchars($p['categoria_nome']) ?></td>

                    <td>
                        <?= ((int)$p['ativo'] === 1)
                            ? '<span class="tag ok">Ativo</span>'
                            : '<span class="tag off">Inativo</span>' ?>
                    </td>

                    <td>

                        <a class="btn"
                           href="index.php?controller=produto&action=index&id=<?= (int)$p['id'] ?>">
                            Editar
                        </a>

                        <?php if ((int)$p['ativo'] === 1): ?>

                        <a class="btn btn-danger"
                           href="index.php?controller=produto&action=toggle&id=<?= (int)$p['id'] ?>&ativo=0">
                            Inativar
                        </a>

                        <?php else: ?>

                        <a class="btn btn-success"
                           href="index.php?controller=produto&action=toggle&id=<?= (int)$p['id'] ?>&ativo=1">
                            Ativar
                        </a>

                        <?php endif; ?>

                    </td>

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>

</div>

</body>
</html>

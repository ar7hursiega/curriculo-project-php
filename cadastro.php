<?php
// cadastro.php — formulário principal
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Cadastro de Currículo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container">
    <a class="navbar-brand" href="index.php">Gerador de Currículo</a>
    <div>
      <a class="btn btn-light btn-sm" href="index.php">Tela Inicial</a>
    </div>
  </div>
</nav>

<div class="container mb-5">
  <h3>Cadastro de Currículo</h3>
  <form id="cvForm" action="process.php" method="post">

    <!-- Dados Pessoais -->
    <div class="card mb-3 p-3">
      <h5>Dados Pessoais</h5>
      <div class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Nome completo</label>
          <input name="nome" required class="form-control" />
        </div>
        <div class="col-md-3">
          <label class="form-label">Data de nascimento</label>
          <input id="dob" name="data_nascimento" type="date" required class="form-control" />
        </div>
        <div class="col-md-3">
          <label class="form-label">Idade</label>
          <input id="idade" name="idade" readonly class="form-control" />
        </div>
        <div class="col-md-6">
          <label class="form-label">E-mail</label>
          <input name="email" type="email" class="form-control" />
        </div>
        <div class="col-md-6">
          <label class="form-label">Telefone</label>
          <input name="telefone" class="form-control" />
        </div>
      </div>
    </div>

    <!-- Formação -->
    <div class="card mb-3 p-3">
      <h5>Formação Acadêmica</h5>
      <div id="formacoesContainer"></div>
      <button id="addFormacao" type="button" class="btn btn-outline-primary btn-sm mt-2">+ Adicionar formação</button>
    </div>

    <!-- Experiências -->
    <div class="card mb-3 p-3">
      <h5>Experiências Profissionais</h5>
      <div id="experienciasContainer"></div>
      <button id="addExperiencia" type="button" class="btn btn-outline-primary btn-sm mt-2">+ Adicionar experiência</button>
    </div>

    <!-- Habilidades -->
    <div class="card mb-3 p-3">
      <h5>Habilidades</h5>
      <input name="habilidades" placeholder="Separe por vírgula: ex: HTML, CSS, PHP" class="form-control" />
    </div>

    <!-- Referências -->
    <div class="card mb-3 p-3">
      <h5>Referências Pessoais</h5>
      <div id="refsContainer"></div>
      <button id="addRef" type="button" class="btn btn-outline-primary btn-sm mt-2">+ Adicionar referência</button>
    </div>

    <div class="d-flex gap-2">
      <button type="submit" class="btn btn-success">Gerar Currículo</button>
      <a href="index.php" class="btn btn-secondary">Voltar ao Início</a>
    </div>
  </form>
</div>

<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

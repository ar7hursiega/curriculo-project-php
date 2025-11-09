<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Início - Gerador de Currículos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #007bff, #6610f2);
      color: white;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }
    .btn-custom {
      background-color: #fff;
      color: #007bff;
      font-weight: 600;
      border-radius: 30px;
      padding: 12px 30px;
      transition: 0.3s;
    }
    .btn-custom:hover {
      background-color: #e9ecef;
      transform: scale(1.05);
    }
  </style>
</head>
<body>

  <h1 class="mb-3">Bem-vindo ao Gerador de Currículos</h1>
  <p class="lead mb-4">Monte seu currículo de forma rápida, prática e profissional.</p>

  <a href="cadastro.php" class="btn btn-custom btn-lg">Começar Agora</a>

  <footer class="mt-5 text-light-50">
    <small>Desenvolvido por Arthur Siega © <?=date('Y')?></small>
  </footer>

</body>
</html>

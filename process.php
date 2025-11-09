<?php
function esc($s) {
  return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8');
}

// ler POST
$nome = $_POST['nome'] ?? '';
$data_nasc = $_POST['data_nascimento'] ?? '';
$idade = $_POST['idade'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$habilidades = $_POST['habilidades'] ?? '';
$experiencias = $_POST['experiencias'] ?? [];
$referencias = $_POST['referencias'] ?? [];
$formacoes = $_POST['formacoes'] ?? [];

// salvar registro
$registro = [
  'id' => uniqid(),
  'nome' => $nome,
  'data_nascimento' => $data_nasc,
  'idade' => $idade,
  'email' => $email,
  'telefone' => $telefone,
  'habilidades' => $habilidades,
  'experiencias' => $experiencias,
  'referencias' => $referencias,
  'formacoes' => $formacoes,
  'created_at' => date('c')
];

$file = __DIR__ . '/data/cvs.json';
if (!file_exists(dirname($file))) mkdir(dirname($file), 0777, true);
$curriculos = file_exists($file) ? (json_decode(file_get_contents($file), true) ?: []) : [];
$curriculos[] = $registro;
file_put_contents($file, json_encode($curriculos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Currículo — <?= esc($nome) ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background:#f8f9fa; padding:20px; }
    .card-cv { max-width:900px; margin:0 auto; background:#fff; padding:28px; box-shadow:0 0 8px rgba(0,0,0,0.06); }
    .section-title { font-weight:700; margin-top:14px; }
    @media print {.no-print { display:none; } body { background:#fff; }}
  </style>
</head>
<body>
  <div class="no-print mb-3 d-flex gap-2">
    <a href="index.php" class="btn btn-secondary">Tela Inicial</a>
    <a href="cadastro.php" class="btn btn-outline-secondary">Novo Currículo</a>
    <button onclick="window.print();" class="btn btn-primary">Imprimir / Salvar PDF</button>
  </div>

  <div class="card-cv">
    <h2><?= esc($nome) ?></h2>
    <p><strong>Idade:</strong> <?= esc($idade) ?> • <strong>Data de Nasc.:</strong> <?= esc($data_nasc) ?></p>
    <p><strong>E-mail:</strong> <?= esc($email) ?> • <strong>Telefone:</strong> <?= esc($telefone) ?></p>

    <div>
      <div class="section-title">Formação Acadêmica</div>
      <?php if (!empty($formacoes)): ?>
        <?php foreach($formacoes as $f): ?>
          <p><strong><?= esc($f['curso'] ?? '') ?></strong><br><?= nl2br(esc($f['resumo'] ?? '')) ?></p>
        <?php endforeach; ?>
      <?php else: ?>
        <p>Sem formações cadastradas.</p>
      <?php endif; ?>
    </div>

    <div>
      <div class="section-title">Experiências Profissionais</div>
      <?php if (!empty($experiencias)): ?>
        <?php foreach($experiencias as $exp): ?>
          <div class="mb-2">
            <strong><?= esc($exp['cargo'] ?? '') ?> — <?= esc($exp['empresa'] ?? '') ?></strong>
            <div><em><?= esc($exp['periodo'] ?? '') ?></em></div>
            <div><?= nl2br(esc($exp['descricao'] ?? '')) ?></div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p>Sem experiências cadastradas.</p>
      <?php endif; ?>
    </div>

    <div>
      <div class="section-title">Habilidades</div>
      <p><?= esc($habilidades) ?></p>
    </div>

    <div>
      <div class="section-title">Referências</div>
      <?php if (!empty($referencias)): ?>
        <ul>
        <?php foreach($referencias as $ref): ?>
          <li><?= esc($ref['nome'] ?? '') ?> — <?= esc($ref['contato'] ?? '') ?></li>
        <?php endforeach; ?>
        </ul>
      <?php else: ?>
        <p>Sem referências cadastradas.</p>
      <?php endif; ?>
    </div>

    <div class="text-muted mt-4 small">Gerado em <?= date('d/m/Y H:i') ?></div>
  </div>
</body>
</html>

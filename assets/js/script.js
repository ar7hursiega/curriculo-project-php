document.addEventListener('DOMContentLoaded', function() {
  const expContainer = document.getElementById('experienciasContainer');
  const addExpBtn = document.getElementById('addExperiencia');
  const refsContainer = document.getElementById('refsContainer');
  const addRefBtn = document.getElementById('addRef');
  const formacoesContainer = document.getElementById('formacoesContainer');
  const addFormacaoBtn = document.getElementById('addFormacao');

  function createExperience(index = Date.now()) {
    const div = document.createElement('div');
    div.className = 'mb-2 border p-2 rounded';
    div.innerHTML = `
      <div class="row g-2">
        <div class="col-md-6"><input name="experiencias[${index}][cargo]" placeholder="Cargo" class="form-control" /></div>
        <div class="col-md-3"><input name="experiencias[${index}][empresa]" placeholder="Empresa" class="form-control" /></div>
        <div class="col-md-3"><input name="experiencias[${index}][periodo]" placeholder="Período" class="form-control" /></div>
        <div class="col-12 mt-2"><textarea name="experiencias[${index}][descricao]" placeholder="Descrição das atividades" class="form-control" rows="2"></textarea></div>
        <div class="col-12 text-end mt-1"><button type="button" class="btn btn-danger btn-sm remove-btn">Remover</button></div>
      </div>`;
    div.querySelector('.remove-btn').addEventListener('click', () => div.remove());
    return div;
  }

  function createRef(index = Date.now()) {
    const div = document.createElement('div');
    div.className = 'mb-2 border p-2 rounded';
    div.innerHTML = `
      <div class="row g-2">
        <div class="col-md-6"><input name="referencias[${index}][nome]" placeholder="Nome" class="form-control" /></div>
        <div class="col-md-6"><input name="referencias[${index}][contato]" placeholder="Contato (telefone/e-mail)" class="form-control" /></div>
        <div class="col-12 text-end mt-1"><button type="button" class="btn btn-danger btn-sm remove-btn">Remover</button></div>
      </div>`;
    div.querySelector('.remove-btn').addEventListener('click', () => div.remove());
    return div;
  }

  function createFormacao(index = Date.now()) {
    const div = document.createElement('div');
    div.className = 'mb-2 border p-2 rounded';
    div.innerHTML = `
      <div class="row g-2">
        <div class="col-md-6"><input name="formacoes[${index}][curso]" placeholder="Curso / Instituição" class="form-control" /></div>
        <div class="col-md-6"><textarea name="formacoes[${index}][resumo]" placeholder="Resumo ou detalhes (opcional)" class="form-control" rows="2"></textarea></div>
        <div class="col-12 text-end mt-1"><button type="button" class="btn btn-danger btn-sm remove-btn">Remover</button></div>
      </div>`;
    div.querySelector('.remove-btn').addEventListener('click', () => div.remove());
    return div;
  }

  addExpBtn.addEventListener('click', () => expContainer.appendChild(createExperience()));
  addRefBtn.addEventListener('click', () => refsContainer.appendChild(createRef()));
  addFormacaoBtn.addEventListener('click', () => formacoesContainer.appendChild(createFormacao()));

  expContainer.appendChild(createExperience('default1'));
  refsContainer.appendChild(createRef('default1'));
  formacoesContainer.appendChild(createFormacao('default1'));

  // cálculo automático da idade
  const dob = document.getElementById('dob');
  const idadeInput = document.getElementById('idade');
  dob.addEventListener('change', () => {
    const d = new Date(dob.value);
    if (isNaN(d)) { idadeInput.value = ''; return; }
    const today = new Date();
    let age = today.getFullYear() - d.getFullYear();
    const m = today.getMonth() - d.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < d.getDate())) age--;
    idadeInput.value = age;
  });
});

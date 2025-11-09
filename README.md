# Gerador de Currículos em PHP

![PHP](https://img.shields.io/badge/PHP-7.4-blue)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple)
![JavaScript](https://img.shields.io/badge/JavaScript-ES6-yellow)
![HTML5](https://img.shields.io/badge/HTML5-orange)
![CSS3](https://img.shields.io/badge/CSS3-blue)

---

## 🎯 Descrição do Projeto

Este projeto é um **Gerador de Currículos** desenvolvido em **PHP, HTML, CSS e JavaScript**, utilizando o **Bootstrap 5** para estilização.
Ele permite que o usuário preencha dados pessoais, formações acadêmicas, experiências profissionais, habilidades e referências, gerando um currículo pronto para impressão ou download em PDF.

Principais funcionalidades:

* Cálculo automático de idade a partir da data de nascimento.
* Adição dinâmica de **formações acadêmicas**, **experiências profissionais** e **referências pessoais**.
* Interface responsiva, limpa e intuitiva.
* Armazenamento de currículos em JSON (`data/cvs.json`).
* Botão para gerar e imprimir o currículo usando `window.print()`.

---

## ⚡ Tecnologias Utilizadas

* **PHP** – Processamento do formulário e geração do currículo.
* **HTML/CSS** – Estrutura e estilo das páginas.
* **JavaScript (ES6)** – Campos dinâmicos e cálculo de idade.
* **Bootstrap 5** – Responsividade e componentes visuais.
* **JSON** – Armazenamento local dos currículos.

---

## 📂 Estrutura do Projeto

```
curriculo-project/
│
├─ index.php                    # Página inicial / formulário
├─ cadastro.php                 # Página de cadastro de currículos
├─ process.php                  # Processa os dados do formulário e gera o currículo
├─ data/
│  └─ cvs.json                  # Armazena os currículos gerados
├─ assets/
│  ├─ css/
│  │  └─ style.css              # Estilos customizados
│  └─ js/
│     └─ script.js              # Scripts para campos dinâmicos e cálculo de idade
├─ README.md                    # Este arquivo
└─ Esboco_Telas_Gerador_Curriculos.pdf # Esboço visual do sistema
```

---

## 🚀 Como Executar Localmente

1. Instale o **XAMPP** ou outro servidor local com PHP.
2. Copie a pasta do projeto para:

   ```
   C:\xampp\htdocs\curriculo-project
   ```
3. Abra o **XAMPP Control Panel** e inicie o **Apache**.
4. No navegador, acesse:

   ```
   http://localhost/curriculo-project/index.php
   ```

   ou

   ```
   http://localhost/curriculo-project/cadastro.php
   ```
5. Preencha o formulário, adicione experiências, formações e referências, e clique em **Gerar Currículo**.
6. Clique em **Imprimir / Salvar PDF** para gerar o currículo final.

---

## 👨‍💻 Autor

**Arthur Siega** – Projeto desenvolvido para fins acadêmicos.

---

## 📌 Observações

* Todas as informações preenchidas no formulário são armazenadas **localmente** em JSON.
* Para mais detalhes sobre o funcionamento, consulte o arquivo `Esboco_Telas_Gerador_Curriculos.pdf`.

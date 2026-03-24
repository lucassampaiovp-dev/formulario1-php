<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Exercícios - Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    h1 { font-weight: 700; }
    h5 { font-weight: 700; }
    .section { background: #fff; border: 1px solid #dee2e6; border-radius: 8px; padding: 24px; margin-bottom: 40px; }
    .form-section-title { font-weight: 700; margin-bottom: 20px; }
  </style>
</head>
<body>
<div class="container py-5">

  <h1 class="text-center mb-5">Lista de Exercícios - Bootstrap</h1>

  <!-- FORMULÁRIO 1 -->
  <h5 class="form-section-title">Formulário 1</h5>
  <div class="section">
    <div class="row g-3">
      <div class="col-md-4">
        <label class="form-label">First name</label>
        <input type="text" class="form-control" placeholder="Mark">
      </div>
      <div class="col-md-4">
        <label class="form-label">Last name</label>
        <input type="text" class="form-control" placeholder="Otto">
      </div>
      <div class="col-md-4">
        <label class="form-label">Username</label>
        <div class="input-group">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" placeholder="Username">
        </div>
      </div>
      <div class="col-md-6">
        <label class="form-label">City</label>
        <input type="text" class="form-control" placeholder="City">
      </div>
      <div class="col-md-3">
        <label class="form-label">State</label>
        <input type="text" class="form-control" placeholder="State">
      </div>
      <div class="col-md-3">
        <label class="form-label">Zip</label>
        <input type="text" class="form-control" placeholder="Zip">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="terms1">
          <label class="form-check-label" for="terms1">Agree to terms and conditions</label>
        </div>
      </div>
      <div class="col-12">
        <button class="btn btn-primary">Submit form</button>
      </div>
    </div>
  </div>

  <!-- FORMULÁRIO 2 -->
  <h5 class="form-section-title">Formulário 2</h5>
  <div class="section">
    <div class="row g-3">
      <div class="col-md-1">
        <label class="form-label">Código</label>
        <input type="text" class="form-control" value="32">
      </div>
      <div class="col-md-3">
        <label class="form-label">Nome</label>
        <input type="text" class="form-control" placeholder="Nome Completo do Cliente">
      </div>
      <div class="col-md-4">
        <label class="form-label">E-mail</label>
        <input type="email" class="form-control" placeholder="cliente@dominio.com">
      </div>
      <div class="col-md-4">
        <label class="form-label">CPF</label>
        <input type="text" class="form-control" placeholder="Só números">
      </div>
      <div class="col-md-2">
        <label class="form-label">Nº Celular</label>
        <input type="text" class="form-control" placeholder="Nº do celular">
      </div>
      <div class="col-md-2">
        <label class="form-label">Nº Telefone fixo</label>
        <input type="text" class="form-control" placeholder="Nº telefone">
      </div>
      <div class="col-md-2">
        <label class="form-label">CEP</label>
        <input type="text" class="form-control" placeholder="ex:88308070">
      </div>
      <div class="col-md-3">
        <label class="form-label">Logradouro</label>
        <input type="text" class="form-control" placeholder="ex:Rua 1400,">
      </div>
      <div class="col-md-1">
        <label class="form-label">Nº</label>
        <input type="text" class="form-control" placeholder="Nº">
      </div>
      <div class="col-md-2">
        <label class="form-label">Bairro</label>
        <input type="text" class="form-control" placeholder="Bairro">
      </div>
      <div class="col-md-3">
        <label class="form-label">Cidade</label>
        <input type="text" class="form-control" placeholder="Cidade">
      </div>
      <div class="col-md-1">
        <label class="form-label">UF</label>
        <input type="text" class="form-control" placeholder="UF">
      </div>
      <div class="col-md-2">
        <label class="form-label">Status</label>
        <select class="form-select">
          <option>Selecione</option>
          <option>Ativo</option>
          <option>Inativo</option>
        </select>
      </div>
      <div class="col-12 d-flex justify-content-end gap-2">
        <button class="btn btn-secondary">Resetar</button>
        <button class="btn btn-success">Próximo</button>
      </div>
    </div>
  </div>

  <!-- FORMULÁRIO 3 -->
  <h5 class="form-section-title">Formulário 3</h5>
  <div class="section">
    <h4 class="text-center mb-4">Sample Form</h4>
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label">Partner Name</label>
        <input type="text" class="form-control">
      </div>
      <div class="col-md-6">
        <label class="form-label">Partner Email ID</label>
        <input type="email" class="form-control">
      </div>
      <div class="col-md-6">
        <label class="form-label">Partner Legal Name</label>
        <input type="text" class="form-control">
      </div>
      <div class="col-md-6">
        <label class="form-label">Partner Mobile</label>
        <input type="text" class="form-control">
      </div>
      <div class="col-12">
        <label class="form-label">Partner Address</label>
        <textarea class="form-control" rows="3"></textarea>
      </div>
      <div class="col-md-6">
        <label class="form-label">Contract Start Date</label>
        <input type="text" class="form-control" placeholder="Date Start">
      </div>
      <div class="col-md-6">
        <label class="form-label">Contract Expiry Date</label>
        <input type="text" class="form-control" placeholder="Date End">
      </div>
      <div class="col-md-6">
        <label class="form-label">Minimum Loan Amount</label>
        <input type="number" class="form-control">
      </div>
      <div class="col-md-6">
        <label class="form-label">Maximum Loan Amount</label>
        <input type="number" class="form-control">
      </div>
      <div class="col-md-6">
        <label class="form-label">Interest Rate</label>
        <input type="number" class="form-control">
      </div>
      <div class="col-md-6">
        <label class="form-label">Deposit Amount</label>
        <input type="number" class="form-control">
      </div>
      <div class="col-12 text-center">
        <button class="btn btn-success px-4">Save</button>
      </div>
    </div>
  </div>

  <!-- FORMULÁRIO 4 -->
  <h5 class="form-section-title">Formulário 4</h5>
  <div class="section">
    <h4 class="mb-4">Novo Usuário</h4>
    <div class="row g-3">
      <div class="col-12">
        <label class="form-label">Nome:</label>
        <input type="text" class="form-control" placeholder="Informe o nome...">
      </div>
      <div class="col-md-3">
        <label class="form-label">CPF:</label>
        <input type="text" class="form-control" placeholder="Informe o cpf">
      </div>
      <div class="col-md-6">
        <label class="form-label">Endereço:</label>
        <input type="text" class="form-control" placeholder="Informe o endereço...">
      </div>
      <div class="col-md-3">
        <label class="form-label">Nível:</label>
        <select class="form-select">
          <option>---</option>
          <option>Admin</option>
          <option>Usuário</option>
        </select>
      </div>
      <div class="col-md-4">
        <label class="form-label">Email:</label>
        <input type="email" class="form-control" placeholder="Informe o email...">
      </div>
      <div class="col-md-4">
        <label class="form-label">Senha:</label>
        <input type="password" class="form-control" placeholder="Informe a senha...">
      </div>
      <div class="col-md-4">
        <label class="form-label">Status:</label>
        <select class="form-select">
          <option>---</option>
          <option>Ativo</option>
          <option>Inativo</option>
        </select>
      </div>
      <div class="col-12 d-flex justify-content-end gap-2">
        <button class="btn btn-success">Enviar</button>
        <button class="btn btn-secondary">Cancelar</button>
      </div>
    </div>
  </div>

  <!-- FORMULÁRIO 5 -->
  <h5 class="form-section-title">Formulário 5</h5>
  <div class="section" style="max-width: 480px;">
    <h5 class="mb-3">Billing address</h5>
    <div class="row g-3">
      <div class="col-6">
        <label class="form-label">First name</label>
        <input type="text" class="form-control">
      </div>
      <div class="col-6">
        <label class="form-label">Last name</label>
        <input type="text" class="form-control">
      </div>
      <div class="col-12">
        <label class="form-label">Username</label>
        <div class="input-group">
          <span class="input-group-text">@</span>
          <input type="text" class="form-control" placeholder="Username">
        </div>
      </div>
      <div class="col-12">
        <label class="form-label">Email <span class="text-muted">(Optional)</span></label>
        <input type="email" class="form-control" placeholder="you@example.com">
      </div>
      <div class="col-12">
        <label class="form-label">Address</label>
        <input type="text" class="form-control" placeholder="1234 Main St">
      </div>
      <div class="col-12">
        <label class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
        <input type="text" class="form-control" placeholder="Apartment or suite">
      </div>
      <div class="col-md-5">
        <label class="form-label">Country</label>
        <select class="form-select">
          <option>Choose...</option>
          <option>Brasil</option>
          <option>USA</option>
        </select>
      </div>
      <div class="col-md-4">
        <label class="form-label">State</label>
        <select class="form-select">
          <option>Choose...</option>
          <option>SP</option>
          <option>RJ</option>
        </select>
      </div>
      <div class="col-md-3">
        <label class="form-label">Zip</label>
        <input type="text" class="form-control">
      </div>
    </div>
  </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<Header></Header>

<nav>
    <div class="logoNav">
        <img src="logo.png" alt="logofarmacia" style="width: 100px; height: auto;">
    </div>
    
    <h1 style="text-align: center;">Farmácia Swag</h1>
      
      <div class="nav nav-tabs justify-content-end" id="nav-tab" role="tablist">
    
      <a href="login.php" class="nav nav-tabs justify-content-end">
      <button class="nav-link bg-success" class="btn btn-success" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-login" type="button" role="tab" aria-controls="nav-login" aria-selected="true">Login</button>
      </a>
    
      <a href="cadastro.php" class="nav nav-tabs justify-content-end">
      <button class="nav-link bg-success" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-cadastro" type="button" role="tab" aria-controls="nav-cadastro" aria-selected="false">Cadastro</button>
      </a>
    
      <button class="nav-link active bg-success" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-commerce" type="button" role="tab" aria-controls="nav-commerce" aria-selected="false">Área comercial</button>
    
      <a href="sobre.php" class="nav nav-tabs justify-content-end">
      <button class="nav-link bg-success" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-sobre" type="button" role="tab" aria-controls="nav-sobre" aria-selected="false">Sobre</button>
      </a>
    </div>
</nav>

<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">...</div>
</div>

<body>
  <div class="p-1 bg-success-subtle text-success-emphasis">
    <h1>Sistema de Farmácia</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </div>
</body>
</html>
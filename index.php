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

    <section>

      <form class="d-flex" role="search">
  <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
  <button class="btn btn-outline-success" type="submit">Adicionar</button>
</form>
 <div class="container my-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    
    <div class="col">
      <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
        <div class="card-body">
          <h2 class="card-title h5 text-primary mb-3">Losartana Potássica</h2>
          <img src="Losartana.jpg" class="img-fluid rounded Losartana.jpg" alt="Caixa do medicamento Losartana Potássica">
          <button onclick="adicionarAoCarrinho('Losartana Potássica')" class="stretched-link btn p-0 border-0 opacity-0 w-100 h-100 position-absolute top-0 start-0" aria-label="Adicionar Losartana Potássica ao carrinho"></button>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
        <div class="card-body">
          <h2 class="card-title h5 text-primary mb-3">Dipirona Sódica</h2>
          <img src="dipirona.jpg" class="img-fluid rounded Dipirona" alt="Caixa do medicamento Dipirona Sódica">
          <button onclick="adicionarAoCarrinho('Dipirona Sódica')" class="stretched-link btn p-0 border-0 opacity-0 w-100 h-100 position-absolute top-0 start-0" aria-label="Adicionar Dipirona Sódica ao carrinho"></button>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
        <div class="card-body">
          <h2 class="card-title h5 text-primary mb-3">Ibuprofeno</h2>
          <img src="Ibuprofeno.jpg" class="img-fluid rounded Ibuprofeno" alt="Caixa do medicamento Ibuprofeno">
          <button onclick="adicionarAoCarrinho('Ibuprofeno')" class="stretched-link btn p-0 border-0 opacity-0 w-100 h-100 position-absolute top-0 start-0" aria-label="Adicionar Ibuprofeno ao carrinho"></button>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
        <div class="card-body">
          <h2 class="card-title h5 text-primary mb-3">Sinvastatina</h2>
          <img src="sinvastatina.jpg" class="img-fluid rounded sinvastatina" alt="Caixa do medicamento Sinvastatina">
          <button onclick="adicionarAoCarrinho('Sinvastatina')" class="stretched-link btn p-0 border-0 opacity-0 w-100 h-100 position-absolute top-0 start-0" aria-label="Adicionar Sinvastatina ao carrinho"></button>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
        <div class="card-body">
          <h2 class="card-title h5 text-primary mb-3">Omeprazol</h2>
          <img src="omeprazol.jpg" class="img-fluid rounded omeprazol" alt="Caixa do medicamento Omeprazol">
          <button onclick="adicionarAoCarrinho('Omeprazol')" class="stretched-link btn p-0 border-0 opacity-0 w-100 h-100 position-absolute top-0 start-0" aria-label="Adicionar Omeprazol ao carrinho"></button>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
        <div class="card-body">
          <h2 class="card-title h5 text-primary mb-3">Amoxicilina</h2>
          <img src="amoxicilina.jpg" class="img-fluid rounded amoxicilina" alt="Caixa do medicamento Amoxicilina">
          <button onclick="adicionarAoCarrinho('Amoxicilina')" class="stretched-link btn p-0 border-0 opacity-0 w-100 h-100 position-absolute top-0 start-0" aria-label="Adicionar Amoxicilina ao carrinho"></button>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
        <div class="card-body">
          <h2 class="card-title h5 text-primary mb-3">Paracetamol</h2>
          <img src="paracetamol.jpg" class="img-fluid rounded paracetamol" alt="Caixa do medicamento Paracetamol">
          <button onclick="adicionarAoCarrinho('Paracetamol')" class="stretched-link btn p-0 border-0 opacity-0 w-100 h-100 position-absolute top-0 start-0" aria-label="Adicionar Paracetamol ao carrinho"></button>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
        <div class="card-body">
          <h2 class="card-title h5 text-primary mb-3">Azitromicina</h2>
          <img src="azitromicina.jpg" class="img-fluid rounded azitromicina" alt="Caixa do medicamento Azitromicina">
          <button onclick="adicionarAoCarrinho('Azitromicina')" class="stretched-link btn p-0 border-0 opacity-0 w-100 h-100 position-absolute top-0 start-0" aria-label="Adicionar Azitromicina ao carrinho"></button>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100 text-center shadow-sm position-relative" style="cursor: pointer;">
        <div class="card-body">
          <h2 class="card-title h5 text-primary mb-3">Tadalafila</h2>
          <img src="tadalafila.jpg" class="img-fluid rounded tadalafila" alt="Caixa do medicamento Tadalafila">
          <button onclick="adicionarAoCarrinho('Tadalafila')" class="stretched-link btn p-0 border-0 opacity-0 w-100 h-100 position-absolute top-0 start-0" aria-label="Adicionar Tadalafila ao carrinho"></button>
        </div>
      </div>
    </div>
    </a>

    

  </div>
</div>


<script>
  const carrinho = [];

  function adicionarAoCarrinho(nomeMedicamento) {
    carrinho.push(nomeMedicamento);
    alert(`${nomeMedicamento} foi adicionado ao seu carrinho! Total de itens: ${carrinho.length}`);
    console.log("Itens no carrinho:", carrinho);
  }
</script>



</body>
</html>
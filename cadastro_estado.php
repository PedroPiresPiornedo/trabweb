<html>
<head>
<style>
    .form-group {
      background-color: gray;
    }
  </style>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylo.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color:gray">
  <?php include 'menu.html'; ?>

  <div class="container">
    <form action="inserir_estado.php" method="post">
      <div class="form-group">
        <label for="nome">Nome:</label><br />
        <input type="text" id="nome" name="nome" class="form-control" /><br />
      </div>
      <div class="form-group">
        <label for="uf">UF:</label><br />
        <input type="text" id="uf" name="uf" class="form-control" /><br />
      </div>
      <input type="submit" value="Criar" class="btn btn-primary custom-button" />
    </form>
  </div>
  <script>
document.querySelector('form').addEventListener('submit', function(event) {
  var nome = document.getElementById('nome').value;
  var uf = document.getElementById('uf').value;

  if (!nome || !uf) {
    alert('Por favor, preencha todos os campos.');
    event.preventDefault();
  }
});
</script>
</body>
</html>

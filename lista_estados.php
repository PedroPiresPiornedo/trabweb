<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'menu.html';
include 'conexao.php';

$sql = "SELECT * FROM estados";
$result = $conn->query($sql);
?>

<div class="container">
  <h1>Lista de estados</h1>
  <?php if ($result->num_rows > 0): ?>
    <table class='table table-striped'>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>UF</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["nome"]; ?></td>
            <td><?php echo $row["uf"]; ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p class='alert alert-warning'>0 resultados</p>
  <?php endif; ?>
</div>
<?php
$conn->close();
?>
</body>
</html>
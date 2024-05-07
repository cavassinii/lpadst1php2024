<?php
  namespace VIEW\Software;
  include_once 'C:\xampp\htdocs\lpadst1php2024\DAL\conexao.php';
  $sql = "select * from software;";
  $con = \DAL\Conexao::conectar();
  $registros = $con->query($sql);
  $con = \DAL\Conexao::desconectar();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Software</title>
</head>

<body>
    <h1>Listar Software</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Fabricante</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Qtd Copias</th>
            
        </tr>

        <?php foreach ($registros as $linha) { ?>
            <tr>
                <td> <?php echo $linha['id']; ?> </td>
                <td> <?php echo $linha['descricao'] ?> </td>
                <td> <?php echo $linha['fabricante'] ?> </td>
                <td> <?php echo $linha['tipo'] ?> </td>
                <td> <?php echo $linha['valor'] ?> </td>
                <td> <?php echo $linha['qtdcopias'] ?> </td>
            </tr>
        <?php } ?>
    </table>

</body>

</html>
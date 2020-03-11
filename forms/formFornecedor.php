
<?php
$currentPage="Fornecedores";
session_start();
include_once '../common/cabecalho.php';
?>
<body>
    <form action="../inserts/insertFornecedor.php" method="POST">
        <label for="nomeF">Nome Fornecedor</label>
        <input type="text" id="nomeF" name="nomeF"><br>

        <label for="contactoF">Contacto Fornecedor</label>
        <input type="text" id="contactoF" name="contactoF"><br>
        
        <label for="emailF">Email Fornecedor</label>
        <input type="text" id="emailF" name="emailF"><br>
        
        <input type="submit" value="Submeter">
    </form>

    <?php
     include_once '../common/rodape.php'; 
    ?>
</body>
</html>
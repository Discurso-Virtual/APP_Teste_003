
<?php
$currentPage="Produtos";
session_start();
include_once '../common/cabecalho.php';
?>
<body>
    <form action="../inserts/insertProduto.php" method="POST">

        <label for="refProd">Referência</label>
        <input type="text" id="refProd" name="refProd"> <br>

        <label for="descProd">Descrição Produto</label>
        <input type="text" id="descProd" name="descProd"><br>

        <label for="uniProd">Unidade Produto</label>
        <input type="text" id="uniProd" name="uniProd"><br>
        
        <label for="famProd">Familia Produto</label>
        <input type="text" id="famProd" name="famProd"><br>

        <label for="preco1Prod">Preço1 Produto</label>
        <input type="text" id="preco1Prod" name="preco1Prod"><br>

        <label for="preco2Prod">Preço2 Produto</label>
        <input type="text" id="preco2Prod" name="preco2Prod"><br>

        <label for="preco3Prod">Preço3 Produto</label>
        <input type="text" id="preco3Prod" name="preco3Prod"><br>
        
        <input type="submit" value="Submeter">
    </form>

    <?php
     include_once '../common/rodape.php'; 
    ?>
</body>
</html>
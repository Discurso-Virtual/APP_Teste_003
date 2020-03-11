
<?php
    $currentPage="Produtos";
    session_start();

    include_once '../common/cabecalho.php';

        $id = $_GET['id'];

        include_once '../common/connectDB.php';
    
        $database = new Connection();
        $db = $database->openConnection();
        $sql = "SELECT * from produto where refProduto =". $id ;
    ?>

    <form action="./updateProduto.php" method="POST">
        <?php
             foreach ($db->query($sql) as $row) {
        ?>
        <label for="refProd">Referência</label>
        <input type="text" id="refProd" name="refProd" value="<?php echo $row['refProduto'] ?>"> <br>

        <label for="descProd">Descrição Produto</label>
        <input type="text" id="descProd" name="descProd"value="<?php echo $row['descProduto'] ?>"><br>

        <label for="uniProd">Unidade Produto</label>
        <input type="text" id="uniProd" name="uniProd" value="<?php echo $row['unidadeProduto'] ?>"><br>
        
        <label for="famProd">Familia Produto</label>
        <input type="text" id="famProd" name="famProd"value="<?php echo $row['familiaProduto'] ?>"><br>

        <label for="preco1Prod">Preço1 Produto</label>
        <input type="text" id="preco1Prod" name="preco1Prod" value="<?php echo $row['preco1Produto'] ?>"><br>

        <label for="preco2Prod">Preço2 Produto</label>
        <input type="text" id="preco2Prod" name="preco2Prod" value="<?php echo $row['preco2Produto'] ?>"><br>

        <label for="preco3Prod">Preço3 Produto</label>
        <input type="text" id="preco3Prod" name="preco3Prod" value="<?php echo $row['preco3Produto'] ?>"><br>
        
        <input type="submit" value="Alterar">
    </form>
    <?php
    }
     include_once '../common/rodape.php'; 
    ?>
    
</body>
</html>
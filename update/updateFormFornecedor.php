
<?php
$currentPage="Fornecedores";
session_start();

include_once '../common/cabecalho.php';
    $id = $_GET['id'];

    include_once '../common/connectDB.php';

    $database = new Connection();
    $db = $database->openConnection();
    $sql = "SELECT * from fornecedor where codForne =". $id ;

?>
    <div class="card" >
        <article class="card-body">
            <h4 class="card-title mb-4 mt-1">New Cliente</h4>
            <form action="./updateFornecedor.php" method="POST">
                <?php
                    foreach ($db->query($sql) as $row) {
                ?>
                <div>
                    <label for="codF">Código Fornecedor</label>
                    <input type="text" id="codF" name="codF" value="<?php echo $row['codForne'] ?>"><br>
                </div>
            <label for="nomeF">Nome Fornecedor</label>
            <input type="text" id="nomeF" name="nomeF" value="<?php echo $row['nomeForne'] ?>"><br>

            <label for="contactoF">Contacto Fornecedor</label>
            <input type="text" id="contactoF" name="contactoF"  value="<?php echo $row['contacForne'] ?>"><br>

            <label for="emailF">Email Fornecedor</label>
            <input type="text" id="emailF" name="emailF"  value="<?php echo $row['emailForne'] ?>"><br>
    
            <input type="submit" value="Alterar">
    </form>

    <?php
    }
     include_once '../common/rodape.php'; 
    ?>
</body>
</html>
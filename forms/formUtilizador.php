
<?php
$currentPage="Utilizador";
session_start();
include_once '../common/cabecalho.php';
?>
<body>
    <form action="../inserts/insertUtilizador.php" method="POST">
        <label for="Pnome">Primeiro Nome</label>
        <input type="text" id="Pnome" name="Pnome"><br>

        <label for="Unome">Último Nome</label>
        <input type="text" id="Unome" name="Unome"><br>
        
        <label for="emailU">Email</label>
        <input type="text" id="emailU" name="emailU"><br>

        <label for="username">Username</label>
        <input type="text" id="username" name="username"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"><br>
        
        <input type="submit" value="Criar">
    </form>

    <?php
     include_once '../common/rodape.php'; 
    ?>
</body>
</html>
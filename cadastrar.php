<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>

<body>
    <div class="container">

        <form action="#" method="post">
            <input type="text" name="nome" placeholder="Coloque o nome">

            <input type="text" name="numconta" placeholder="Insira o numero da conta">

            <input type="number" name="saldo" placeholder="Deposito minimo 50 pila">

            <input type="submit" value="Salvar" name="add">
            <input type="reset" value="Limpar">

        </form>
        <?php
        include("./Conta.php");

if (isset($_POST['add'])) {
    if(!empty($_POST['nome'])
    && !empty($_POST['numconta'])
    && !empty($_POST['saldo']))

    $nome = $_POST['nome'];
    $numconta = $_POST['numconta'];
    $saldo = $_POST['saldo'];
    $obj = new Conta();
    $obj->setNome($nome);
    $obj->setNumConta($numconta);
    $obj->setSaldo($saldo);
    $obj->imprimirSaldo();

    var_dump($nome, $numconta, $saldo);
    
    

}else{
        echo "Preencha os campos";

}
?>

    </div>


</body>

</html>
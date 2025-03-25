<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Princípal</title>
</head>
<body>
    <h1>Sistema Bancario</h1>
    <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <label for="opcoes">Escolha a opção</label>
        <select name="opcoes" id="opcoes">
            <option value="depositar">Depositar</option>
            <option value="sacar">Sacar</option>
            <option value="transferir">Transferir</option>
        </select>
        <label for="valor">Valor:</label>
    <input type="text" name="valor" id="valor" required>

    <script>
    document.getElementById("opcoes").addEventListener("change", function() {
        var opcaoSelecionada = this.value;
        var contaDestinoDiv = document.getElementById("conta_destino_div");

        
        if(opcaoSelecionada === "transferir") {
            contaDestinoDiv.style.display = "block";
        } else {
            contaDestinoDiv.style.display = "none";
        }
    });
    </script>

    <div id="conta_destino_div" style="display:none;">
        <label for="conta_destino">Conta de Destino:</label>
        <input type="text" name="conta_destino" id="conta_destino">
    </div>
        <input type="submit" value="Fazer operação">
    </form>
    <pre>



        <?php 
        require_once 'funcoes.php';
            $contas = [
                "2007" => ["Nome" => "Samuel Lafuente", "Saldo" => 9000],
                "2006" => ["Nome" => "Paola Da silva", "Saldo" => 4000]
            ];
            
            exibirSaldo($contas,"2006");
            exibirSaldo($contas,"2007");
        ?>




    </pre>
</body>
</html>
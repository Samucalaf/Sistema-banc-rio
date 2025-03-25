<?php

function Depositar(&$contas, $numeroConta, $valor){
    if ($valor > 0){
        $contas[$numeroConta]['Saldo'] += $valor;
        echo "<p>Deposito de R$ $valor foi realizado com sucesso</p>";
    }else{
        echo "<p>Valor inserido é invalido</p>";
    }
}

function Sacar(&$contas, $numeroConta, $valor){
    if ($valor <= $contas[$numeroConta]['Saldo'] && $valor > 0){
        $contas[$numeroConta]['Saldo'] -= $valor;
        echo "<p>O saque de R$ $valor foi realizado com sucesso</p>";
    }else{
        echo "<p>Saldo indisponivél para saque</p>";
    }
}

function Transferir(&$contas, $origem, $destino, $valor){
    if ($valor <= $contas[$origem]['Saldo'] && $valor > 0){
        Sacar($contas, $origem, $valor);
        Depositar($contas, $destino, $valor);
        echo "Transferencia de valor R$ $valor realizada para {$contas[$destino]['Nome']}!";
    }else{
        echo "Transferencia não realizada. Saldo insuficiente ou saldo indisponivel";
    }
}

function exibirSaldo($contas, $numeroConta){
    echo "<p>Saldo atual de {$contas[$numeroConta]['Nome']}: R$ {$contas[$numeroConta]['Saldo']}</p>";
}
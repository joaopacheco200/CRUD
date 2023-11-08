<?php

class Conta {

private $nome;
private $numConta;
private $saldo;

function __construct(){
$this->nome =  "Xiru da Silva";
$this->numConta =  "123-4";
$this->saldo =  50;
}

    


function setNome($nome){
    $this->nome = $nome;
}

function getNome(){
    return $this->nome;
}


function setNumConta($numConta){
    $this->numConta= $numConta;
}


function getNumConta(){
    return $this->numConta;
}

function setSaldo($saldo){
    $this->saldo= $saldo;
}

function getSaldo(){
    return $this->saldo;
}

function imprimirDados(){
    echo"<h1> Dados da conta</h1>";
    echo"Nome:".$this->nome;
    echo"Numero Conta:".$this->numConta;
    $this->imprimirSaldo();
}


function imprimirNome(){

    echo"Ola Nome <br>";
}

function imprimirTexto($texto){
echo"<br> Ola ".$texto."<br>";

}

function calcular(){
    return (10+30);
    
    }

    function maquinaCalcular($num1,$num2, $op)
    {
        switch($op){
            case 1:
                $res = $num1 + $num2; break;

            case 2:
                $res = $num1 - $num2; break;

            case 3:
                $res = $num1 * $num2; break;

                default:
                if($num2!= 0){
                    $res = $num1 / $num2;
                
                }else {
                    $res = 0;
                }  
        }
                    return $res;
        
        }

function imprimirSaldo()
{
    echo"Saldo disponive R$".$this->getSaldo();
}
function debitar ($valor){
    if($valor <= $this->saldo){
        $this->saldo-=$valor;
        echo"O valor R$".$valor."Foi sacado com sucesso!";
    }else{
        echo"Saldo insuficiente";
    }

}

function depositar($valor) {
    if($valor>0){
        $this->saldo += $valor;
        echo"O valor R$".$valor."Foi depositado com sucesso!";
    }else{
        echo"Apenas valores acima de 1 Real";
    }
}
}




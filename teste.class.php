<?php
//Importação
require_once("pessoa.class.php");

//Nome da classe
class Teste{
    //Objeto pessoa com visibilidade privada
    private $pessoa;
    
    //Iniciando o método construtor
    public function __construct(){
        //Objeto pessoa que recebe a classe Pessoa()
        $pessoa = new Pessoa();

        //O método getNome recebe um valor
        $pessoa->setNome($_POST['nome'] . "<br>");
        //Imprimir o valor recebido pelo método getNome
        echo $pessoa->getNome();

        //O método getEndereco recebe um valor
        $pessoa->setEndereco($_POST['endereco'] . "<br>");
        //Imprimir o valor recebido pelo método getEndereco
        echo $pessoa->getEndereco();
        
        //O método getBairro recebe um valor
        $pessoa->setBairro($_POST['bairro'] . "<br>");
        //Imprimir o valor recebido pelo método getBairro
        echo $pessoa->getBairro();
        
        //O método getCep recebe um valor
        $pessoa->setCep($_POST['cep'] . "<br>");
        //Imprimir o valor recebido pelo método getCep
        echo $pessoa->getCep();
        
        //O método getCidade recebe um valor
        $pessoa->setCidade($_POST['cidade'] . "<br>");
        //Imprimir o valor recebido pelo método getCidade
        echo $pessoa->getCidade();
        
        //O método getEstado recebe um valor
        $pessoa->setEstado($_POST['estado'] . "<br>");
        //Imprimir o valor recebido pelo método getEstado
        echo $pessoa->getEstado();
    }//Finalizando o método construtor

}new Teste();

?>
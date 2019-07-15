<?php
 
include_once '../conexao/conexao.php';

class Produto{

 private $nome;
 private $preco;
 private $descricao;
 private $imagem;

 function __construct($nome, $preco, $descricao, $imagem){
   $this->nome = $nome;
   $this->preco = $preco;
   $this->descricao = $descricao;
   $this->imagem = $imagem;
 }

 public function cadastrar(){
   $sql = "insert into Produto(nome, preco, descricao, imagem) values (':nome', ':preco', ':descricao', ':imagem')";
   $array1 = array(':nome', ':preco', ':descricao', ':imagem');
   $array2 = array($this->nome, $this->preco, $this->descricao, $this->imagem);
   $sql = str_replace($array1, $array2, $sql);
   $resultado = new Conexao();
   $resultado->query($sql);
   echo "<script>alert('Produto cadastrado com sucesso!!')</script>";
}

public function alterar($id){
  $sql = "update Produto set nome=':nome', preco=':preco', descricao=':descricao', imagem=':imagem' where id=:id";
   $array1 = array(':nome', ':preco', ':descricao', ':imagem', ':id');
   $array2 = array($this->nome, $this->preco, $this->descricao, $this->imagem, $id);
   $sql = str_replace($array1, $array2, $sql);
   $resultado = new Conexao();
   $resultado->query($sql);
  // echo "<script>alert('Produto alterado com sucesso!!')</script>";
}

public static function buscar($termo){
    $sql = "select * from Produto where nome like '%:termoBusca%'";
    $array1 = array(':termoBusca');
    $array2 = array($termo);
    $sql = str_replace($array1, $array2, $sql);
    $resultados = new Conexao();
    $resultados = $resultados->query($sql);
    return mysqli_fetch_all($resultados, MYSQLI_ASSOC);
 }

 public static function excluir($id){
    $sql = "delete from Produto where id=':id'";
    $sql = str_replace(':id', $id, $sql);
    
    $resultados = new Conexao();
    $resultados = $resultados->query($sql);
 }

 public static function getProdutoPorId($id){
    $sql = "select * from Produto where id=':id'";
    $sql = str_replace(':id', $id, $sql);

    $resultados = new Conexao();
    $resultados = $resultados->query($sql);
    return $resultados->fetch_array();
 }

}

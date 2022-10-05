<?php

include_once('./conexao.php');


if(isset($_POST)){
    if($_POST['gravar']==='grava'){
        $query = 'INSERT INTO teste (nome,telefone,cpf) VALUES (:nome, :telefone, :cpf)';
        $resultado = $conexao->prepare($query);
        $resultado->bindParam(":nome",$_POST['nome']);
        $resultado->bindParam(":telefone",$_POST['telefone']);
        $resultado->bindParam(":cpf",$_POST['cpf']);
        try{
        
            $resultado->execute();

            } catch(\Throwable $th){
                echo 'não';
            }
        header('location:./index.php');
    }
}
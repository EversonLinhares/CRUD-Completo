<?php
 switch ($_REQUEST["acao"]) {
 	case 'cadastrar':
 	     $nome = $_POST["nome_hospital"];
 	     $end = $_POST["end_hospital"];

 	     $sql = "INSERT INTO hospital (nome_hospital, end_hospital) 
 		        VALUES ('{$nome}', '$end')";
        $res = $conn->query($sql);
        /*
        if($res==true){
            print"<div class='alert alert-success'>Foi cadastrado com sucesso !</div>";
        }else{
            print"<div class='alert alert-danger'>Não foi possivel cadastrar ! </div>";
        }*/
        if($res==true){
            print"<script>alert('Foi cadastrado com sucesso!');</script>";
            print"<script>location.href='?page=listar-hospital';</script>";
        }else{
            print"<div class='alert alert-danger'>Não foi possivel cadastrar ! </div>";
        }

 		break;

 	case 'editar':
 		$nome = $_POST["nome_hospital"];
        $end = $_POST["end_hospital"];

        $sql = "UPDATE hospital SET 
                nome_hospital='{$nome}',
                end_hospital='{$end}'
                WHERE
                id_hospital=".$_POST["id_hospital"];

        $res = $conn->query($sql) or die ($conn->error);

           if($res==true){
            print"<script>alert('Foi editado com sucesso!');</script>";
            print"<script>location.href='?page=listar-hospital';</script>";
        }else{
            print"<div class='alert alert-danger'>Não foi possivel editar ! </div>";
        }
                
 		break;

 	case 'excluir':
 	      $sql = "DELETE FROM hospital WHERE id_hospital=".$_REQUEST["id_hospital"];

          $res = $conn->query($sql) or die ($conn->error);

           if($res==true){
            print"<script>alert('Foi excluido com sucesso!');</script>";
            print"<script>location.href='?page=listar-hospital';</script>";
        }else{
            print"<div class='alert alert-danger'>Não foi possivel excluir ! </div>";
        }

        break;


 	
 	
 }



?>
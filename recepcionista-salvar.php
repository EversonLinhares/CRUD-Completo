<?php
 switch ($_REQUEST["acao"]) {
 	case 'cadastrar':
 		$hospital = $_POST["hospital_id_hospital"];
 		$nome = $_POST["nome_recepcionista"];
 		  
 		 $sql= "INSERT INTO recepcionista (hospital_id_hospital, 
 		   nome_recepcionista) VALUES ({$hospital}, '{$nome}')";
           
           $res = $conn->query($sql);
 		  
 		   if($res==true){
            print"<script>alert('Foi cadastrado com sucesso!');</script>";
            print"<script>location.href='?page=listar-recepcionista';</script>";
        }else{
            print"<div class='alert alert-danger'>Não foi possivel cadastrar ! </div>";
        }

 		break;

    case 'editar':
 		$sql = "UPDATE recepcionista SET 
                  hospital_id_hospital=".$_POST["hospital_id_hospital"].",
                  nome_recepcionista='".$_POST["nome_recepcionista"]."'
                  WHERE
                     id_recepcionista=".$_POST["id_recepcionista"];

             $res = $conn->query($sql);
 		  
 		   if($res==true){
            print"<script>alert('Foi Editado com sucesso!');</script>";
            print"<script>location.href='?page=listar-recepcionista';</script>";
        }else{
            print"<div class='alert alert-danger'>Não foi possivel Editar ! </div>";
        }


 		        
 		break;

    case 'excluir':
 		$sql = "DELETE FROM recepcionista WHERE id_recepcionista=".$_REQUEST["id_recepcionista"];
 		$res = $conn->query($sql);
 		  
 		   if($res==true){
            print"<script>alert('Foi excluido com sucesso!');</script>";
            print"<script>location.href='?page=listar-recepcionista';</script>";
        }else{
            print"<div class='alert alert-danger'>Não foi possivel Excluir ! </div>";
        }



 		break;

 		
 	
 	
 }



?>
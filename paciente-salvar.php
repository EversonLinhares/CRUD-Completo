<?php
	switch ($_POST["acao"]) {
		case 'cadastrar':
		    $nome  = $_POST["nome_paciente"];
			$nasc = $_POST["dt_nasc_paciente"];
			$sexo = $_POST["sexo_paciente"];
			$cpf = $_POST["cpf_paciente"];
			$grau = $_POST["grau_de_urgencia_paciente"];

			$sql = "INSERT INTO paciente (nome_paciente,dt_nasc_paciente,sexo_paciente,cpf_paciente,grau_de_urgencia_paciente) VALUES ('{$nome}' ,'{$nasc}','{$sexo}','{$cpf}','{$grau}')";

			$res = $conn->query($sql) or die($conn->error);
			
			if($res==true){
				print "<script>alert('Foi cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=listar-paciente';</script>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar :(</div>";
			}
			break;
		
		case 'editar':
			# code...
			break;

		case 'excluir':
			# code...
			break;
	}
?>
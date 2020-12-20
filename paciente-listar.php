<h1>Listar Paciente</h1>
<?php
$sql= "SELECT * FROM paciente ";
$res = $conn->query($sql) or die ($conn->error);
$qtd = $res->num_rows;

if($qtd > 0){
   print "<p>Encontrou<b> $qtd</b> resultado(s)</p>";
   print"<table class='table table-bordered table-striped table-hover'>";
   print"<tr>";
       print "<th>#</th>";
       print "<th>Nome do(a) Paciente</th>";
       print "<th>dt_nasc_paciente</th>";
       print "<th>sexo_paciente</th>";
       print "<th>cpf_paciente</th>";
       print "<th>grau_de_urgencia_paciente</th>";
       print"</tr>";
   while($row = $res->fetch_object()){
   	print"<tr>";
       print "<td>". $row->id_paciente."</td>";
       print "<td>".$row->nome_paciente."</td>";
       print"<td>".$row->dt_nasc_paciente."</td>";
       print "<td>".$row->sexo_paciente."</td>";
       print "<td>".$row->cpf_paciente."</td>";
       print "<td>".$row->grau_de_urgencia_paciente."</td>";
       print"</tr>";
   }
   print"</table>";
}else{
	print "<div class='alert alert-danger'>Nenhum dado encontrado</div>";
}




?>

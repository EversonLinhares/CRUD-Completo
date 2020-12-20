<h1>Listar Hospital</h1>
<?php
$sql= "SELECT * FROM hospital";
$res = $conn->query($sql) or die ($conn->error);
$qtd = $res->num_rows;

if($qtd > 0){
   print "<p>Encontrou<b> $qtd</b> resultado(s)</p>";
   print"<table class='table table-bordered table-striped table-hover'>";
   print"<tr>";
       print "<th>#</th>";
       print "<th>Nome do Hospital</th>";
       print "<th>Endereço do Hospital</th>";
       print "<th>Ações</th>";
       print"</tr>";
   while($row = $res->fetch_object()){
   	print"<tr>";
       print "<td>". $row->id_hospital."</td>";
       print "<td>".$row->nome_hospital."</td>";
       print "<td>".$row->end_hospital."</td>";
       print"<td>
                 <button class='btn btn-success' onclick=\"location.href='?page=editar-hospital&id_hospital=".$row->id_hospital."';\">Editar</button>
                 <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir')){location.href='?page=salvar-hospital&acao=excluir&id_hospital=".$row->id_hospital."';}else{false}\" >Excluir</button>
            </td>";

       print"</tr>";
   }
   print"</table>";
}else{
	print "<div class='alert alert-danger'>Nenhum dado encontrado</div>";
}




?>
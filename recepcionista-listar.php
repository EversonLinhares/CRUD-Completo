<h1>Listar Recepcionista</h1>
<?php
$sql= "SELECT * FROM recepcionista AS rec
       INNER JOIN hospital AS ho
       ON rec.hospital_id_hospital= ho.id_hospital";
$res = $conn->query($sql) or die ($conn->error);
$qtd = $res->num_rows;

if($qtd > 0){
   print "<p>Encontrou<b> $qtd</b> resultado(s)</p>";
   print"<table class='table table-bordered table-striped table-hover'>";
   print"<tr>";
       print "<th>#</th>";
       print "<th>Hospital</th>";
       print "<th>Nome do Recepcionista</th>";
       print "<th>Ações</th>";
       print"</tr>";
   while($row = $res->fetch_object()){
   	print"<tr>";
       print "<td>". $row->id_recepcionista."</td>";
       print "<td>".$row->nome_hospital."</td>";
       print"<td>".$row->nome_recepcionista."</td>";
       print"<td>
              <button class='btn btn-success' onclick=\"
                    location.href='?page=editar-recepcionista&id_recepcionista=".$row->id_recepcionista."';\">Editar</button>
              <button class='btn btn-danger'onclick=\"if(confirm('Tem certeza que deseja excluir')){location.href='?page=salvar-recepcionista&acao=excluir&id_recepcionista=".$row->id_recepcionista."';}else{false}\">Excluir</button>
            </td>";
      print"</tr>";
   }
   print"</table>";
}else{
	print "<div class='alert alert-danger'>Nenhum dado encontrado</div>";
}




?>
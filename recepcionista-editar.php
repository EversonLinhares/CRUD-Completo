<h1>Editar Recepcionista</h1>
<?php
    $sql = "SELECT * FROM recepcionista WHERE id_recepcionista=".$_REQUEST["id_recepcionista"];

    $res = $conn->query($sql) or die ($conn->error);

    $row = $res->fetch_object();
?>
<form action="?page=salvar-recepcionista" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_recepcionista" value="<?php print $row->id_recepcionista;  ?>">	

    <div class="form-group">
    	<label>Nome do Hospital</label>
<?php
$sql_1= "SELECT * FROM hospital";
$res_1 = $conn->query($sql_1) or die ($conn->error);
$qtd_1 = $res_1->num_rows;

if($qtd_1 > 0){
   print"<select class='form-control' name='hospital_id_hospital'>";
   while($row_1 = $res_1->fetch_object()){
   	if($row_1->id_hospital == $row->hospital_id_hospital){
        print "<option value='".$row_1->id_hospital."' selected>".$row_1->nome_hospital."</option>";
   	}else{
        print "<option value='".$row_1->id_hospital."'>".$row_1->nome_hospital."</option>";
    }
   
   	
       
   }
   print"</select>";
}else{
	print "<div class='alert alert-danger'>Nenhum dado encontrado</div>";
}

?>
    </div>
    <div class="form-group">
    	<label>Nome do(a) Recepcionista</label>
    	<input type="text" name="nome_recepcionista" class="form-control" value="
    	<?php print $row->nome_recepcionista; ?>">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>
<h1>Cadastrar Recepcionista</h1>
<form action="?page=salvar-recepcionista" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
    <div class="form-group">
    	<label>Nome do Hospital</label>
<?php
$sql= "SELECT * FROM hospital";
$res = $conn->query($sql) or die ($conn->error);
$qtd = $res->num_rows;

if($qtd > 0){
   print"<select class='form-control' name='hospital_id_hospital'>";
   while($row = $res->fetch_object()){
       print "<option value='".$row->id_hospital."'>".$row->nome_hospital."</option>";
       
   }
   print"</select>";
}else{
	print "<div class='alert alert-danger'>Nenhum dado encontrado</div>";
}

?>
    </div>
    <div class="form-group">
    	<label>Nome do(a) Recepcionista</label>
    	<input type="text" name="nome_recepcionista" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>
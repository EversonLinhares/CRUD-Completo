<h1>Editar Hospital</h1>
<?php
    $sql = "SELECT * FROM hospital WHERE id_hospital = ".$_REQUEST["id_hospital"];

    

    $res = $conn->query($sql) or die ($conn->error);

    $row = $res->fetch_object();

?>
<form action="?page=salvar-hospital" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_hospital" value="<?php print $row->id_hospital;?>">
<div class="form-group">
	<label>Nome do Hospital</label>
	<input type="text" name="nome_hospital" class="form-control" value="<?php print $row->nome_hospital; ?>">
</div>
<div class="form-group">
	<label>Endereço do Hospital</label>
	<textarea name="end_hospital" rows="4" class="form-control" > <?php print $row->end_hospital; ?> </textarea>
</div>
<div class="form-group">
	<button class="btn btn-primary" type="submit">Enviar</button>
</div>
</form>
<h1>Cadastrar Hospital</h1>
<form action="?page=salvar-hospital" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
<div class="form-group">
	<label>Nome do Hospital</label>
	<input type="text" name="nome_hospital" class="form-control">
</div>
<div class="form-group">
	<label>Endereço do Hospital</label>
	<textarea name="end_hospital" rows="4" class="form-control" ></textarea>
</div>
<div class="form-group">
	<button class="btn btn-primary" type="submit">Enviar</button>
</div>
</form>
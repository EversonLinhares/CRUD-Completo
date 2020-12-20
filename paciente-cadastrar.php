<h1>Cadastrar Paciente</h1>
<form action="?page=salvar-paciente" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
<div class="form-group">
	<label>Nome do Paciente</label>
	<input type="text" name="nome_paciente" class="form-control">
</div>
<div class="form-group">
	<label>Data Nascimento</label>
	<input type="date" name="dt_nasc_paciente">
</div>
<div class="form-group">
       <label>Sexo </label>
       <INPUT TYPE="radio" name="sexo_paciente" value="M" checked> MASCULINO
       <INPUT TYPE="radio" name="sexo_paciente" value="F"> FEMININO
</div>
<div class="form-group">
		<label>CPF </label>
		<input type="text" name="cpf_paciente" class="form-control" maxlength="11">
</div>
<div class="form-group">
      <select name="grau_de_urgencia_paciente">
  <optgroup label="Grau De Urgencia">
    <option>Emergência: atendimento imediato </option>
    <option>Muito urgente: espera de até 10 minutos</option>
    <option>Urgente: espera de até 1 hora</option>
    <option>Pouco urgente: espera de até 2 horas</option>
    <option>Não urgente: espera de até 4 horas</option>
  
  
</select>
</div>
<div class="form-group">
	<button class="btn btn-primary" type="submit">Enviar</button>
</div>
</form>
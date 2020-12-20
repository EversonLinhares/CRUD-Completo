CREATE TABLE hospital (
  id_hospital INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_hospital VARCHAR(255) NULL,
  end_hospital VARCHAR(255) NULL,
  PRIMARY KEY(id_hospital)
);

CREATE TABLE paciente (
  id_paciente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_paciente VARCHAR(255) NULL,
  dt_nasc_paciente DATE NULL,
  sexo_paciente ENUM ('M','F') NULL,
  cpf_paciente VARCHAR(11) NULL,
  grau_de_urgencia_paciente TEXT NULL,
  PRIMARY KEY(id_paciente)
);

CREATE TABLE recepcionista (
  id_recepcionista INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  hospital_id_hospital INTEGER UNSIGNED NOT NULL,
  nome_recepcionista VARCHAR(255) NULL,
  PRIMARY KEY(id_recepcionista),
  INDEX recepcionista_FKIndex1(hospital_id_hospital)
);

CREATE TABLE recepcionista_cadastro_paciente (
  id_recepcionista_cadastro_paciente INTEGER UNSIGNED NOT NULL,
  recepcionista_id_recepcionista INTEGER UNSIGNED NOT NULL,
  paciente_id_paciente INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(id_recepcionista_cadastro_paciente, recepcionista_id_recepcionista, paciente_id_paciente),
  INDEX recepcionista_has_paciente_FKIndex1(recepcionista_id_recepcionista),
  INDEX recepcionista_has_paciente_FKIndex2(paciente_id_paciente)
);


